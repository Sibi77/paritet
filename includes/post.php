<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 08.06.2016
 * Time: 13:14
 */

/**
 * Регистрируем кастомный тип поста
 *
 * @link Список пораматров и описание https://wp-kama.ru/function/register_post_type
 */
//add_action('init', 'registerFeedbackPostType');
//
//function registerFeedbackPostType()
//{
//    $labels = [
//        'name' => 'Обращения', // Основное название типа записи
//        'singular_name' => 'Обращение', // отдельное название записи типа Book
//        'add_new' => 'Добавить обращение',
//        'add_new_item' => 'Добавить новое обращение',
//        'edit_item' => 'Редактировать обращения',
//        'new_item' => 'Новое обращение',
//        'view_item' => 'Посмотреть обращение',
//        'search_items' => 'Найти обращения',
//        'not_found' => 'Обращений не найдено',
//        'not_found_in_trash' => 'В корзине обращений не найдено',
//        'parent_item_colon' => '',
//        'menu_name' => 'Обращения',
//
//    ];
//    $args = [
//        'labels' => $labels,
//        'menu_icon' => 'dashicons-megaphone',
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'show_in_nav_menus' => false,
//        'show_in_rest' => false,
//        'query_var' => true,
//        'rewrite' => false,
//        'capability_type' => 'post',
//        'has_archive' => false,
//        'hierarchical' => false,
//        'menu_position' => 25,
//        'supports' => array('title'),
//    ];
//    register_post_type('feedback', $args);
//}

/**
 * Регистрируем кастомную таксономию
 *
 * @link Список пораматров и описание https://wp-kama.ru/function/register_taxonomy
 */

//$brand_labels = [
//    'name' => __('Бренды', 'velerius'),
//    'singular_name' => __('Бренд', 'velerius'),
//    'search_items' => __('Поиск брендов', 'velerius'),
//    'all_items' => __('Все бренды', 'velerius'),
//    'parent_item' => __('Родитель', 'velerius'),
//    'parent_item_colon' => __('Родитель', 'velerius'),
//    'edit_item' => __('Редактировать бренд', 'velerius'),
//    'update_item' => __('Обновить бренд', 'velerius'),
//    'add_new_item' => __('Добавить новый бренд', 'velerius'),
//    'new_item_name' => __('Новое название бренда', 'velerius'),
//    'menu_name' => __('Бренды', 'velerius'),
//];
//
//$brand_args = [
//    'hierarchical' => true,
//    'labels' => $brand_labels,
//    'show_ui' => true,
//    'show_admin_column' => true,
//    'query_var' => true,
//    'rewrite' => array('slug' => 'brand'),
//];
//
//register_taxonomy('brand', array('product'), $brand_args);

