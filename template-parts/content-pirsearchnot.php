<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package paritet
 */

?>

<div class="pir-container" style="padding-top: 61px; padding-bottom: 40px">
    <div class="pir-breadcrumbs">
        <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i>Результаты поиска
    </div>
    <header style="">
        <h1 class="pir-search-site__title"><?php
            /* translators: %s: search query. */
            printf( esc_html__( 'Результаты поиска: %s', '_s' ), '<span> “'. get_search_query() .'” Ничего не найдено!</span>' );
            ?></h1>
    </header><!-- .page-header -->
</div>




