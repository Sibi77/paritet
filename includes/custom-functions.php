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

add_filter( 'excerpt_length', function(){
    return 15;
} );
function loadmore_script() {
}

add_action('wp_enqueue_scripts', 'loadmore_script');
function loadmore_get_posts(){
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    query_posts($args);
    // если посты есть
    if(have_posts()) :
        while(have_posts()): the_post(); ?>
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



function true_breadcrumbs(){

    // получаем номер текущей страницы
    $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $separator =  ' <i class="angle-arrow-right"></i> '; //  разделяем обычным слэшем, но можете чем угодно другим

    // если главная страница сайта
    if( is_front_page() ){

        if( $page_num > 1 ) {
            echo '<a class="home-page" href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else { // не главная

        echo '<a class="home-page" href="' . site_url() . '">Главная</a>' . $separator;


        if( is_single() ){ // записи

            the_category( ', ' ); echo $separator; the_title();

        } elseif ( is_page() ){ // страницы WordPress 

            global $post;
// если у текущей страницы существует родительская
            if ( $post->post_parent ) {

                $parent_id  = $post->post_parent; // присвоим в переменную
                $breadcrumbs = array();

                while ( $parent_id ) {
                    $page = get_page( $parent_id );
                    $breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
                    $parent_id = $page->post_parent;
                }

                echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;

            }

            the_title();

        } elseif ( is_category() ) {

            single_cat_title();

        } elseif( is_tag() ) {

            single_tag_title();

        } elseif ( is_day() ) { // архивы (по дням)

            echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
            echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
            echo get_the_time('d');

        } elseif ( is_month() ) { // архивы (по месяцам)

            echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
            echo get_the_time('F');

        } elseif ( is_year() ) { // архивы (по годам)

            echo get_the_time( 'Y' );

        } elseif ( is_author() ) { // архивы по авторам

            global $author;
            $userdata = get_userdata( $author );
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ( $page_num > 1 ) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }


    }

}

