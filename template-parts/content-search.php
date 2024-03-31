<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package paritet
 */

?>




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

