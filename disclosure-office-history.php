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
        <h1 class="pir-title-h1"><?= get_field('history_office_title');?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_pub_reason") == null || get_field("history_office_pub_reason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_pub_reason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_delReason") == null || get_field("history_office_delReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_delReason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_source") == null || get_field("history_office_source") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_source");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адрес</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_address") == null || get_field("history_office_address") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_address");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_phone") == null || get_field("history_office_phone") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_phone");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_fax") == null || get_field("history_office_fax") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_fax");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Руководитель филиала</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_head") == null || get_field("history_office_head") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_head");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_createdAt") == null || get_field("history_office_createdAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_createdAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_publishedAt") == null || get_field("history_office_publishedAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_publishedAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_office_deletedAt") == null || get_field("history_office_deletedAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_office_deletedAt");
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

