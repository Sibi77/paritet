<?php
/*
Template Name: officials history
Template Post Type: post, officials_history
 */
get_header();
?>
<!--<div class="pir-container">-->
<!--    <div class="no-section">-->
<!--        <div class="pir-breadcrumbs">-->
<!--            <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i>--><?php //= get_field("full_name"); ?>
<!--        </div>-->
<!--    </div></div>-->
<section class="disclosure-card">
    <div class="pir-container">
        <h1 class="disclosure-card__title"><?= get_field("officials_fio");?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФИО</div>
            <div class="disclosure-card__content"><?= get_field("officials_fio");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Должность</div>
            <div class="disclosure-card__content"><?= get_field("officials_position");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата избрания</div>
            <div class="disclosure-card__content"><?= get_field("officials_date_election");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опыт работы</div>
            <div class="disclosure-card__content"><?= get_field("officials_work_experience");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content"><?= get_field("officials_del_reason");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("officials_pub_reason");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата создания</div>
            <div class="disclosure-card__content"><?= get_field("officials_created_at");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("officials_published_at");?></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

