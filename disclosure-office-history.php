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

        <h1 class="pir-title-h1"><?= get_field('history_office_title');?></h1>



        <?php if(!get_field("history_office_address") == null || !get_field("history_office_address") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Адрес</div>
                <div class="disclosure-card__content">
                   <?= get_field("history_office_address");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_office_phone") == null || !get_field("history_office_phone") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Телефон</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_office_phone");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_office_fax") == null || !get_field("history_office_fax") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Факс</div>
                <div class="disclosure-card__content">
                 <?=get_field("history_office_fax");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_office_head") == null || !get_field("history_office_head") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Руководитель филиала</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_office_head");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_office_publishedAt") == null || !get_field("history_office_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("history_office_publishedAt"),0,10);?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_office_delReason") == null || !get_field("history_office_delReason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина удаления</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_office_delReason");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_office_publishedAt") == null || !get_field("history_office_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_office_publishedAt");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_office_deletedAt") == null || !get_field("history_office_deletedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_office_deletedAt");?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

