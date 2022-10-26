<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-news">
    <div class="pir-news-container">
        <h2 class="pir-title w-100 text-center"><?= $atts['news_title'] ?></h2>


        <div class="pir-news__cover animation-scroll">


            <?php
            global $post;
            $sticky = get_option('sticky_posts');
            $args1 = array(
                'posts_type' => ['post'],
                'post__in' => $sticky
            );

            $myposts1 = get_posts($args1);
            foreach ($myposts1 as $post) {
                setup_postdata($post);
                ?>


                <a href="<?php the_permalink(); ?>" class="pir-news__wrap sticky"
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
            }
            wp_reset_postdata();

            $args = array(
                'numberposts' => 6,
                'category_name' => 'news, articles',
                'orderby' => 'date',
                'post__not_in' => $sticky
            );

            $myposts = get_posts($args);
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>


                <a href="<?php the_permalink(); ?>" class="pir-news__wrap "
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
            }
            wp_reset_postdata();
            ?>

        </div>


        <a href="/all-news" class="pir-btn pir-btn-white "><?= $atts['news_btn_name'] ?></a>
    </div>
</section>




