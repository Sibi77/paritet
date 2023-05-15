<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */
get_header();

if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) :?>
<div class="pir-container pir-infinity-scroll" style="padding-top: 61px; padding-bottom: 40px">
    <div class="pir-breadcrumbs">
        <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i>Результаты поиска
    </div>
     <header style="">
                    <h1 class="pir-search-site__title"><?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Результаты поиска: %s', '_s' ), '<span> “'  . get_search_query() . '”</span>' );
                        ?></h1>
     </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'pirsearch' );
    endwhile;
   else: get_template_part( 'template-parts/content', 'pirsearchnot' );
    endif; ?>
    <?php $args = array(
        'show_all' => false, // показаны все страницы участвующие в пагинации
        'end_size' => 1,     // количество страниц на концах
        'mid_size' => 1,     // количество страниц вокруг текущей
        'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
        'prev_text' => __(' ПРЕДЫДУЩАЯ'),
        'next_text' => __('СЛЕДУЮЩАЯ »'),
        'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
        'aria_label' => __('Posts'), // aria-label="" для nav элемента. С WP 5.3
        'class' => 'pir-news-pagination',  // class="" для nav элемента. С WP 5.5
//                    'after_page_number' => '<span class="pir-ajax-pagination"</span>'
    );
    the_posts_pagination($args); ?>
</div>


<?php get_footer();?>
