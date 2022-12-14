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
 * @param string      $handle    Name of the script. Should be unique.
 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
 *                               Default 'false'.
 */
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
    wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string      $handle Name of the stylesheet. Should be unique.
 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
 * @param string      $media  Optional. The media for which this stylesheet has been defined.
 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
 *                            '(orientation: portrait)' and '(max-width: 640px)'.
 */
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
    wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
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
    enqueue_versioned_style( 'pir-style', '/css/main.min.css' );

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
    enqueue_versioned_script( 'pir-scripts', '/js/script.min.js', array( 'jquery'), true );
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




