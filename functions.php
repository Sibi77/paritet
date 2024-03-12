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
//    wp_enqueue_script('pir-scripts', get_template_directory_uri() . '/js/script.min.js', [], '', true);
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




function getPirApiDisclosure(){
//    $login = 'public1';
//    $pass = 'public1';
//    $args2 = array(
//        'headers' => array(
//            'Authorization' => 'Basic ' . base64_encode( $login . ':' . $pass )
//        )
//    );
    $args1 = array(
        'headers' => array(
            'accept' => 'text/plain',
            'Content-Type'=> 'application/json'
        ),
        'body' => array(
            'password' => '777777rR',
            'userName'=> 'public1'
        )
    );

    $response2222 = wp_remote_get( 'https://master.paritet.ru:9443/api/ClientApi/Login', $args1 );

//  echo '<pre>';
//  print_r($response2222);

    $response1 = wpgetapi_endpoint( 'disclo_pir', 'test', array('debug' => false) );
    $response1 =json_decode( $response1 );

    $args = array(
        'headers' => array(
            'accept'=> 'application/json',
            'Authorization' => 'Bearer ' .$response1->jwtToken
        )
    );

    $response = wp_remote_get( 'https://master.paritet.ru:9443/api/PirDisclosure/v2/Disclosures/Full', $args );
    $response = wp_remote_retrieve_body($response);
    $response =  json_decode( $response );



    foreach ($response->items as $item){
        if ($item->section == 'Issuers') {

            $issuer_status = $item->status; // cтатус эмитента
            echo '<pre>';
             print_r($item);
        }
    }

}
//getPirApiDisclosure();
function paritet_get_api()
{

    // это ключ-идентификатор значения транзитного кэша
    $transient_key = 'pir123';

    // сразу же обращаемся к транзитному кэшу и пытаемся получить значение из кэша
    $transient = get_transient($transient_key);

    // Если значение в транзитном кэша существует, то мы возвращаем его и на этом всё
    if (false !== $transient) {

        return $transient;

        // В кэше пусто? Тогда обращаемся к API
    } else {

        // Обращаемся к API

        $response1 = wpgetapi_endpoint( 'disclo_pir', 'test', array('debug' => false) );
        $response1 =json_decode( $response1 );

        $args = array(
            'headers' => array(
                'accept'=> 'application/json',
                'Authorization' => 'Bearer ' .$response1->jwtToken
            )
        );

        $response = wp_remote_get( 'https://master.paritet.ru:9443/api/PirDisclosure/v2/Disclosures/Full', $args );
        $response = wp_remote_retrieve_body($response);
        $response =  json_decode( $response );
        // Сохраняем ответ из API в транзитный кэш
        set_transient($transient_key, $response, 20);

        // Возвращаем результат
        return $response;

    }

}
function paritet_get_api_file($id)
{

    // это ключ-идентификатор значения транзитного кэша
    $transient_key = 'pir11223';

    // сразу же обращаемся к транзитному кэшу и пытаемся получить значение из кэша
    $transient = get_transient($transient_key);

    // Если значение в транзитном кэша существует, то мы возвращаем его и на этом всё
    if (false !== $transient) {

        return $transient;

        // В кэше пусто? Тогда обращаемся к API
    } else {

        // Обращаемся к API

        $response1 = wpgetapi_endpoint( 'disclo_pir', 'test', array('debug' => false) );
        $response1 =json_decode( $response1 );

        $args = array(
            'headers' => array(
                'accept'=> 'application/json',
                'Authorization' => 'Bearer ' .$response1->jwtToken
            )
        );

        $response = wp_remote_get( 'https://master.paritet.ru:9443/api/CloudFileApi/EntityAttachments?attachmentTypeId=22&entityId='.$id, $args );
        $response = wp_remote_retrieve_body($response);
        $response =  json_decode( $response );
        // Сохраняем ответ из API в транзитный кэш
        set_transient($transient_key, $response, 20);

        // Возвращаем результат
        return $response;


    }

}
function paritet_get_download_file()
{

    // это ключ-идентификатор значения транзитного кэша
    $transient_key = 'pir112233';

    // сразу же обращаемся к транзитному кэшу и пытаемся получить значение из кэша
    $transient = get_transient($transient_key);

    // Если значение в транзитном кэша существует, то мы возвращаем его и на этом всё
    if (false !== $transient) {

        return $transient;

        // В кэше пусто? Тогда обращаемся к API
    } else {

        // Обращаемся к API

        $response1 = wpgetapi_endpoint( 'disclo_pir', 'test', array('debug' => false) );
        $response1 =json_decode( $response1 );

        $args = array(
            'headers' => array(
                'accept'=> 'application/json',
                'Authorization' => 'Bearer ' .$response1->jwtToken
            )
        );

        $response = wp_remote_get( 'https://master.paritet.ru:9443/api/CloudFileApi/DownloadFile?id=', $args );
        $response = wp_remote_retrieve_body($response);
        $response =  json_decode( $response );
        // Сохраняем ответ из API в транзитный кэш
        set_transient($transient_key, $response, 20);

        // Возвращаем результат
        return $response;


    }

}






function checkPost(){
    $params = array(
        'posts_per_page' => -1, // все посты
        'post_status' => 'publish',
        'cat'	=> 18
    );
    $tes =  get_posts($params);
    $issuer_get1 = paritet_get_api();
    $companies = array();
    $companies1 = array();


    foreach ($issuer_get1->items as $item){
        if ($item->section == 'Issuers'){
            $issuer_status = $item->status; // cтатус эмитента
            $issuer_id = $item->id;// id эмитента
            $issuer_title = $item->content->issuer->shortName . ' ' . 'id ' . $issuer_id . 'status' . $issuer_status;

            array_push($companies, $issuer_title);

        }
    }
    foreach ($tes as $te){

        $title = $te->post_title;
        array_push($companies1, $title);
    }
//    echo '<pre>';
//    print_r(count($companies));
//    print_r(count($companies1));

    if ( count($companies) !== count($companies1)){
        $paramssss = array(
            'posts_per_page' => -1, // все записи
            'post_type'	=> 'post', // записи, этот параметр можно не указывать, так как post - стоит по умолчанию
            'cat'	=> 18
        );
        $q = new WP_Query( $paramssss );
        if( $q->have_posts() ) : // если посты по заданным параметрам найдены
            while( $q->have_posts() ) : $q->the_post();
                wp_delete_post( $q->post->ID, true ); // второй параметр функции true означает, что пост будут удаляться, минуя корзину
            endwhile;
        endif;
        wp_reset_postdata();
    } else{

    }
}
function issuerPost()
{
    $issuer_get = paritet_get_api();
    foreach ($issuer_get->items as $item) {
        if ($item->section == 'Issuers') {

            $issuer_status = $item->status;
            $issuer_delete_reason = $item->deleteReason;
            // cтатус эмитента
            $tag_status = $issuer_status. ', '.$issuer_delete_reason;
            $issuer_id = $item->id;// id эмитента

            $issuer_title = $item->content->issuer->shortName . ' ' . 'id ' . $issuer_id; //Заголовок поста
            $issuer_short_mane = $item->content->issuer->shortName; //Краткое наименование
            $issuer_full_name = $item->content->issuer->fullName;// Полное наименование
            $issuer_inn = $item->content->issuer->inn; //Инн эмитента
            $issuer_ogrn = $item->content->issuer->ogrn; //ОГРН эмитента
            $issuer_address = $item->content->issuer->address; // Адресс эмитента
            $issuer_contract_date = $item->content->issuer->registryContractDate; //Дата заключения договора на ведение реестра
            $issuer_act_date = $item->content->issuer->registryIncomingActDate; //Дата акта приема реестра
            $issuer_pub_reason = $item->publicationReason; // Причина публикации'
            $issuer_date_publish = substr($item->publishedAt, 0, 10); // когда опублткованно

            $my_post = array(
                'post_title' => $issuer_title,
                'post_status' => 'publish',
                'post_content' => $item,
                'post_type' => 'post',
                'post_category' => array(18)
            );
            $posts = get_posts(
                [
                    'post_type' => 'post',
                    'title' => $issuer_title,
                    'post_status' => 'publish',
                    'post_category' => array(18),
                    'orderby' => 'post_date ID',
                    'order' => 'ASC',
                ]
            );



            if (!empty($posts)) {
            } else {

                $post_id = wp_insert_post($my_post);
                if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-single.php');
                wp_set_object_terms($post_id, array($issuer_status,$issuer_delete_reason), 'post_tag', false);
                update_field('issuer_id', $issuer_id, $post_id);
                update_field('short_name', $issuer_short_mane, $post_id);
                update_field('full_name', $issuer_full_name, $post_id);
                update_field('inn', $issuer_inn, $post_id);
                update_field('ogrn', $issuer_ogrn, $post_id);
                update_field('address', $issuer_address, $post_id);
                update_field('date_conclusion', $issuer_contract_date, $post_id);
                update_field('date_acceptance', $issuer_act_date, $post_id);
                update_field('reason_public', $issuer_pub_reason, $post_id);
                update_field('published', $issuer_date_publish, $post_id);
            }


        }

    }
}

function issuerHistoryPost()
{
    $issuer_get = paritet_get_api();
    foreach ($issuer_get->items as $item) {

        if ($item->section == 'Issuers') {
            $issuer_id1 = $item->id;
            $str_id = strval($issuer_id1);
            foreach ($item->history as $history) {


                $issuer_id = $history->id;// id эмитента
                $issuer_title = $history->title . ' ' . 'id ' . $issuer_id; //Заголовок поста
                $issuer_short_name = $history->content->issuer->shortName;
                $issuer_full_name = $history->content->issuer->fullName;
                $issuer_inn = $history->content->issuer->inn;
                $issuer_ogrn = $history->content->issuer->ogrn;
                $issuer_addres = $history->content->issuer->address;
                $issuer_date_conclusion = $history->content->issuer->registryContractDate;
                $issuer_date_acceptance = $history->content->issuer->registryIncomingActDate;
                $issuer_reason_public = $history->publicationReason;
                $issuer_published = substr($history->publishedAt, 0, 10);
                $issuer_moved_archives = substr($history->deletedAt, 0, 10);

                $my_post = array(
                    'post_title' => $issuer_title,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'post_category' => array(20),
                );
                $posts = get_posts(
                    [
                        'post_type' => 'post',
                        'title' => $issuer_title,
                        'post_status' => 'publish',
                        'post_category' => array(20),
                        'orderby' => 'post_date ID',
                        'order' => 'ASC',
                    ]
                );

                if (!empty($posts)) {

                } else {

                    $post_id = wp_insert_post($my_post);
                    if ($post_id) update_post_meta($post_id, '_wp_page_template', 'disclosure-history.php');
                    wp_set_object_terms($post_id, $str_id, 'post_tag', false);
                    update_field('history_short_name', $issuer_short_name, $post_id);
                    update_field('history_full_name', $issuer_full_name, $post_id);
                    update_field('history_inn', $issuer_inn, $post_id);
                    update_field('history_ogrn', $issuer_ogrn, $post_id);
                    update_field('history_address', $issuer_addres, $post_id);
                    update_field('history_date_conclusion', $issuer_date_conclusion, $post_id);
                    update_field('history_date_acceptance', $issuer_date_acceptance, $post_id);
                    update_field('history_reason_public', $issuer_reason_public, $post_id);
                    update_field('history_published', $issuer_published, $post_id);
                    update_field('history_moved_archives', $issuer_moved_archives, $post_id);
                }
            }
        }

    }
}
//issuerHistoryPost();

