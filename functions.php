<?php
/**
 * paritet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package paritet
 */

if (!function_exists('pir_setup')) :
    function pir_setup()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Let WordPress manage the document title.
        add_theme_support('title-tag');
        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(

            'primary' => esc_html__('Шапка сайта', 'pir'),
            'mega_menu' => esc_html__('Мега меню', 'pir'),
            'mobile_menu' => esc_html__('Мобильное меню', 'pir'),
            'rules_prices' => esc_html__('Правила и цены (фут)', 'pir'),
            'main_sections_site' => esc_html__('Основные разделы сайта (фут)', 'pir'),
        ));
        // Switch default core markup for search form, comment form, and comments
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'pir_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function pir_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'pir' ),
//		'id'            => 'pir-sidebar',
//		'description'   => esc_html__( 'Add widgets here.', 'pir' ),
//		'before_widget' => '<section id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//}
//add_action( 'widgets_init', 'pir_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


/**
 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string $handle Name of the script. Should be unique.
 * @param string|bool $src Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
 * @param array $deps Optional. An array of registered script handles this script depends on. Default empty array.
 * @param bool $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
 *                               Default 'false'.
 */
function enqueue_versioned_script($handle, $src = false, $deps = array(), $in_footer = false)
{
    wp_enqueue_script($handle, get_stylesheet_directory_uri() . $src, $deps, filemtime(get_stylesheet_directory() . $src), $in_footer);
}

/**
 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string $handle Name of the stylesheet. Should be unique.
 * @param string|bool $src Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
 * @param array $deps Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
 * @param string $media Optional. The media for which this stylesheet has been defined.
 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
 *                            '(orientation: portrait)' and '(max-width: 640px)'.
 */
function enqueue_versioned_style($handle, $src = false, $deps = array(), $media = 'all')
{
    wp_enqueue_style($handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime(get_stylesheet_directory() . $src), $media);
}


function pir_scripts()
{
    /*
     * Подключаем стили:
     * Аргументы:
     * 1) название стиля (может быть любым)
     * 2) путь к файлу
     */

    // для внешних стилей

    wp_enqueue_style('pir-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

//    wp_enqueue_style('pir-fonts-fira', 'https://code.cdn.mozilla.net/fonts/fira.css');


    wp_enqueue_style('pir-caveat', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap');
    wp_enqueue_style('pir-press', 'https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
    wp_enqueue_style('pir-merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');
    wp_enqueue_style('pir-lora', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap');


    // для локальных стилей
    wp_enqueue_style('pir-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('pir-owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
//    wp_enqueue_style('pir-style', get_template_directory_uri() . '/css/main.min.css');
    enqueue_versioned_style('pir-style', '/css/main.min.css');

    /*
     * Подключаем скрипты:
     * Аргументы:
     * 1) название скрипта (может быть любым)
     * 2) путь к файлу
     * 3) после каких скриптов подгружать (лучше указать пустой массив
     * 4) версия (оставляем пустые кавычки)
     * 5) подключение в футере (true = да, false = нет)
     */


//    wp_enqueue_script('pir-jquery', get_template_directory_uri() . '/js/jquery.min.js', [], '', true);

    wp_enqueue_script('pir-jquery2', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', [], '', true);
    wp_enqueue_script('pir-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', [], '', true);
    wp_enqueue_script('pir-touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', [], '', true);
    wp_enqueue_script('pir-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', [], '', true);
    wp_enqueue_script('pir-fullBg', get_template_directory_uri() . '/js/jquery.fullbg.min.js', [], '', true);
    wp_enqueue_script('pir-formValid', get_template_directory_uri() . '/js/jquery.validate.min.js', [], '', true);
    wp_enqueue_script('pir-libPhones', get_template_directory_uri() . '/js/libphonenumber.js', [], '', true);
    wp_enqueue_script('pir-intlTelInput', get_template_directory_uri() . '/js/intlTelInput.min.js', [], '', true);
    enqueue_versioned_script('pir-scripts', '/js/script.min.js', array('jquery'), true);
    wp_localize_script('pir-scripts', 'lawData', array('themePath' => get_template_directory_uri()));

    /*
     * Добавляем возможность отправлять AJAX-запросы к скриптам
     * Аргументы:
     * 1) название скрипта, в котором будем писать ajax
     * 2) название объекта, к которому будем обращаться в файле скрипта
     * 3) элементы объекта, которые нам нужны (путь к обработчику аякса, путь к папке темы)
     */
    wp_localize_script('pir-script', 'myajax',
        [
            'url' => admin_url('admin-ajax.php'),
            'template' => get_template_directory_uri()
        ]
    );
}




add_action('wp_enqueue_scripts', 'pir_scripts');
//add_filter('show_admin_bar', '__return_false');

/**
 * Load custom functions
 */


require get_template_directory() . '/includes/custom-functions.php';
require_once ABSPATH . 'wp-admin/includes/image.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';


$response1 = wpgetapi_endpoint('disclo_pir', 'test', array('debug' => false));

function dateConverter($date_api)
{
    if (!empty($date_api)) {
        return date("d.m.Y H:i", strtotime($date_api) + 3 * 60 * 60);
    }
}//конвертер даты

function translit($value)//перевод с кирилицы на латиницу
{
    $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'y', 'ъ' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
        'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
        'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
        'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch',
        'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
    );

    $value = strtr($value, $converter);
    return $value;
}

function download_url_with_headers($url, $headers = []) // функция для для загрузки файлов по api
{
    // WARNING: The file is not automatically deleted, the script must unlink() the file.
    if (!$url) {
        return new WP_Error('http_no_url', __('Invalid URL Provided.'));

    }
    $url_filename = basename(parse_url($url, PHP_URL_PATH));

    $tmpfname = wp_tempnam($url_filename);

    if (!$tmpfname) {
        return new WP_Error('http_no_file', __('Could not create Temporary file.'));
    }

    $response = wp_remote_get(
        $url,
        array(
            'timeout' => 600,
            'stream' => true,
            'filename' => $tmpfname,
            'headers' => $headers
        )
    );

    if (is_wp_error($response)) {
        unlink($tmpfname);
        return $response;
    }

    $response_code = wp_remote_retrieve_response_code($response);

    if (200 != $response_code) {
        $data = array(
            'code' => $response_code,
        );

        $tmpf = fopen($tmpfname, 'rb');
        if ($tmpf) {
            $response_size = apply_filters('download_url_error_max_body_size', KB_IN_BYTES);
            $data['body'] = fread($tmpf, $response_size);
            fclose($tmpf);
        }

        unlink($tmpfname);
        return new WP_Error('http_404', trim(wp_remote_retrieve_response_message($response)), $data);
    }

    return $tmpfname;
}


function paritet_get_api($endpoint, $url)// API Полный список раскрытий
{
    $response1 = wpgetapi_endpoint('disclo_pir', 'test', array('debug' => false));
    $response1 = json_decode($response1);


    $args = array(
        'timeout' => 120,
        'headers' => array(
            'accept' => 'application/json',
            'Authorization' => 'Bearer ' . $response1->jwtToken
        )
    );
    $response = wp_remote_get($endpoint . $url, $args);
    if (200 !== wp_remote_retrieve_response_code($response)) {
        echo 'Что-то пошло не так, возможно api отвалилось';
        exit;
    }
    $response = wp_remote_retrieve_body($response);
    $response = json_decode($response);

    return $response;
    // это ключ-идентификатор значения транзитного кэша
//    $transient_key = 'pir12322777';
//
//    // сразу же обращаемся к транзитному кэшу и пытаемся получить значение из кэша
//    $transient = get_transient($transient_key);
//    if( false !== $transient ) {
//
//        return $transient;
//
//        // В кэше пусто? Тогда обращаемся к API
//    } else{
//        $response1 = wpgetapi_endpoint( 'disclo_pir', 'test', array('debug' => false) );
//        $response1 =json_decode( $response1 );
//
//        $args = array(
//            'headers' => array(
//                'accept'=> 'application/json',
//                'Authorization' => 'Bearer ' .$response1->jwtToken
//            )
//        );
//
//        $response = wp_remote_get( $url, $args );
//        $response = wp_remote_retrieve_body($response);
//        $response =  json_decode( $response );
//        set_transient( $transient_key, $response, 60 );
//
//        return $response;
//    }
}





//Филиалы и представительства
function officials()// Филиалы и представительства
{
    $officials_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"Officials"}');
    $save_posts_id = array();
    $pageId = url_to_postid('/disclosure-v2/officials/');
    $catId = get_category_by_slug('officials')->cat_ID;
    $catIdHistory = get_category_by_slug('officials_history')->cat_ID;
    global $post;
    $get_post_id = $post->ID; // сохраняем id родительского поста(для хлебных крошек)
    foreach ($officials_get->data->items as $item) {
        $officials_info_id = $item->id;// id
        $officials_info_title = $item->content->official->fullName . ' ' . 'id ' . $officials_info_id; //Заголовок поста
        $officials_url_name = translit($item->content->official->fullName);
        $date_fix = substr($item->publishedAt, 0, 10);
        $date_fix = str_replace(".", "", $date_fix);
        $my_post = array(
            'post_title' => $officials_info_title,
            'post_name' => $officials_url_name,
            'post_status' => 'publish',
            'post_type' => 'post',
            'ping_status' => 'closed',
            'comment_status' => 'closed',
            'post_category' => array($catId),
            'post_parent' => $pageId
        );
        $posts = get_posts(
            [
                'fields' => 'ids',
                'post_type' => 'post',
                'title' => $officials_info_title,
                'post_status' => 'publish',
                'post_category' => array($catId),
                'orderby' => 'post_date ID',
                'order' => 'ASC',
            ]
        );

        if (!empty($posts)) {
            if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                wp_add_post_tags($posts[0], 'Deleted');
                wp_remove_object_terms($posts[0], 'Published', 'post_tag');
            }
            array_push($save_posts_id, $posts[0]);
        } else {

            $post_id = wp_insert_post($my_post);
            if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-officials-single.php');
            wp_set_object_terms($post_id, array($item->status, $item->deleteReason, $item->publicationReason), 'post_tag', false);
            if ($item->isSingle == '1' && $item->status == 'Published'){
                wp_set_object_terms($post_id, array($item->status, $item->isSingle,$item->deleteReason, $item->publicationReason), 'post_tag', false);
            }
            update_field('officials_id', $officials_info_id, $post_id);
            update_field('officials_title', $item->title, $post_id);
            update_field('officials_parent_id', $item->parentDisclosureId, $post_id);

            update_field('officials_fio', $item->content->official->fullName, $post_id);
            update_field('officials_position', $item->content->official->position, $post_id);
            update_field('officials_date_election', $item->content->official->electionDate, $post_id);
            update_field('officials_work_experience', $item->content->official->workExperience, $post_id);

            update_field('officials_del_reason', $item->deleteReasonName, $post_id);
            update_field('officials_pub_reason', $item->publicationReasonName, $post_id);
            update_field('officials_source', $item->sourceName, $post_id);

            update_field('officials_created_at', dateConverter($item->createdAt), $post_id);
            update_field('officials_published_at', dateConverter($item->publishedAt), $post_id);
            update_field('officials_del_at', dateConverter($item->deletedAt), $post_id);
            update_field('publishedAt_fix', $date_fix, $post_id);
            array_push($save_posts_id, $post_id);



            $str_id_history = strval($item->parentDisclosureId);
            foreach ($item->history as $history) {
//                echo '<pre>';
//                print_r($history);
                $history_officials_info_id = $history->id;// id
                $history_officials_info_title = $history->title . ' ' . 'id ' . $history_officials_info_id; //Заголовок поста
                $history_officials_info_short_name = translit($history->content->official->fullName);// Полное имя
                $my_post_history = array(
                    'post_title' => $history_officials_info_title,
                    'post_status' => 'publish',
                    'post_name' => $history_officials_info_short_name,
                    'post_type' => 'post',
                    'post_category' => array($catIdHistory),
                    'post_parent' => $post_id
                );
                $posts_history = get_posts(
                    [
                        'post_type' => 'post',
                        'title' => $history_officials_info_title,
                        'post_status' => 'publish',
                        'category' => array($catIdHistory),
                        'orderby' => 'post_date ID',
                        'order' => 'ASC',
                    ]
                );

                if (!empty($posts_history)) {

                } else {

                    $post_id_history = wp_insert_post($my_post_history);
                    if ($post_id_history) update_post_meta($post_id_history, '_wp_page_template', 'disclosure-officials-history.php');
                    wp_set_object_terms($post_id_history, $str_id_history, 'post_tag', false);
                    update_field('history_officials_id', $officials_info_id, $post_id_history);
                    update_field('history_officials_title', $history->title, $post_id_history);

                    update_field('history_officials_fio', $history->content->official->fullName, $post_id_history);
                    update_field('history_officials_position', $history->content->official->position, $post_id_history);
                    update_field('history_officials_date_election', $history->content->official->electionDate, $post_id_history);
                    update_field('history_officials_work_experience', $history->content->official->workExperience, $post_id_history);

                    update_field('history_officials_del_reason', $history->deleteReasonName, $post_id_history);
                    update_field('history_officials_pub_reason', $history->publicationReasonName, $post_id_history);
                    update_field('history_officials_source', $history->sourceName, $post_id_history);

                    update_field('history_officials_created_at', dateConverter($history->createdAt), $post_id_history);
                    update_field('history_officials_published_at', dateConverter($history->publishedAt), $post_id_history);
                    update_field('history_officials_deletedAt', dateConverter($history->deletedAt), $post_id_history);


                }
            }

        }
    }
    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );
    foreach ($posts as $posting) {
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
}
add_action('officials_hook', 'officials');
if( !wp_next_scheduled('officials_hook') )
    wp_schedule_event( time(), 'hourly', 'officials_hook');
//end Филиалы и представительства



//Должностные лица
function office()// Должностные лица

{

    $office_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"Offices"}');
    $catId = get_category_by_slug('offices')->cat_ID;
    $catIdHistory = get_category_by_slug('offices_history')->cat_ID;
    $save_posts_id = array();
    wp_defer_term_counting(true);
    wp_defer_comment_counting(true);
    $now = current_datetime()->format('Y-m-d H:i:s');

    foreach ($office_get->data->items as $item) {
        if ($item->isSingle == '1'){
            $pageId = url_to_postid('/disclosure-v2/');
        } else{
            $pageId = url_to_postid('/disclosure-v2/offices/');
        }
        $office_id = $item->id;// id эмитента
        $office_title = $item->title . ' ' . 'id ' . $office_id; //Заголовок поста
        $post_name = translit($item->content->office->headOfOffice);
        $date_fix = substr($item->publishedAt, 0, 10);
        $date_fix = str_replace(".", "", $date_fix);
        $my_post = array(
            'post_title' => $office_title,
            'post_status' => 'publish',
            'post_name' => $post_name,
            'post_type' => 'post',
            'ping_status' => 'closed',
            'comment_status' => 'closed',
            'post_category' => array($catId),
            'post_parent' => $pageId
        );
        $posts = get_posts(
            [
                'fields' => 'ids',
                'post_type' => 'post',
                'title' => $office_title,
                'post_status' => 'publish',
                'post_category' => array($catId),
            ]
        );

        if (!empty($posts)) {
            if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                wp_add_post_tags($posts[0], 'Deleted');
                wp_remove_object_terms($posts[0], 'Published', 'post_tag');
//                    update_field('issuer_del_reason', $item->deleteReason, $posts[0]);
//                    update_field('issuer_del_at', $item->deletedAt, $posts[0]);// Причина публикации'
            }
            array_push($save_posts_id, $posts[0]);


        } else {

            $post_id = wp_insert_post($my_post);
            if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-office-single.php');
            wp_set_object_terms($post_id, array($item->status, $item->deleteReason, $item->publicationReason), 'post_tag', false);
            if ($item->isSingle == '1' && $item->status == 'Published'){
                wp_set_object_terms($post_id, array($item->status, $item->isSingle,  $item->deleteReason, $item->publicationReason), 'post_tag', false);
            }
            update_field('office_id', $item->id, $post_id);
            update_field('office_parent_id', $item->parentDisclosureId, $post_id);
            update_field('office_title', $item->title, $post_id);
            update_field('office_address', $item->content->office->address, $post_id);
            update_field('office_phone', $item->content->office->phone, $post_id);
            update_field('office_fax', $item->content->office->fax, $post_id);
            update_field('office_head', $item->content->office->headOfOffice, $post_id);

            update_field('office_pub_reason', $item->publicationReasonName, $post_id);
            update_field('office_pub_delReason', $item->deleteReasonName, $post_id);
            update_field('office_pub_source', $item->sourceName, $post_id);

            update_field('office_createdAt', dateConverter($item->createdAt), $post_id);
            update_field('office_publishedAt', dateConverter($item->publishedAt), $post_id);
            update_field('office_delAt', dateConverter($item->deletedAt), $post_id);

            update_field('publishedAt_fix', $date_fix, $post_id);

            array_push($save_posts_id, $post_id);


            $str_id_history = strval($item->parentDisclosureId);
            foreach ($item->history as $history) {

                $office_info_id_history = $history->id;// id
                $office_info_title_history = $history->title . ' ' . 'id ' . $office_info_id_history; //Заголовок поста
                $post_url_history = translit($history->title);
                $my_post_history = array(
                    'post_title' => $office_info_title_history,
                    'post_name' => $post_url_history,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'post_category' => array($catIdHistory),
                    'post_parent' => $post_id
                );
                $posts_history = get_posts(
                    [
                        'post_type' => 'post',
                        'title' => $office_info_title_history,
                        'post_status' => 'publish',
                        'post_category' => array($catIdHistory),
                        'orderby' => 'post_date ID',
                        'order' => 'ASC',
                    ]
                );

                if (!empty($posts_history)) {

                } else {

                    $post_id_history = wp_insert_post($my_post_history);
                    if ($post_id_history) update_post_meta($post_id_history, '_wp_page_template', 'disclosure-office-history.php');
                    wp_set_object_terms($post_id_history, $str_id_history, 'post_tag', false);
                    update_field('history_office_id', $history->id, $post_id_history);
                    update_field('history_office_title', $history->title, $post_id_history);
                    update_field('history_office_address', $history->content->office->address, $post_id_history);
                    update_field('history_office_phone', $history->content->office->phone, $post_id_history);
                    update_field('history_office_fax', $history->content->office->fax, $post_id_history);
                    update_field('history_office_head', $history->content->office->headOfOffice, $post_id_history);

                    update_field('history_office_pub_reason', $history->publicationReasonName, $post_id_history);
                    update_field('history_office_delReason', $history->deleteReasonName, $post_id_history);
                    update_field('history_office_source', $history->sourceName, $post_id_history);

                    update_field('history_office_createdAt', dateConverter($history->createdAt), $post_id_history);
                    update_field('history_office_publishedAt', dateConverter($history->publishedAt), $post_id_history);
                    update_field('history_office_deletedAt', dateConverter($history->createdAt), $post_id_history);


                }
            }



        }
    }

    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );
    foreach ($posts as $posting) {
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
    wp_defer_term_counting(false);
    wp_defer_comment_counting(false);
}
add_action('office_hook', 'office');
if( !wp_next_scheduled('office_hook') )
    wp_schedule_event( time(), 'hourly', 'office_hook');
//end Должностные лица



//Основные сведения
function disclosureBasicInfo()// основные сведения
{
    $save_posts_id = array();
    $base_info_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"Main"}');
    $catId = get_category_by_slug('base_info')->cat_ID;
    $now = current_datetime()->format('Y-m-d H:i:s');

//    global $post;
//    $get_post_id = $post->ID; // сохраняем id родительского поста(для хлебных крошек)


    foreach ($base_info_get->data->items as $item) {
        if ($item->isSingle == '1'){
            $pageId = url_to_postid('/disclosure-v2/');
        } else{
            $pageId = url_to_postid('/disclosure-v2/basic-info/');
        }

        $base_info_id = $item->id;// id
        $base_info_title = $item->content->registrar->shortName . ' ' . 'id ' . $base_info_id; //Заголовок поста
        $base_url_name = translit($item->content->registrar->shortName);
        $date_fix = substr($item->publishedAt, 0, 10);
        $date_fix = str_replace(".", "", $date_fix);


        $my_post = array(
            'post_title' => $base_info_title,
            'post_name' => $base_url_name,
            'post_excerpt' => $item->sectionName,
            'post_status' => 'publish',
            'post_type' => 'post',
            'ping_status' => 'closed',
            'comment_status' => 'closed',
            'post_category' => array($catId),
            'post_parent' => $pageId
        );
        $posts = get_posts(
            [
                'fields' => 'ids',
                'post_type' => 'post',
                'title' => $base_info_title,
                'post_status' => 'publish',
                'post_category' => array($catId),
                'orderby' => 'post_date ID',
                'order' => 'ASC',
            ]
        );

        if (!empty($posts)) {
            if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                wp_add_post_tags($posts[0], 'Deleted');
                wp_remove_object_terms($posts[0], 'Published', 'post_tag');
//                    update_field('issuer_del_reason', $item->deleteReason, $posts[0]);//
//                    update_field('issuer_del_at', $item->deletedAt, $posts[0]);// Причина публикации'
            }
            array_push($save_posts_id, $posts[0]);
        } else {

            $post_id = wp_insert_post($my_post);
            if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-basic-single.php');
            wp_set_object_terms($post_id, array($item->status, $item->deleteReason, $item->publicationReason), 'post_tag', false);
            if ($item->isSingle == '1' && $item->status == 'Published'){
                wp_set_object_terms($post_id, array($item->status, $item->deleteReason, $item->isSingle), 'post_tag', false);
            }

            update_field('name_section', $item->sectionName, $post_id);
            update_field('basic_info_title', $item->title, $post_id);
            update_field('basic_info_id', $item->id, $post_id);
            update_field('basic_info_parent_id', $item->parentDisclosureId, $post_id);
            update_field('basic_info_name', $item->content->registrar->shortName, $post_id);
            update_field('basic_info_full_name', $item->content->registrar->fullName, $post_id);
            update_field('basic_info_short_name_en', $item->content->registrar->shortNameEng, $post_id);
            update_field('basic_info_full_name_en', $item->content->registrar->fullNameEng, $post_id);
            update_field('basic_info_inn', $item->content->registrar->inn, $post_id);
            update_field('basic_info_kpp', $item->content->registrar->kpp, $post_id);
            update_field('basic_info_ogrn', $item->content->registrar->ogrn, $post_id);
            update_field('basic_info_address', $item->content->registrar->address, $post_id);
            update_field('basic_info_phone', $item->content->registrar->phone, $post_id);
            update_field('basic_info_fax', $item->content->registrar->fax, $post_id);
            update_field('basic_info_email', $item->content->registrar->email, $post_id);
            update_field('basic_info_site', $item->content->registrar->webSite, $post_id);
            update_field('basic_info_social', $item->content->registrar->socialMedia, $post_id);
            update_field('basic_info_bank_recipient', $item->content->registrar->bank->recipient, $post_id);
            update_field('basic_info_bank_rs', $item->content->registrar->bank->rs, $post_id);
            update_field('basic_info_bank_bic', $item->content->registrar->bank->bic, $post_id);
            update_field('basic_info_bank_ks', $item->content->registrar->bank->ks, $post_id);
            update_field('basic_info_bank_name', $item->content->registrar->bank->name, $post_id);
            update_field('basic_info_bank_inn', $item->content->registrar->bank->inn, $post_id);
            update_field('basic_info_bank_kpp', $item->content->registrar->bank->kpp, $post_id);

            update_field('basic_info_reason_public', $item->publicationReasonName, $post_id);
            update_field('basic_info_reason_del', $item->deleteReasonName, $post_id);
            update_field('basic_info_source', $item->sourceName, $post_id);

            update_field('basic_info_createAt', dateConverter($item->createdAt), $post_id);
            update_field('basic_info_published', dateConverter($item->publishedAt), $post_id);
            update_field('basic_info_del_at', dateConverter($item->deletedAt), $post_id);
            update_field('publishedAt_fix', $date_fix, $post_id);
            if ($item->isSingle == '1' && $item->status == 'Published'){
                update_field('post_url', get_permalink($post_id) , $post_id);
                update_field('postIsSingle', $item->isSingle , $post_id);
            }

            array_push($save_posts_id, $post_id);


            $catIdHistory = get_category_by_slug('base_info_history')->cat_ID;

            $str_id = strval($item->parentDisclosureId);
            foreach ($item->history as $history) {

                $basic_info_id = $history->id;// id
                $basic_info_title = $history->title . ' ' . 'id ' . $basic_info_id; //Заголовок поста
                $basic_url = translit($history->title);
                $basic_info_short_name = $history->content->registrar->shortName;// Краткое имя
                $basic_info_full_name = $history->content->registrar->fullName;// Полное имя
                $basic_info_short_name_eng = $history->content->registrar->shortNameEng;// Краткое имя на англ
                $basic_info_full_name_eng = $history->content->registrar->fullNameEng; // Полное имя на англ
                $basic_info_inn = $history->content->registrar->inn; // ИНН
                $basic_info_kpp = $history->content->registrar->kpp;// КПП
                $basic_info_ogrn = $history->content->registrar->ogrn; // Огрн
                $basic_info_address = $history->content->registrar->address; // Адрес
                $basic_info_phone = $history->content->registrar->phone; //Телефон
                $basic_info_fax = $history->content->registrar->fax; //факс
                $basic_info_email = $history->content->registrar->email;// email
                $basic_info_site = $history->content->registrar->webSite;// веб-сайт
                $basic_info_media = $history->content->registrar->socialMedia;// социальные сети
                $basic_info_bank_recipient = $history->content->registrar->bank->recipient;//реквизиты банка
                $basic_info_bank_rs = $history->content->registrar->bank->rs;//реквизиты банка
                $basic_info_bank_bic = $history->content->registrar->bank->bic;//реквизиты банка
                $basic_info_bank_ks = $history->content->registrar->bank->ks;//реквизиты банка
                $basic_info_bank_name = $history->content->registrar->bank->name;//реквизиты банка
                $basic_info_bank_inn = $history->content->registrar->bank->inn;//реквизиты банка
                $basic_info_bank_kpp = $history->content->registrar->bank->kpp; //реквизиты банка

                $basic_info_pub_reason = $history->publicationReasonName; // Причина публикации
                $basic_info_del_reason = $history->deleteReasonName; // Причина Удаления
                $basic_info_source = $history->sourceName; // Источник

                $basic_info_create_at = dateConverter($history->createdAt); // Создано
                $basic_info_pub_at = dateConverter($history->publishedAt); // Опубликовано
                $basic_info_del_at = dateConverter($history->deletedAt); // Удалено

                $basic_info_history_title = $history->title;
                $my_post_history = array(
                    'post_title' => $basic_info_title,
                    'post_name' => $basic_url,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'post_category' => array($catIdHistory),
                    'post_parent' => $post_id
                );
                $posts_history = get_posts(
                    [
                        'post_type' => 'post',
                        'title' => $basic_info_title,
                        'post_status' => 'publish',
                        'post_category' => array($catId),
                        'orderby' => 'post_date ID',
                        'order' => 'ASC',
                    ]
                );

                if (!empty($posts_history)) {

                } else {

                    $post_id_history = wp_insert_post($my_post_history);
                    if ($post_id_history) update_post_meta($post_id_history, '_wp_page_template', 'disclosure-basic-history.php');
                    wp_set_object_terms($post_id_history, $str_id, 'post_tag', false);
                    update_field('basic_history_title', $basic_info_history_title, $post_id_history);
                    update_field('basic_history_info_id', $basic_info_id, $post_id_history);
                    update_field('basic_history_info_name', $basic_info_short_name, $post_id_history);
                    update_field('basic_history_info_full_name', $basic_info_full_name, $post_id_history);
                    update_field('basic_history_info_short_name_en', $basic_info_short_name_eng, $post_id_history);
                    update_field('basic_history_info_full_name_en', $basic_info_full_name_eng, $post_id_history);
                    update_field('basic_history_info_inn', $basic_info_inn, $post_id_history);
                    update_field('basic_history_info_kpp', $basic_info_kpp, $post_id_history);
                    update_field('basic_history_info_ogrn', $basic_info_ogrn, $post_id_history);
                    update_field('basic_history_info_address', $basic_info_address, $post_id_history);
                    update_field('basic_history_info_phone', $basic_info_phone, $post_id_history);
                    update_field('basic_history_info_fax', $basic_info_fax, $post_id_history);
                    update_field('basic_history_info_email', $basic_info_email, $post_id_history);
                    update_field('basic_history_info_site', $basic_info_site, $post_id_history);
                    update_field('basic_history_info_social', $basic_info_media, $post_id_history);
                    update_field('basic_history_info_bank_recipient', $basic_info_bank_recipient, $post_id_history);
                    update_field('basic_history_info_bank_rs', $basic_info_bank_rs, $post_id_history);
                    update_field('basic_history_info_bank_bic', $basic_info_bank_bic, $post_id_history);
                    update_field('basic_history_info_bank_ks', $basic_info_bank_ks, $post_id_history);
                    update_field('basic_history_info_bank_name', $basic_info_bank_name, $post_id_history);
                    update_field('basic_history_info_bank_inn', $basic_info_bank_inn, $post_id_history);
                    update_field('basic_history_info_bank_kpp', $basic_info_bank_kpp, $post_id_history);


                    update_field('basic_history_info_reason_public', $basic_info_pub_reason, $post_id_history);
                    update_field('basic_history_info_reason_del', $basic_info_del_reason, $post_id_history);
                    update_field('basic_history_info_source', $basic_info_source, $post_id_history);

                    update_field('basic_history_info_published', $basic_info_pub_at, $post_id_history);
                    update_field('basic_history_info_create_at', $basic_info_create_at, $post_id_history);
                    update_field('basic_history_info_del_at', $basic_info_del_at, $post_id_history);

                }
            }
        }
    }
    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );
    foreach ($posts as $posting) {
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
}
add_action('base_info_hook', 'disclosureBasicInfo');
if( !wp_next_scheduled('base_info_hook') )
    wp_schedule_event( time(), 'hourly', 'base_info_hook');
//end основные сведения



// Эмитенты
function issuerPost()// создание эмитентов

{
    $pageId = url_to_postid('/disclosure-v2/issuers/');
    wp_defer_term_counting(true);
    wp_defer_comment_counting(true);
    $issuer_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"Issuers"}');

    $catId = get_category_by_slug('issuers')->cat_ID;
    $catIdHistory = get_category_by_slug('history')->cat_ID;
    $save_posts_id = array();

    foreach ($issuer_get->data->items as $item) {
        echo '<pre>';
        print_r($item);
        $issuer_id = $item->id;// id эмитента
        $issuer_title = $item->content->issuer->shortName . ' ' . 'id ' . $issuer_id; //Заголовок поста
        $post_name = translit($item->content->issuer->shortName);
        $date_fix = substr($item->publishedAt, 0, 10);
        $date_fix = str_replace(".", "", $date_fix);

        $date_fix_delete = substr($item->deletedAt, 0, 10);
        $date_fix_delete = str_replace(".", "", $date_fix_delete);
//        echo '<pre>';
//        print_r($date_fix);
        $my_post = array(
            'post_title' => $issuer_title,
            'post_status' => 'publish',
            'post_name' => $post_name,
            'post_type' => 'post',
            'ping_status' => 'closed',
            'comment_status' => 'closed',
            'post_category' => array($catId),
            'post_parent' => $pageId
        );
        $posts = get_posts(
            ['fields' => 'ids',
                'title' => $issuer_title,
                'post_type' => 'post',
                'post_status' => 'publish',
                'category' => $catId,
            ]
        );
        $issuer_parent_id = strval($item->parentDisclosureId);
        if (!empty($posts)) {

//                $wpdb->query("UPDATE $wpdb->posts SET post_modified = '{$post_modified}', post_modified_gmt = '{$post_modified_gmt}'  WHERE ID = {$posts[0]->ID}" );


            if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                wp_add_post_tags($posts[0], 'Deleted');
                wp_remove_object_terms($posts[0], 'Published', 'post_tag');
            }
//            $my_post2 = array(
//                'ID'=> $posts[0]->ID,
//                'post_modified' => $now,
//            );
//            wp_update_post( $my_post2 );
            array_push($save_posts_id, $posts[0]);

        } else {

            $post_id = wp_insert_post($my_post);
            if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-issuer-single.php');
            wp_set_object_terms($post_id, array($item->sectionFilter, $item->status, $item->deleteReason, $item->publicationReason), 'post_tag', false);
            update_field('issuer_id', $item->id, $post_id);
            update_field('parent_issuer_id', $item->parentDisclosureId, $post_id);

            update_field('issuer_title', $item->title, $post_id);
            update_field('issuer_publicationReason', $item->publicationReasonName, $post_id);
            update_field('issuer_deleteReason', $item->deleteReasonName, $post_id);
            update_field('issuer_source', $item->sourceName, $post_id);
            update_field('issuer_shortName', $item->content->issuer->shortName, $post_id);
            update_field('issuer_fullName', $item->content->issuer->fullName, $post_id);
            update_field('issuer_inn', $item->content->issuer->inn, $post_id);
            update_field('issuer_ogrn', $item->content->issuer->ogrn, $post_id);
            update_field('issuer_address', $item->content->issuer->address, $post_id);
            update_field('issuer_phone', $item->content->issuer->phone, $post_id);
            update_field('issuer_fax', $item->content->issuer->fax, $post_id);
            update_field('issuer_registryContractDate', dateConverter($item->content->issuer->registryContractDate), $post_id);
            update_field('issuer_registryIncomingActDate', dateConverter($item->content->issuer->registryIncomingActDate), $post_id);
            update_field('issuer_registryOutgoingActDate', dateConverter($item->content->issuer->registryOutgoingActDate), $post_id);
            update_field('issuer_registryContractTerminationDate', dateConverter($item->content->issuer->registryContractTerminationDate), $post_id);
            print_r(dateConverter($item->content->issuer->registryContractTerminationDate), $post_id);
            update_field('issuer_registryIncomingForStorageDate', dateConverter($item->content->issuer->registryIncomingForStorageDate), $post_id);
            update_field('issuer_nextRegistrar', $item->content->issuer->nextRegistrar, $post_id);
            update_field('issuer_createdAt', dateConverter($item->createdAt), $post_id);
            update_field('issuer_publishedAt', dateConverter($item->publishedAt), $post_id);
            update_field('issuer_publishedAt_fix', $date_fix, $post_id);
            update_field('issuer_deletedAt_fix', $date_fix_delete, $post_id);
            update_field('issuer_deletedAt', dateConverter($item->deletedAt), $post_id);

            array_push($save_posts_id, $post_id);


            foreach ($item->history as $history) {

                $issuer_id = $history->id;// id эмитента
                $issuer_title2 = $history->title . ' ' . 'id ' . $issuer_id; //Заголовок поста
                $posts_url_name = translit($history->content->issuer->shortName);

                $my_post2 = array(
                    'post_title' => $issuer_title2,
                    'post_name' => $posts_url_name,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'post_category' => array($catIdHistory),
                    'post_parent' => $post_id
                );

                $posts2 = get_posts(
                    [
                        'post_type' => 'post',
                        'title' => $issuer_title2,
                        'post_status' => 'publish',
                        'category' => $catIdHistory,
                        'orderby' => 'post_date ID',
                        'order' => 'ASC',
                    ]
                );

                if (!empty($posts2)) {
                } else {

                    $post_id2 = wp_insert_post($my_post2);
                    if ($post_id2) update_post_meta($post_id2, '_wp_page_template', 'disclosure-issuer-history.php');
                    wp_set_object_terms($post_id2, $issuer_parent_id, 'post_tag', false);

                    update_field('history_issuer_title', $history->title, $post_id2);
                    update_field('history_issuer_publicationReason', $history->publicationReasonName, $post_id2);
                    update_field('history_issuer_deleteReason', $history->deleteReasonName, $post_id2);
                    update_field('history_issuer_source', $history->sourceName, $post_id2);
                    update_field('history_issuer_shortName', $history->content->issuer->shortName, $post_id2);
                    update_field('history_issuer_fullName', $history->content->issuer->fullName, $post_id2);
                    update_field('history_issuer_inn', $history->content->issuer->inn, $post_id2);
                    update_field('history_issuer_ogrn', $history->content->issuer->ogrn, $post_id2);
                    update_field('history_issuer_address', $history->content->issuer->address, $post_id2);
                    update_field('history_issuer_phone', $history->content->issuer->phone, $post_id2);
                    update_field('history_issuer_fax', $history->content->issuer->fax, $post_id2);
                    update_field('history_issuer_registryContractDate', dateConverter($history->content->issuer->registryContractDate), $post_id2);
                    update_field('history_issuer_registryIncomingActDate', dateConverter($history->content->issuer->registryIncomingActDate), $post_id2);
                    update_field('history_issuer_registryOutgoingActDate', dateConverter($history->content->issuer->registryOutgoingActDate), $post_id2);
                    update_field('history_issuer_registryContractTerminationDate', dateConverter($history->content->issuer->registryContractTerminationDate), $post_id2);
                    update_field('history_issuer_registryIncomingForStorageDate', $history->content->issuer->registryIncomingForStorageDate, $post_id2);
                    update_field('history_issuer_nextRegistrar', $history->content->issuer->nextRegistrar, $post_id2);
                    update_field('history_issuer_createdAt', dateConverter($history->createdAt), $post_id2);
                    update_field('history_issuer_publishedAt', dateConverter($history->publishedAt), $post_id2);
                    update_field('history_issuer_deletedAt', dateConverter($history->deletedAt), $post_id2);
                }
            }

        }
    }

//    $posts = get_posts(
//        [
//            'fields' => 'ids', // Only get post IDs
//            'post_type' => 'post',
//            'post_status' => 'publish',
//            'exclude' => $save_posts_id,
//            'category' => $catId,
////            'orderby' => 'modified',
////            'order'       => 'ASC',
//            'posts_per_page' => -1
//        ]
//    );
//    foreach ($posts as $posting) {
////        if($posting->post_modified < $now){
////        if(in_array($posting, $save_posts_id) === false){
////            $my_post2 = array(
////                'ID' => $posting->ID,
////                'post_status' => 'trash',
////            );
////
////            wp_update_post($my_post2);
////
////        } else{
//////            break;
////        }
////        $my_post2 = array(
////            'ID' => $posting,
////            'post_status' => 'trash',
////        );
////
////        wp_update_post($my_post2);
//
//
////        if(in_array($posting, $save_posts_id) === false){
////            $my_post2 = array(
////                'ID' => $posting->ID,
////                'post_status' => 'trash',
////            );
////
////            wp_update_post($my_post2);
//////
////        }
//    }

//    $posts = get_posts(
//        [
//            'post_type' => 'post',
//            'post_status' => 'publish',
//            'category' => $catId,
//            'orderby' => 'modified',
//            'order'       => 'ASC',
//            'posts_per_page' => -1
//        ]
//    );
//    foreach( $posts as $posting ){
//        if($posting->post_modified < $now){
//            $my_post2 = array(
//                'ID' => $posting->ID,
//                'post_status' => 'trash',
//            );
//
//            wp_update_post($my_post2);
//
//        } else{
//            break;
//        }
//    }
    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );
    foreach ($posts as $posting) {
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
    wp_defer_term_counting(false);
    wp_defer_comment_counting(false);
}
//issuerPost();
add_action('issuer_hook', 'issuerPost');
if( !wp_next_scheduled('issuer_hook') )
    wp_schedule_event( time(), 'hourly', 'issuer_hook');
// end Эмитенты




// Выпуски ценных бумаг, доп выпуски ЦБ
function securitiesIssuer($section_name, $cat_name, $cat_name_history, $parent_url)// Выпуски ценных бумаг +

{
    wp_defer_term_counting(true);
    wp_defer_comment_counting(true);

    $save_posts_id = array();
    $securities_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"' . $section_name . '"}');
    $catId = get_category_by_slug($cat_name)->cat_ID;

    $cat_history_id = get_category_by_slug($cat_name_history)->cat_ID;

    foreach ($securities_get->data->items as $item) {
        if ($item->isSingle == '1'){
            $pageId = url_to_postid('/disclosure-v2/');
        } else{
            $pageId = url_to_postid('/disclosure-v2/'.$parent_url);
        }
        if ($item->section == $section_name) {

            $securities_id = $item->id;//
            $securities_title = $item->title . ' ' . 'id ' . $securities_id; //Заголовок поста
            $post_name = translit($item->content->security->issuer);
            $date_fix = substr($item->publishedAt, 0, 10);
            $date_fix = str_replace(".", "", $date_fix);
            $str_id2 = strval($item->parentDisclosureId);
            $my_post = array(
                'post_title' => $securities_title,
                'post_status' => 'publish',
                'post_name' => $post_name,
                'post_type' => 'post',
                'ping_status' => 'closed',
                'comment_status' => 'closed',
                'post_category' => array($catId),
                'post_parent' => $pageId
            );
            $posts = get_posts(
                [
                    'fields' => 'ids',
                    'post_type' => 'post',
                    'title' => $securities_title,
                    'post_status' => 'publish',
                    'post_category' => array($catId),
                ]
            );

            if (!empty($posts)) {

                if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                    wp_add_post_tags($posts[0], 'Deleted');
                    wp_remove_object_terms($posts[0], 'Published', 'post_tag');
                }
                array_push($save_posts_id, $posts[0]);


            } else {

                $post_id = wp_insert_post($my_post);
                if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-securities-single.php');
                wp_set_object_terms($post_id, array($item->status, $item->deleteReason, $item->publicationReason), 'post_tag', false);
                if ($item->isSingle == '1' && $item->status == 'Published'){
                    wp_set_object_terms($post_id, array($item->status, $item->isSingle, $item->deleteReason, $item->publicationReason), 'post_tag', false);
                }

                update_field('issuerrr_id', $item->id, $post_id);
                update_field('issuerrr_title', $item->title, $post_id);
                update_field('issuerrr_parent_id', $item->parentDisclosureId, $post_id);

                update_field('issuerrr_name', $item->content->security->issuer, $post_id);
                update_field('issuer_jsc_registration_date', dateConverter($item->content->security->jscRegistrationDate), $post_id);
                update_field('issuer_security_type', $item->content->security->securityType, $post_id);
                update_field('issuer_security_category', $item->content->security->securityCategory, $post_id);
                update_field('issuer_registration_number', $item->content->security->registrationNumber, $post_id);
                update_field('issuer_isin_code', $item->content->security->isinCode, $post_id);
                update_field('issuer_registration_date', dateConverter($item->content->security->registrationDate), $post_id);
                update_field('issuer_cancellation_date', dateConverter($item->content->security->cancellationDate), $post_id);
                update_field('issuer_denomination', $item->content->security->denomination, $post_id);
                update_field('issuer_issue_volume', $item->content->security->issueVolume, $post_id);
                update_field('issuer_issue_amount', $item->content->security->issueAmount, $post_id);

                update_field('issuer_publication_reason', $item->publicationReasonName, $post_id);
                update_field('issuerrr_delReason', $item->deleteReasonName, $post_id);
                update_field('issuerrr_source', $item->sourceName, $post_id);

                update_field('issuer_created_at', dateConverter($item->createdAt), $post_id);
                update_field('issuer_published_at', dateConverter($item->publishedAt), $post_id);
                update_field('issuer_deleteAt', dateConverter($item->deletedAt), $post_id);

                update_field('security_section_name', $section_name, $post_id);
                update_field('publishedAt_fix', $date_fix, $post_id);
                array_push($save_posts_id, $post_id);

                foreach ($item->history as $history) {

                    $history_id = $history->id;// id
                    $history_title = $history->title . ' ' . 'id ' . $history_id; //Заголовок поста

                    $history_post_url = translit($history->title);
                    $my_post_history = array(
                        'post_title' => $history_title,
                        'post_name' => $history_post_url,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'post_category' => array($cat_history_id),
                        'post_parent' => $post_id
                    );
                    $posts2 = get_posts(
                        [
                            'post_type' => 'post',
                            'title' => $history_title,
                            'post_status' => 'publish',
                            'post_category' => array($cat_history_id),
                            'orderby' => 'post_date ID',
                            'order' => 'ASC',

                        ]
                    );

                    if (!empty($posts2)) {

                    } else {

                        $post_id3 = wp_insert_post($my_post_history);

                        if ($post_id3) update_post_meta($post_id3, '_wp_page_template', 'disclosure-securities-history.php');
                        wp_set_object_terms($post_id3, $str_id2, 'post_tag', false);

                        update_field('history_officials_id', $history_id, $post_id3);
                        update_field('history_issuer_id', $history->id, $post_id3);
                        update_field('history_issuer_title', $history->title, $post_id3);
                        update_field('history_issuer_name', $history->content->security->issuer, $post_id3);
                        update_field('history_issuer_jscRegistrationDate', dateConverter($history->content->security->jscRegistrationDate), $post_id3);
                        update_field('history_issuer_securityType', $history->content->security->securityType, $post_id3);
                        update_field('history_issuer_securityCategory', $history->content->security->securityCategory, $post_id3);
                        update_field('history_issuer_registrationNumber', $history->content->security->registrationNumber, $post_id3);
                        update_field('history_issuer_isinCode', $history->content->security->isinCode, $post_id3);
                        update_field('history_issuer_registrationDate', dateConverter($history->content->security->registrationDate), $post_id3);
                        update_field('history_issuer_cancellationDate', dateConverter($history->content->security->cancellationDate), $post_id3);
                        update_field('history_issuer_denomination', $history->content->security->denomination, $post_id3);
                        update_field('history_issuer_issueVolume', $history->content->security->issueVolume, $post_id3);
                        update_field('history_issuer_issueAmount', $history->content->security->issueAmount, $post_id3);
                        update_field('iss_del', $history->deleteReason, $post_id3);

                        update_field('history_issuer_publicationReason', $history->publicationReasonName, $post_id3);
                        update_field('history_issuer_delReason', $history->deleteReasonName, $post_id3);
                        update_field('history_issuer_source', $history->sourceName, $post_id3);

                        update_field('history_issuer_createdAt', dateConverter($history->createdAt), $post_id3);
                        update_field('history_issuer_publishedAt', dateConverter($history->publishedAt), $post_id3);
                        update_field('history_issuer_deletedAt', dateConverter($history->deletedAt), $post_id3);


                    }
                }
            }
        }
    }
    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );
    foreach ($posts as $posting) {
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
    wp_defer_term_counting(false);
    wp_defer_comment_counting(false);
}

add_action('disclosure_securities', 'securitiesIssuer', 10, 4);

$param_securities = array( 'IssuesOfSecurities','issues_securities','securities_history', 'issuance-securities-establishment/' ); //Выпуски ценных бумаг

$param_add_securities = array( 'AdditionalIssuesOfSecurities','additional_issues_securities','add_issues_history', 'additional-issues-securities/' ); //Дополнительные Выпуски ценных бумаг

if( !wp_next_scheduled('disclosure_securities', $param_securities ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_securities', $param_securities );

if( !wp_next_scheduled('disclosure_securities', $param_add_securities ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_securities', $param_add_securities );

//end Выпуски ценных бумаг, доп выпуски ЦБ



// Трансфер-агенты + эмитенты с частю функций регистратора
function transferAgents($section_name, $cat_name, $cat_name_history, $parent_url)// создание трансфер агентов, disclosure-funcissuer, disclosure-transfer

{
    $transferAgents_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"' . $section_name . '"}');
    $catId = get_category_by_slug($cat_name)->cat_ID;
    $now = current_datetime()->format('Y-m-d H:i:s');
    $save_posts_id = array();
    global $post;
    $get_post_id = $post->ID; // сохраняем id родительского поста(для хлебных крошек)
    foreach ($transferAgents_get->data->items as $item) {
        if ($item->isSingle == '1'){
            $pageId = url_to_postid('/disclosure-v2/');
        } else{
            $pageId = url_to_postid('/disclosure-v2/'.$parent_url);
        }
        if ($item->section == $section_name) {
            $transfer_id = $item->id;// id эмитента
            $transfer_title = $item->content->company->shortName . ' ' . 'id ' . $transfer_id; //Заголовок поста
            $post_url = translit($item->content->company->shortName);
            $date_fix = substr($item->publishedAt, 0, 10);
            $date_fix = str_replace(".", "", $date_fix);
            $my_post = array(
                'post_title' => $transfer_title,
                'post_name' => $post_url,
                'post_status' => 'publish',
                'post_type' => 'post',
                'post_category' => array($catId),
                'post_parent' => $pageId
            );
            $posts = get_posts(
                [
                    'fields' => 'ids',
                    'post_type' => 'post',
                    'title' => $transfer_title,
                    'post_status' => 'publish',
                    'post_category' => array($catId),
                    'orderby' => 'post_date ID',
                    'order' => 'ASC',
                ]
            );

            if (!empty($posts)) {
                if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                    wp_add_post_tags($posts[0], 'Deleted');
                    wp_remove_object_terms($posts[0], 'Published', 'post_tag');
                }
                array_push($save_posts_id, $posts[0]);
            } else {

                $post_id = wp_insert_post($my_post);
                if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-transfer-agents.php');
                wp_set_object_terms($post_id, array($item->status, $item->deleteReason, $item->publicationReason), 'post_tag', false);
                if ($item->isSingle == '1' && $item->status == 'Published'){
                    wp_set_object_terms($post_id, array($item->status, $item->deleteReason,$item->publicationReason, $item->isSingle), 'post_tag', false);
                }
                update_field('transfer_id', $item->id, $post_id);
                update_field('transfer_title', $item->title, $post_id);
                update_field('transfer_parent_id', $item->parentDisclosureId, $post_id);
                update_field('transfer_short_name', $item->content->company->shortName, $post_id);//Краткое наименование
                update_field('transfer_full_name', $item->content->company->fullName, $post_id);// Полное наименование
                update_field('transfer_inn', $item->content->company->inn, $post_id);//Инн
                update_field('transfer_ogrn', $item->content->company->ogrn, $post_id);//ОГРН
                update_field('transfer_address', $item->content->company->address, $post_id);// Адресс
                update_field('transfer_phone', $item->content->company->phone, $post_id);// Телефон
                update_field('transfer_fax', $item->content->company->fax, $post_id);// Факс

                update_field('transfer_reason_public', $item->publicationReasonName, $post_id);// Причина публикации'
                update_field('transfer_del_reason', $item->deleteReasonName, $post_id);// Причина удаления'
                update_field('transfer_source', $item->sourceName, $post_id);// Источник'


                update_field('transfer_createAt', dateConverter($item->createdAt), $post_id);//Создано
                update_field('transfer_published', dateConverter($item->publishedAt), $post_id);// Опублткованно
                update_field('transfer_delAt', dateConverter($item->deletedAt), $post_id);//  Удалено
                update_field('publishedAt_fix', $date_fix, $post_id);

                update_field('transfer_cat_name', $cat_name_history, $post_id);
                update_field('transfer_cat_sections', $section_name, $post_id);
                array_push($save_posts_id, $post_id);


                $catIdHistory = get_category_by_slug($cat_name_history)->cat_ID;
                $str_id_history = strval($item->parentDisclosureId);
                foreach ($item->history as $history) {
//                echo '<pre>';
//                print_r( $history->deleteReason);
                    $history_info_id = $history->id;// id
                    $history_info_title = $history->title . ' ' . 'id ' . $history_info_id; //Заголовок поста
                    $post_url_history = $history->title;
                    $my_post_history = array(
                        'post_title' => $history_info_title,
                        'post_name' => $post_url_history,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'post_category' => array($catIdHistory),
                        'post_parent' => $post_id

                    );
                    $posts_history = get_posts(
                        [
                            'post_type' => 'post',
                            'title' => $history_info_title,
                            'post_status' => 'publish',
                            'post_category' => array($catIdHistory),
                            'orderby' => 'post_date ID',
                            'order' => 'ASC',
                        ]
                    );

                    if (!empty($posts_history)) {

                    } else {

                        $post_id_history = wp_insert_post($my_post_history);
                        if ($post_id_history) update_post_meta($post_id_history, '_wp_page_template', 'disclosure-transfer-history.php');
                        wp_set_object_terms($post_id_history, $str_id_history, 'post_tag', false);

                        update_field('history_transfer_id', $history->id, $post_id_history);
                        update_field('history_transfer_title', $history->title, $post_id_history);
                        update_field('history_transfer_short_name', $history->content->company->shortName, $post_id_history);//Краткое наименование
                        update_field('history_transfer_full_name', $history->content->company->fullName, $post_id_history);// Полное наименование
                        update_field('history_transfer_inn', $history->content->company->inn, $post_id_history);//Инн
                        update_field('history_transfer_ogrn', $history->content->company->ogrn, $post_id_history);//ОГРН
                        update_field('history_transfer_address', $history->content->company->address, $post_id_history);// Адресс
                        update_field('history_transfer_phone', $history->content->company->phone, $post_id_history);// Телефон
                        update_field('history_transfer_fax', $history->content->company->fax, $post_id_history);// Факс

                        update_field('history_transfer_reason_public', $history->publicationReasonName, $post_id_history);// Причина публикации'
                        update_field('history_transfer_deleteReason', $history->deleteReasonName, $post_id_history);//
                        update_field('history_transfer_deleteReason', $history->sourceName, $post_id_history);//

                        update_field('history_transfer_createAt', dateConverter($history->createdAt), $post_id_history);//
                        update_field('history_transfer_source', dateConverter($history->deletedAt), $post_id_history);//
                        update_field('history_transfer_published', dateConverter($history->publishedAt), $post_id_history);//
                    }
                }


            }
        }
    }
    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );
    foreach ($posts as $posting) {
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
}
add_action('disclosure_transfer_agent', 'transferAgents', 10, 4);

$param_transfer = array( 'TransferAgents','transfer_agents','transfer_agents_history', 'tansfer-agents/' ); //Трансфер-агенты

$param_func_issuer = array( 'IssuersWithPartOfTheRegistrarFunctions','func_issuer','func_issuer_history', 'issuers-registrar/' ); //Эмитенты с частью функций регистратора

if( !wp_next_scheduled('disclosure_transfer_agent', $param_transfer ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_transfer_agent', $param_transfer );

if( !wp_next_scheduled('disclosure_transfer_agent', $param_func_issuer ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_transfer_agent', $param_func_issuer );
// enc Трансфер-агенты + эмитенты с частю функций регистратора




function disclosure_documents($section_name, $cat_name, $cat_name_history, $parent_url) //тип контента: Документ
{

    $license_get = paritet_get_api('https://master.paritet.ru:9443', '/api/PirDisclosure/v2/Disclosures/Full?filter={"section":"' . $section_name . '"}');
    $response1 = wpgetapi_endpoint('disclo_pir', 'test', array('debug' => false));
    $response1 = json_decode($response1);
    $catId = get_category_by_slug($cat_name)->cat_ID;
    $save_posts_id = array();


    foreach ($license_get->data->items as $item) {

        if ($item->isSingle == '1'){
            $pageId = url_to_postid('/disclosure-v2/');
        } else{
            $pageId = url_to_postid('/disclosure-v2/'.$parent_url);
        }

        if ($item->section == $section_name) {
//            echo '<pre>';
//            print_r($item);
            $id_ = $item->id;
            $post_title = $item->title . ' ' . 'id ' . $id_; //Заголовок поста
            $post_url = translit($item->title);
            $date_fix = substr($item->publishedAt, 0, 10);//дата для сортировки
            $date_fix = str_replace(".", "", $date_fix);//дата для сортировки
            $my_post = array(
                'post_title' => $post_title,
                'post_excerpt' => $item->sectionName,
                'post_status' => 'publish',
                'post_type' => 'post',
                'post_name' => $post_url,
                'post_category' => array($catId),
                'post_parent' => $pageId
            );
            $posts = get_posts(
                [
                    'fields' => 'ids',
                    'post_type' => 'post',
                    'title' => $post_title,
                    'post_status' => 'publish',
                    'post_category' => array($catId),
                    'orderby' => 'post_date ID',
                    'order' => 'ASC',
                ]
            );

            if (!empty($posts)) {
                if ($item->status == 'Deleted' && !has_tag('Deleted', $posts[0])) {
                    print_r($post_title);
                    wp_add_post_tags($posts[0], 'Deleted');
                    wp_remove_object_terms($posts[0], 'Published', 'post_tag');
//                    update_field('issuer_del_reason', $item->deleteReason, $posts[0]);
//                    update_field('issuer_del_at', $item->deletedAt, $posts[0]);// Причина публикации'
                }
                array_push($save_posts_id, $posts[0]);
            } else {
//                echo '<pre> newPost';
//                print_r($post_title);
                $post_id = wp_insert_post($my_post);
                if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-content-document.php');
                wp_set_object_terms($post_id, array($item->status, $item->sectionFilter), 'post_tag', false);
                if ($item->isSingle == '1' && $item->status == 'Published'){
                    wp_set_object_terms($post_id, array($item->status, $item->isSingle), 'post_tag', false);
                }

                update_field('doc_id', $item->id, $post_id); // id API
                update_field('doc_parent_id', $item->parentDisclosureId, $post_id); // id  родительский API
                update_field('doc_title', $item->title, $post_id); // Заголовок

                update_field('doc_publicationReason', $item->publicationReasonName, $post_id);
                update_field('doc_deleteReason', $item->deleteReasonName, $post_id);
                update_field('doc_source', $item->sourceName, $post_id);

                update_field('doc_description', $item->content->document->description, $post_id);
                update_field('doc_validFromDate', dateConverter($item->content->document->validFromDate), $post_id);
                update_field('doc_validToDate', dateConverter($item->content->document->validToDate), $post_id);

                update_field('doc_createdAt', dateConverter($item->createdAt), $post_id);
                update_field('doc_publishedAt', dateConverter($item->publishedAt), $post_id);
                update_field('doc_deletedAt', dateConverter($item->deletedAt), $post_id);
                update_field('doc_publish_fix', $date_fix, $post_id);


                update_field('doc_cat_name_history', $cat_name_history, $post_id); //имя категории истории
                update_field('doc_section_name_history', $section_name, $post_id); //имя секции (папаметр для истории)
                //Добавление файла
                array_push($save_posts_id, $post_id);
                $get_files = paritet_get_api('https://master.paritet.ru:9443', '/api/CloudFileApi/EntityAttachments?attachmentTypeId=22&entityId=' . $item->id);
                if (count($get_files->files) > 0) {
                    $first = 1;
                    $down_link_orig = 'https://master.paritet.ru:9443/api/CloudFileApi/DownloadFile?';
                    $down_link = '';
                    $title_file = $item->id;
                    $file_name = '';
                    foreach ($get_files->files as $file) {
                        $file_name = $file->fileName;
                        $post_name = html_entity_decode($file->sourceFileName, ENT_QUOTES, "UTF-8");
                        if ($first != 1) {
                            $down_link = $down_link . '&';
                            $file_name = $title_file . '.zip';
                        } else {
                            $down_link = $down_link_orig;
                            $file_name = $file->sourceFileName;
                        }
                        $first = 0;
                        $down_link = $down_link . 'id=';
                        $down_link = $down_link . $file->id;
                    }

                    $headers = [
                        'accept' => '*/*',
                        'Authorization' => 'Bearer ' . $response1->jwtToken
                    ];

                    $image_data = download_url_with_headers($down_link, $headers);

                    $file_array = [
                        'name' => $file_name,
                        'tmp_name' => $image_data,
                        'error' => 0,
                        'size' => filesize($image_data),
                    ];

                    $image_id = media_handle_sideload($file_array, $post_id, $post_name);
                    if (is_wp_error($image_id)) {
                        print_r($image_id->get_error_messages());
                    }
                    @unlink($file_array['tmp_name']);
                }



                $catIdHistory = get_category_by_slug($cat_name_history)->cat_ID;
//                global $post;
//                $get_post_id = $post->ID; // сохраняем id родительского поста(для хлебных крошек)
                if ($item->section == $section_name) {
                    $str_id_history = strval($item->parentDisclosureId);
                    foreach ($item->history as $history) {
                        $history_id = $history->id;// id эмитента
                        $history_title = $history->title . ' ' . 'id ' . $history_id; //Заголовок поста
                        $post_url_history = translit($history->title);
                        $history_post = array(
                            'post_title' => $history_title,
                            'post_name' => $post_url_history,
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'post_category' => array($catIdHistory),
                            'post_parent' => $post_id
                        );
                        $history_posts = get_posts(
                            [
                                'post_type' => 'post',
                                'title' => $history_title,
                                'post_status' => 'publish',
                                'post_category' => array($catIdHistory),
                                'orderby' => 'post_date ID',
                                'order' => 'ASC',
                            ]
                        );

                        if (!empty($history_posts)) {

                        } else {

                            $history_post_id = wp_insert_post($history_post);
                            if ($history_post_id) update_post_meta($history_post_id, '_wp_page_template', 'disclosure-document-history.php');
                            wp_set_object_terms($history_post_id, $str_id_history, 'post_tag', false);
                            update_field('history_doc_title', $history->title, $history_post_id);

                            update_field('history_doc_publicationReasonName', $history->publicationReason, $history_post_id);
                            update_field('history_doc_deleteReasonName', $history->deleteReason, $history_post_id);
                            update_field('history_doc_sourceName', $history->source, $history_post_id);

                            update_field('history_doc_description', $history->content->document->description, $history_post_id);
                            update_field('history_doc_validFromDate', dateConverter($history->content->document->validFromDate), $history_post_id);
                            update_field('history_doc_validToDate', dateConverter($history->content->document->validToDate), $history_post_id);
                            update_field('history_doc_createdAt', dateConverter($history->createdAt), $history_post_id);
                            update_field('history_doc_publishedAt', dateConverter($history->publishedAt), $history_post_id);
                            update_field('history_doc_deletedAt', dateConverter($history->deletedAt), $history_post_id);

                            $get_files_history = paritet_get_api('https://master.paritet.ru:9443', '/api/CloudFileApi/EntityAttachments?attachmentTypeId=22&entityId=' . $history->id);

                            if (count($get_files_history->files) > 0) {
                                $first_history = 1;
                                $history_down_link_orig = 'https://master.paritet.ru:9443/api/CloudFileApi/DownloadFile?';
                                $history_down_link = '';
                                $history_title_file = $history->id;
                                $history_file_name = '';

                                foreach ($get_files_history->files as $file) {
                                    $history_file_name = $file->fileName;
                                    $history_post_name = translit($file->sourceFileName);
                                    if ($first_history != 1) {
                                        $history_down_link = $history_down_link . '&';
                                        $history_file_name = $history_title_file . '.zip';
                                    } else {
                                        $history_down_link = $history_down_link_orig;
                                        $history_file_name = $file->sourceFileName;
                                    }
                                    $first_history = 0;
                                    $history_down_link = $history_down_link . 'id=';
                                    $history_down_link = $history_down_link . $file->id;


                                }

                                $history_headers = [
                                    'accept' => '*/*',
                                    'Authorization' => 'Bearer ' . $response1->jwtToken
                                ];
                                $history_image_data = download_url_with_headers($history_down_link, $history_headers);

                                $history_file_array = [
                                    'name' => $history_file_name,
                                    'tmp_name' => $history_image_data,
                                    'error' => 0,
                                    'size' => filesize($history_image_data),
                                ];

                                $history_image_id = media_handle_sideload($history_file_array, $history_post_id, $history_post_name);
                                if (is_wp_error($history_image_id)) {
                                    print_r($history_image_id->get_error_messages());
                                }
                                @unlink($history_file_array['tmp_name']);
                            }
                        }
                    }
                }


            }


        }

    }
    $posts = get_posts(
        [
            'fields' => 'ids', // Only get post IDs
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $save_posts_id,
            'category' => $catId,
            'posts_per_page' => -1
        ]
    );

    foreach ($posts as $posting) {
//        echo '<pre> trash';
//        print_r($posting);
        $my_post2 = array(
            'ID' => $posting,
            'post_status' => 'trash',
        );

        wp_update_post($my_post2);
    }
}

add_action('disclosure_documents_hook', 'disclosure_documents', 10, 4);

$param_licence = array( 'Licenses','license','license_history', 'licenses/' ); //лицензии

$param_affiliates = array( 'Affiliates','affiliates','affiliates_history', 'affiliates-structure/' ); //Аффилированные лица

$param_calculation = array( 'CalculationOfOwnFunds','calculation_funds','calculation_funds_history', 'calculation-means/' ); // расчет собственных средств
$param_not_compliance = array( 'NonComplianceRequirements','non_compliance','non_compliance_history', 'non-compliance/' ); // Несоответствие требованиям ч. 1 ст. 2.1 ФЗ N 213-ФЗ
$param_not_contracts = array( 'Contracts','contract','contract_history', 'contracts-and-orders/' ); // Договоры и распоряжения
$param_disputes = array( 'LegalDisputes','legal_disputes','legal_disputes_history', 'disputes-bankruptcy/' ); // Судебные споры и банкротство
$param_edo = array( 'Edo','edo','edo_history', 'edo/' ); // Электронный документооборот

$param_finance = array( 'Finance','finance','finance_history', 'accounting-financial/' ); // Бух. финансовая отчетность

$param_prices = array( 'Prices','prices','prices_history', 'price-lists/' ); // Прейскуранты

$param_regulatory = array( 'MembershipInSelfRegulatoryOrganizations','regulatory_organizations','regulatory_organizations_history', 'membership-regulatory/' ); // Членство саморегулируемых организаций

$param_rules = array( 'Rules','rules','rules_history', 'rules-regulations/' ); //Правила и положения

$param_software = array( 'Software','software','software_history', 'software/' ); //Информация о программном обеспечении

$param_tech_fail = array( 'TechnicalFailures','technical_fail','technical_fail_history', 'technical-failures/' ); //Технические сбои

// если хотя бы один из вышеуказанных параметров изменится, хук уже будет считаться уникальным и запланируется снова
if( !wp_next_scheduled('disclosure_documents_hook', $param_licence ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_licence );

if( !wp_next_scheduled('disclosure_documents_hook', $param_affiliates ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_affiliates );

if( !wp_next_scheduled('disclosure_documents_hook', $param_calculation ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_calculation );

if( !wp_next_scheduled('disclosure_documents_hook', $param_not_compliance ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_not_compliance );

if( !wp_next_scheduled('disclosure_documents_hook', $param_not_contracts ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_not_contracts );

if( !wp_next_scheduled('disclosure_documents_hook', $param_edo ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_edo );

if( !wp_next_scheduled('disclosure_documents_hook', $param_finance ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_finance );

if( !wp_next_scheduled('disclosure_documents_hook', $param_prices ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_prices );

if( !wp_next_scheduled('disclosure_documents_hook', $param_regulatory ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_regulatory );

if( !wp_next_scheduled('disclosure_documents_hook', $param_rules ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_rules );

if( !wp_next_scheduled('disclosure_documents_hook', $param_software ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_software );

if( !wp_next_scheduled('disclosure_documents_hook', $param_tech_fail ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_tech_fail );

if( !wp_next_scheduled('disclosure_documents_hook', $param_disputes ) )
    wp_schedule_event( time(), 'hourly', 'disclosure_documents_hook', $param_disputes );



