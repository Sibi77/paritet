<?php
/*
 * Template name: Все Новости
 */
get_header(); ?>

<div class="pir-head-content">
    <div class="container">
        <div class="pir-head-content__wrap">



            <div class="pir-head-content__absolute">

                <h2>Новости и статьи</h2>
                <p>Новости АО “РДЦ ПАРИТЕТ”, актуальные статьи по ведению реестров акционеров и корпоративному праву, объявления о корпоративных действиях эмитентов</p>
            </div>

        </div>
    </div>
</div>
<div class="pir-container">
    <div class="pir-breadcrumbs">
        <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i>
        <a href="/about-company/">О компании</a>
        <i class="angle-arrow-right"></i> Новости и статьи
    </div>
</div>
<section class="pir-news-all">
    <div class="pir-news-container">
        <?php echo do_shortcode('[searchandfilter id="3683"]');

        ?>
        <div id="main" class="pir-news__container">

            <div class="pir-container">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
            </div>
            <?php
            $sticky = get_option('sticky_posts');
            if (have_posts()) : ?>

                <div class="pir-news__result">Найдено <?php /* Search Count */
                    global $wp_query;
                    echo $wp_query->found_posts . ' записей';
                    wp_reset_query(); ?>
                </div>

                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'search');
                endwhile;
            endif;

            ?>

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
        <?php if ($wp_query->max_num_pages > 1) : ?>
            <script>
                var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';
                var posts_vars = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
            </script>
            <div class="pir-news-mobile-result">

            </div>
            <div class="pir-container">
                <button id="pir-news-loadmore">Посмотреть ещё</button>
            </div>
        <?php endif; ?>

    </div>
</section>
<script>
    (function ($) {

        "use strict";

        $(function () {
            $(document).on("sf:ajaxstart", ".searchandfilter", function () {


            });

            $(document).on('keyup', '.sf-input-text', function () {
                $(document).on("sf:ajaxfinish", ".searchandfilter", function () {

                    let sticky = $('.sticky')
                    let _this = $('.sf-input-text');
                    let clearBtn = $('.news-clear-search')

                    if ($('.sf-input-text').val() !== '') {
                        clearBtn.css({
                            display: 'block'
                        })
                    } else {
                        clearBtn.css({
                            display: 'none'
                        })
                    }
                    $.each(sticky, function () {
                        if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                            $(this).hide();
                        else {
                            $(this).show();
                        }

                    });


                });
            })
            $(document).on('click', '.news-clear-search', function () {
                $('.sf-input-text').val('')
                var radioTag = $('.sf-input-checkbox');
                $.each(radioTag, function () {
                    if ($(this).prop('checked')) {
                        $(this).click();
                    }
                })
                $('.searchandfilter').trigger('submit')


            })
            $(document).on('click', '.sf-field-tag .sf-level-0', function () {
                $(document).on("sf:ajaxfinish", ".searchandfilter", function () {

                    let sticky = $('.sticky')
                    let checkedTag = $('.sf-field-tag .sf-input-checkbox:checkbox:checked').val();
                    let checkedCategory = $('.sf-field-category .sf-input-checkbox:checkbox:checked').val();
                    let categoryNews = $('.sticky.category-news');
                    let categoryArticles = $('.sticky.category-articles');


                    $.each(sticky, function () {
                        if ($(this).find('.pir-news__date').text().trim().toString().slice(-4) !== checkedTag) {
                            $(this).hide();

                        }
                        if (checkedTag === undefined) {
                            $(this).show();
                        }
                        if (checkedCategory === 'articles' && checkedTag === undefined) {
                            categoryArticles.show();
                            categoryNews.hide();
                        }
                        if (checkedCategory === 'news' && checkedTag === undefined) {
                            categoryNews.show();
                            categoryArticles.hide();
                        }
                    });


                });
            })
            $(document).on('click', '.sf-field-category .sf-level-0', function () {
                $(document).on("sf:ajaxfinish", ".searchandfilter", function () {

                    let sticky = $('.sticky')
                    let checkedCategory = $('.sf-field-category .sf-input-checkbox:checkbox:checked').val();
                    let categoryNews = $('.sticky.category-news');
                    let categoryArticles = $('.sticky.category-articles');


                    $.each(sticky, function () {
                        if (checkedCategory === 'news' && $(this).hasClass('category-news')) {
                            categoryArticles.hide();

                        }
                        if (checkedCategory === 'articles' && $(this).hasClass('category-articles')) {
                            categoryNews.hide();

                        }

                    });


                });
            })


        });

    }(jQuery));
</script>

<?php get_footer(); ?>

