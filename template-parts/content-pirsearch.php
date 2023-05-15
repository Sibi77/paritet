<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package paritet
 */

?>

    <a href="<?php the_permalink(); ?>" <?php post_class('pir-search-site__wrap-news'); ?>>
        <div class="pir-search-site__tambnail">
<!--            $title = get_the_title();-->
<!--            $keys = explode(" ",$s);-->
<!--            $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search_expt">\0</strong>', $title);-->
<!--            echo $title;-->
<!--            ?>-->
            <h3 class="pir-search-site__title-h3"><?php the_title(); ?></h3>
             <?php
             $my_descr = get_post_meta($post->ID, "_yoast_wpseo_metadesc", true);
             if ($my_descr){
                 echo  "<p>$my_descr</p>";
             }
             else
             ?>
            <?php the_excerpt() ?>
        </div>
        <?php
        $articles = get_the_category();
        if (!empty($articles)) : ?>
            <div class="pir-search-site__footer">
                <span class="pir-search-site__label">Новости</span>
                <span class="pir-news__date"><?php the_field('date_news') ?></span>
            </div>
        <?php endif; ?>



    </a>




