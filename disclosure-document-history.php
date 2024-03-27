<?php
/*
Template Name: document_history
Template Post Type: post, document_history
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
        <div class="disclosure-card__wrap">
            <h1 class="pir-title-h1"><?= get_field("history_doc_title"); ?></h1>

            <?php

            $media_doc = get_attached_media('');


            foreach ($media_doc as $url) {
            } ?>

            <?php if(!empty($url)) {?>
                <a href="<?= $url->guid; ?>"  class="disclosure-card__download-doc">
                    <div class="disclosure-card__title-doc">Скачать документ</div>
                    <div class="disclosure-card__title-file"><?= $url->post_name?></div>
                    <div class="disclosure-card__icon-file">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="download">
                    </div>

                </a>
                <?php
            }
            ?>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_publicationReason") == null || get_field("history_doc_publicationReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_publicationReason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_deleteReason") == null || get_field("history_doc_deleteReason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_deleteReason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_source") == null || get_field("history_doc_source") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_source");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дополнительная информация</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_description") == null || get_field("history_doc_description") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_description");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Действует с</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_validFromDate") == null || get_field("history_doc_validFromDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_validFromDate");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Действует по</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_validToDate") == null || get_field("history_doc_validToDate") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_validToDate");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_createdAt") == null || get_field("history_doc_createdAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_createdAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_publishedAt") == null || get_field("history_doc_publishedAt") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("history_doc_publishedAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("history_doc_deletedAt") == null || get_field("history_doc_deletedAt") == ''){
                    echo 'Не определено';
                }else{
                    echo  get_field("history_doc_deletedAt");
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

