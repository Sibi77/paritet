<?php
/*
Template Name: issuers history
Template Post Type: post, history
 */
get_header();

?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i><?= get_field("history_short_name"); ?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">

        <h1 class="pir-title-h1"><?= get_field("history_short_name"); ?></h1>
        <div class="disclosure-card__label">История</div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?= get_field("history_short_name"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content"><?= get_field("history_full_name"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content"><?= get_field("history_inn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content"><?= get_field("history_ogrn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адрес</div>
            <div class="disclosure-card__content"><?= get_field("history_address"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата заключения договора на ведение реестра</div>
            <div class="disclosure-card__content"><?= get_field("history_date_conclusion"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата акта приема реестра</div>
            <div class="disclosure-card__content"><?= get_field("history_date_acceptance"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("history_reason_public"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("history_published"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Перенесено в архив</div>
            <div class="disclosure-card__content"><?= get_field("history_moved_archives"); ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

