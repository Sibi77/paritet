<?php
/*
Template Name: office_history
Template Post Type: post
 */
get_header();
?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <?php true_breadcrumbs();?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">

        <?php
       ?>
        <h1 class="pir-title-h1">Филиалы и представительства</h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адрес</div>
            <div class="disclosure-card__content"><?= get_field("history_office_address"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content"><?= get_field("history_office_phone"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content"><?= get_field("history_office_fax"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Руководитель филиала</div>
            <div class="disclosure-card__content"><?= get_field("history_office_head"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("history_office_pub_reason"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Созданно</div>
            <div class="disclosure-card__content"><?= get_field("history_office_createdAt"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("history_office_publishedAt"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content"><?= get_field("history_office_deletedAt"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content"><?= get_field("history_office_delReason"); ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

