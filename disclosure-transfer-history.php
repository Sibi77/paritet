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

        <h1 class="pir-title-h1"><?= get_field("history_transfer_title"); ?></h1>
        <div class="disclosure-card__label">История</div>



        <?php if(!get_field("history_transfer_short_name") == null || !get_field("history_transfer_short_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Краткое наименование</div>
                <div class="disclosure-card__content">
                  <?=get_field("history_transfer_short_name");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_full_name") == null || !get_field("history_transfer_full_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Полное наименование</div>
                <div class="disclosure-card__content">
                    <?= get_field("history_transfer_full_name");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_inn") == null || !get_field("history_transfer_inn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ИНН</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_transfer_inn");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_ogrn") == null || !get_field("history_transfer_ogrn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ОГРН</div>
                <div class="disclosure-card__content">
                  <?=get_field("history_transfer_ogrn");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_address") == null || !get_field("history_transfer_address") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Адресс указанный в ЕГРЮЛ</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_transfer_address");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_phone") == null || !get_field("history_transfer_phone") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Телефон</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_transfer_phone")?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_fax") == null || !get_field("history_transfer_fax") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ФАКС</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_transfer_fax");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_transfer_published") == null || !get_field("history_transfer_published") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("history_transfer_published"),0,10);?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_transfer_deleteReason") == null || !get_field("history_transfer_deleteReason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина удаления</div>
                <div class="disclosure-card__content">
                    <?=get_field("history_transfer_deleteReason");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_transfer_published") == null || !get_field("history_transfer_published") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_transfer_published");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_transfer_deletedAt") == null || !get_field("history_transfer_deletedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                   <?=get_field("history_transfer_deletedAt");?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>

