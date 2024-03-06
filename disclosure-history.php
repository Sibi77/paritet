<?php
/*
Template Name: issuers history
Template Post Type: post, history
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

<?php get_footer(); ?>

