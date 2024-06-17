<?php
// Бекенд

/**
 * Дебаг переменной
 */
// fw_print($value);


/**
 * Рендер шаблона
 */
// fw_render_view($file_path, $view_variables = [])

/**
 * AJAX
 *
 * @link
 */
//Регестрируем экшны для обработки аякса
//add_action('wp_ajax_pir', 'my_action_callback');
//add_action('wp_ajax_nopriv_pir', 'my_action_callback');
//
//function my_action_callback() {
//    echo 'hello';
//    if ( $_POST ) {
//        // обрабатываем запрос
//
//        // возвращаем результат
//        wp_send_json([
//
//        ]);
//    }
//    wp_die();
//}

//add_action( 'wp_ajax_do_something',        'get_posts_callback' ); // For logged in users
//add_action( 'wp_ajax_nopriv_do_something', 'get_posts_callback' ); // For anonymous users
//
//function do_something_callback(){
//    echo(json_encode( array('status'=>'ok','request_vars'=>$_REQUEST) ));
//    wp_die();
//}


add_action('wp_ajax_get_cat', 'ajax_show_posts_in_cat');
add_action('wp_ajax_nopriv_get_cat', 'ajax_show_posts_in_cat');
function ajax_show_posts_in_cat()
{

//    $link = !empty($_POST['link']) ? esc_attr($_POST['link']) : false;
//    $slug = $link ? wp_basename($link) : true;
    $catcat = $_POST['cat_slug'];
    $section_name = $_POST['section'];
    $sort_key = $_POST['sort_key'];
    $status = $_POST['status'];
//   print_r($_POST);
//    echo "<script>console.log('{$_POST}' );</script>";

//    $cat  = get_category_by_slug( $catcat );
    $cat = get_category_by_slug($catcat);

    if(!($status == '')){
        $args1 = (array(
            'post_status' => 'publish',
            'tag' => array($catcat. ' ' .$status),
            'meta_key' => $sort_key,
            'category_name' => $section_name,
            'orderby' => 'meta_value',
            'order' => 'DESC',
        ));
    } else{
        $args1 = (array(
            'post_status' => 'publish',
            'tag' => array($catcat),
            'meta_key' => $sort_key,
            'category_name' => $section_name,
            'orderby' => 'meta_value',
            'order' => 'DESC',
        ));
    }

    if (!$_POST['cat_slug']) {
       echo '<tr>
                    <td style="text-align: center" colspan="4">Информация отсутствует</td>
                </tr>';
    }









    query_posts($args1);

    if (have_posts()) {
        while (have_posts()) : the_post();

            get_template_part('/template-parts/content', $section_name);
        endwhile;
    } else {
        echo '<tr class="no-index-search">
                    <td style="text-align: center" colspan="3">Информация отсутствует</td>
                </tr>';
    }

    wp_die();
}


add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{
//    wp_enqueue_script( 'custom', plugins_url( 'custom.js', __FILE__ ), array( 'jquery' ) );
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/pir-filter.js', array('jquery'), false, true);

    wp_localize_script('custom', 'myPlugin', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}


add_action('registered_post_type', 'make_posts_hierarchical', 99, 2);

/**
 * Ensure posts post type is hierarchal and allows page attributes
 *
 * Initial Setup - Runs after each post type is registered
 */
function make_posts_hierarchical($post_type, $pto)
{

    // Return, if not post type posts
    if ($post_type != 'post') return;

    // access $wp_post_types global variable
    global $wp_post_types;

    // Set post type "post" to be hierarchical
    $wp_post_types['post']->hierarchical = 1;

    // Add page attributes to post backend
    // This adds the box to set up parent and menu order on edit posts.
    add_post_type_support('post', 'page-attributes');
}

/**
 *
 * Edit View of Permalink
 *
 * This affects editing permalinks, and $permalink is an array [template, replacement]
 * where replacement is the post_name and template has %postname% in it.
 *
 **/
add_filter('get_sample_permalink', function ($permalink, $post_id, $title, $name, $post) {
    if ($post->post_type != 'post' || !$post->post_parent) {
        return $permalink;
    }

    // Deconstruct the permalink parts
    $template_permalink = current($permalink);
    $replacement_permalink = next($permalink);

    // Find string
    $postname_string = '%postname%';
    $altered_template_with_parent_slug = get_path_from_post_id($post->ID, $postname_string);
    $new_template = str_replace("/$postname_string/", "/$altered_template_with_parent_slug/", $template_permalink);

    $new_permalink = [$new_template, $replacement_permalink];

    return $new_permalink;
}, 99, 5);

/**
 * Alter the link to the post
 *
 * This affects get_permalink, the_permalink etc.
 * This will be the target of the edit permalink link too.
 *
 * Note: only fires on "post" post types.
 */
add_filter('post_link', function ($post_link, $post, $leavename) {

    if ($post->post_type != 'post' || !$post->post_parent || $post->post_status == 'draft') {
        return $post_link;
    }

    // this filter can be applied when we want the templating for slug and also when we don't.
    // so check if the templating is there and continue to support it if so.
    $post_slug = stristr($post_link, '%postname%') ? '%postname%' : $post->post_name;
    $path = get_path_from_post_id($post->ID, $post_slug);

    return home_url($path);
}, 99, 3);

/**
 * Before getting posts
 *
 * Has to do with routing... adjusts the main query settings
 *
 */
add_action('pre_get_posts', function ($query) {
    global $wp_query;

    $original_query = $query;
    $uri_with_query_string = $_SERVER['REQUEST_URI'];
    $query_string = $_SERVER['QUERY_STRING'];
    $uri = str_replace('?' . $query_string, '', $uri_with_query_string);

    // Do not do this post check all the time
    if ($uri != '/' && $query->is_main_query() && !is_admin()) {

        $post = get_post_from_uri($uri);

        if (!$post) {
            return $original_query;
        }

        // pretty high confidence that we need to override the query.
        $query->query_vars['post_type'] = ['post'];
        $query->is_home = false;
        $query->is_page = true;
        $query->is_single = false;
        $query->is_404 = false;
        $query->queried_object_id = $post->ID;
        $query->set('page_id', $post->ID);

        $wp_query = $query;

        return $query;
    }

    return $wp_query;
}, 0);

add_filter('preview_post_link', 'preview_redirect_fix');

function preview_redirect_fix($url)
{
    global $post;

    if ($post->post_status == 'draft') {

        $pieces = (object)parse_url($url);
        $url = implode('', [
            $pieces->scheme,
            '://',
            $pieces->host . '/index.php?',
            $pieces->query
        ]);
    }

    return $url;
}

function get_path_from_post_id($pid, $current_slug = '')
{
    $pid_original = $pid;
    $slugs = [];
    while (!empty($pid)) {
        // Load the post for pid
        $p = get_post($pid);
        // Allow the original post to have a different name (useful for templating %postname% in permalink preview)
        $slugs[] = $pid == $pid_original && !empty($current_slug)
            ? $current_slug : $p->post_name;
        // Setup parent post id as new pid
        $pid = $p->post_parent;
    }

    return implode('/', array_reverse($slugs));
}

function get_post_from_uri($uri)
{
    global $wpdb;

    $basename = basename($uri);
    $depth = count(explode('/', trim($uri, '/')));

    // This inner query says "go get all posts - (ID, SLUG, PARENT_ID) - where slug = (last part of url)"
    $baseQuery = sprintf("select id, post_name as p1_slug, post_parent as p1_parent
      from $wpdb->posts where post_type = '%s' and post_name = '%s'", 'post', $wpdb->_real_escape($basename));

    // We will use concat to make slugs out of the results!
    // We will array_reverse the concats and implode with '/' to make the slug.
    $concats = [];
    $concats[] = "IFNULL(p1_slug, '')";

    // initialize our SQL string with the base query
    $sql = $baseQuery;

    // We will do 1 more depth level than we need to confirm the slug would not lazy match
    // This for loop builds inside out.
    for ($c = 1; $c < $depth + 2; $c++) {
        $d = $c;
        $p = $c + 1;

        $pre = "select d${d}.*, p${p}.post_name as p${p}_slug, p${p}.post_parent as p${p}_parent from (";
        $suf = ") as d${d} left join $wpdb->posts p${p} on p${p}.id = d${d}.p${c}_parent";

        $sql = $pre . $sql . $suf;

        $concats[] = sprintf("IFNULL(p${p}_slug,'')");
    }

    $trimmedUri = trim($uri, '/');
    $concatSql = implode(", '/',", array_reverse($concats));
    $finalSql = "select * from (select TRIM(BOTH '/' FROM
    concat($concatSql)) as slug, id from ($sql) as d${c}) as all_slugs
    where slug = '$trimmedUri';";

    $result = $wpdb->get_results($finalSql);
    if (empty($result) || !($post = current($result))) {
        return false;
    }

    return get_post($post->id);
}


add_filter('excerpt_length', function () {
    return 15;
});
function loadmore_script()
{
}

add_action('wp_enqueue_scripts', 'loadmore_script');
function loadmore_get_posts()
{
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    query_posts($args);
    // если посты есть
    if (have_posts()) :
        while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>" <?php post_class('pir-news__wrap'); ?>
               style="background-color: <?php the_field('color_picker_news'); ?>">

                <div class="pir-news__tambnail">
                    <h3 class="pir-news__title"><?php the_title(); ?></h3>
                    <?php the_excerpt() ?>
                </div>

                <div class="pir-news__footer">

                    <?php
                    $articles = get_the_category();
                    if (!empty($articles[1]->cat_name)) {
                        $test = $articles[1]->cat_name;
                        echo ' <span class="pir-news__articles">Статья</span>';
                    }
                    ?>

                    <span class="pir-news__date"><?php the_field('date_news') ?></span>
                </div>


            </a>

        <?php
            //get_template_part('content-template');

        endwhile;
    endif;
    die();
}

add_action('wp_ajax_loadmore', 'loadmore_get_posts');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_get_posts');


function true_breadcrumbs()
{

    // получаем номер текущей страницы
    $page_num = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $separator = ' <i class="angle-arrow-right"></i> '; //  разделяем обычным слэшем, но можете чем угодно другим

    // если главная страница сайта
    if (is_front_page()) {

        if ($page_num > 1) {
            echo '<a class="home-page" href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else { // не главная

        echo '<a class="home-page" href="' . site_url() . '">Главная</a>' . $separator;


        if (is_single()) { // записи

            the_category(', ');
            echo $separator;
            the_title();

        } elseif (is_page()) { // страницы WordPress

            global $post;
// если у текущей страницы существует родительская
            if ($post->post_parent) {

                $parent_id = $post->post_parent; // присвоим в переменную
                $breadcrumbs = array();

                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id = $page->post_parent;
                }

                echo join($separator, array_reverse($breadcrumbs)) . $separator;

            }

            the_title();

        } elseif (is_category()) {

            single_cat_title();

        } elseif (is_tag()) {

            single_tag_title();

        } elseif (is_day()) { // архивы (по дням)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
            echo get_the_time('d');

        } elseif (is_month()) { // архивы (по месяцам)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo get_the_time('F');

        } elseif (is_year()) { // архивы (по годам)

            echo get_the_time('Y');

        } elseif (is_author()) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif (is_404()) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ($page_num > 1) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }


    }

}

add_action('wp_enqueue_scripts', 'true_jqueryui_scripts');

function true_jqueryui_scripts()
{


}

add_action('wp_ajax_mywebsitesearch', 'true_search');
add_action('wp_ajax_nopriv_mywebsitesearch', 'true_search');

function true_search()
{

    $search_term = isset($_GET['term']) ? $_GET['term'] : '';

    $posts = get_posts(array(
        'posts_per_page' => 20,
        'post_type' => array('post', 'page'),
        's' => $search_term
    ));

    $results = array();

    if ($posts) {

        foreach ($posts as $post) {

            $results[] = array(
                'id' => $post->ID,
                'value' => $post->post_title,
                'url' => get_permalink($post->ID)
            );

        }

    }

    wp_send_json($results);


}





