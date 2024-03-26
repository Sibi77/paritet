<?php
/*
Template Name: history agents
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
        <h1 class="pir-title-h1"><?= get_field("history_transfer_short_name"); ?></h1>
        <div class="disclosure-card__label">История</div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_short_name"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_full_name"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_inn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_ogrn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс указанный в ЕГРЮЛ</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_address"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_phone"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФАКС</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_fax"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_reason_public"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_published"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_deleteReason"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content"><?= get_field("history_transfer_deletedAt"); ?></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

