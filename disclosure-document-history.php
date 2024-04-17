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
            <?php true_breadcrumbs(); ?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">
        <div class="disclosure-card__wrap">
            <?php

            $media_doc = get_attached_media('');


            foreach ($media_doc as $url) {
            } ?>
            <h1 class="pir-title-h1" <?php if(!empty($url)) echo 'style="width: 625px"'; ?>><?= get_field("history_doc_title"); ?></h1>
            <div class="disclosure-card__label">История</div>
            <?php if (!empty($url)) { ?>


                <a href="<?= $url->guid; ?> " download class="disclosure-card__download-doc">
                    <div class="disclosure-card__title-doc">Скачать документ</div>
                    <div class="disclosure-card__title-file"><?= $url->post_name ?></div>
                    <div class="disclosure-card__icon-file">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="download">
                    </div>

                </a>

                <?php

            }
            ?>



            <?php if(!get_field("history_doc_description") == null || !get_field("history_doc_description") == '') : ?>
                <div class="disclosure-card__item" <?php if(!empty($url)) echo 'style="width: 625px"'; ?>>
                    <div class="disclosure-card__header">Дополнительная информация</div>
                    <div class="disclosure-card__content">
                        <?=get_field("history_doc_description");?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!get_field("history_doc_validFromDate") == null || !get_field("history_doc_validFromDate") == '') : ?>
                <div class="disclosure-card__item">
                    <div class="disclosure-card__header">Действует с</div>
                    <div class="disclosure-card__content">
                        <?=get_field("history_doc_validFromDate");?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!get_field("history_doc_validToDate") == null || !get_field("history_doc_validToDate") == '') : ?>
                <div class="disclosure-card__item">
                    <div class="disclosure-card__header">Действует по</div>
                    <div class="disclosure-card__content">
                       <?=get_field("history_doc_validToDate");?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!get_field("history_doc_deleteReason") == null || !get_field("history_doc_deleteReason") == '') : ?>
                <div class="disclosure-card__item">
                    <div class="disclosure-card__header">Причина удаления</div>
                    <div class="disclosure-card__content">
                        <?=get_field("history_doc_deleteReason");?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!get_field("history_doc_publishedAt") == null || !get_field("history_doc_publishedAt") == '') : ?>
                <div class="disclosure-card__item">
                    <div class="disclosure-card__header">Опубликовано</div>
                    <div class="disclosure-card__content">
                       <?=get_field("history_doc_publishedAt");?>
                    </div>
                </div>
            <?php endif; ?>


            <?php if(!get_field("history_doc_deletedAt") == null || !get_field("history_doc_deletedAt") == '') : ?>
                <div class="disclosure-card__item">
                    <div class="disclosure-card__header">Удалено</div>
                    <div class="disclosure-card__content">
                        <?=get_field("history_doc_deletedAt");?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>

