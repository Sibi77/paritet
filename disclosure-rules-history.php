<?php
/*
Template Name: rules history
Template Post Type: post, rules
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
        <div class="disclosure-card__wrap">
            <h1 class="disclosure-card__title"><?= get_field("rules_history_title"); ?></h1>
            <?php
            $media_doc = get_attached_media('');


            foreach ($media_doc as $url) {
            } ?>
            <a href="<?= $url->guid; ?>" download class="disclosure-card__download-doc">
                <div class="disclosure-card__title-doc">Скачать документ</div>
                <div class="disclosure-card__title-file"></div>
                <div class="disclosure-card__icon-file">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="download">
                </div>

            </a>
            <?php
            ?>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Дополнительная информация</div>
            <div class="disclosure-card__content"><?= get_field("rules_history_more_info"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Действует с</div>
            <div class="disclosure-card__content"><?= get_field("rules_history_valid"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Действительный до..</div>
            <div class="disclosure-card__content"><?= get_field("rules_history_valid_to"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("rules_history_del_reason"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content"><?= get_field("rules_history_deleted_at"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("rules_history_publish"); ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

