<?php
/*
Template Name: officials history
Template Post Type: post, officials_history
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
        <h1 class="pir-title-h1"><?= get_field('history_officials_title')?></h1>
        <div class="disclosure-card__label">История</div>



        <?php if(!get_field("history_officials_fio") == null || !get_field("history_officials_fio") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ФИО</div>
                <div class="disclosure-card__content">
                    <?= get_field("history_officials_fio");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_officials_position") == null || !get_field("history_officials_position") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Должность</div>
                <div class="disclosure-card__content">
                   <?= get_field("history_officials_position");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_officials_date_election") == null || !get_field("history_officials_date_election") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата избрания</div>
                <div class="disclosure-card__content">
                   <?= substr(get_field("history_officials_date_election"),0,10);?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("history_officials_work_experience") == null || !get_field("history_officials_work_experience") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опыт работы</div>
                <div class="disclosure-card__content">
                    <?=  get_field("history_officials_work_experience");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_officials_published_at") == null || !get_field("history_officials_published_at") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?= substr(get_field("history_officials_published_at"),0,10);?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_officials_del_reason") == null || !get_field("history_officials_del_reason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина Удаления</div>
                <div class="disclosure-card__content">
                    <?= get_field("history_officials_del_reason");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("history_officials_published_at") == null || !get_field("history_officials_published_at") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                    <?= get_field("history_officials_published_at");?>
                </div>
            </div>
        <?php endif; ?>



        <?php if(!get_field("history_officials_deletedAt") == null || !get_field("history_officials_deletedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                    <?=  get_field("history_officials_deletedAt");?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>

