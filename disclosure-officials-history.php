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

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_pub_reason") == null || get_field("history_officials_pub_reason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_pub_reason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина Удаления</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_del_reason") == null || get_field("history_officials_del_reason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_del_reason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_source") == null || get_field("history_officials_source") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_source");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФИО</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_fio") == null || get_field("history_officials_fio") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_fio");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Должность</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_position") == null || get_field("history_officials_position") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_position");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата избрания</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_date_election") == null || get_field("history_officials_date_election") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("history_officials_date_election"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опыт работы</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_work_experience") == null || get_field("history_officials_work_experience") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_work_experience");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_created_at") == null || get_field("history_officials_created_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_created_at");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_published_at") == null || get_field("history_officials_published_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_published_at");
                }
                ?>
            </div>
        </div>



        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_officials_deletedAt") == null || get_field("history_officials_deletedAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_officials_deletedAt");
                }
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

