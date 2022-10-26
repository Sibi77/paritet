<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paritet
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-180x180.png">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

</head>

<!--<div class="swipe-overlay"></div>-->
<!-- end html_open.html-->


<!-- header section-->



