<?php
/*
Template Name: issuers
Template Post Type: post, issuers
 */
get_header();
?>

<section class="disclosure-card">
    <div class="pir-container">
        <div class="no-section">
            <div class="pir-breadcrumbs">
                <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i><?= get_field("full_name"); ?>
            </div>
        </div>
        <h2 class="pir-title-h1"><?= get_field("short_name"); ?></h2>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?= get_field("full_name"); ?></div>
        </div>
        <br>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content"><?= get_field("short_name"); ?></div>
        </div>
        <br>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс</div>
            <div class="disclosure-card__content"><?= get_field("address"); ?></div>
        </div>
        <br>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content"><?= get_field("inn"); ?></div>
        </div>
        <br>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("published"); ?></div>
        </div>
    </div>
</section>
<div class="pir-table">
    <div class="pir-container">
        <h2 class="pir-content__title">История изменений</h2>
        <div class="table-calc__tab-mob">
            <?php
            $id =  get_field("issuer_id");
            global $post;

            $myposts = get_posts( [
                'category_name' => 'history',
                'post_type' => 'post',
                'tag' => $id,
            ] );

            foreach( $myposts as $post ){setup_postdata( $post ); ?>
                <div class="article-elem">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <?php

            }
            wp_reset_postdata();
            ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>

