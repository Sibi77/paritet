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
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_reason_public") == null || get_field("history_transfer_reason_public") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_reason_public");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_deleteReason") == null || get_field("history_transfer_deleteReason") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_deleteReason");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_source") == null || get_field("history_transfer_source") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_source");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_short_name") == null || get_field("history_transfer_short_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_short_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_full_name") == null || get_field("history_transfer_full_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_full_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_inn") == null || get_field("history_transfer_inn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_inn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_ogrn") == null || get_field("history_transfer_ogrn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_ogrn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс указанный в ЕГРЮЛ</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_address") == null || get_field("history_transfer_address") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_address");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_phone") == null || get_field("history_transfer_phone") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_phone");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФАКС</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_fax") == null || get_field("history_transfer_fax") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_fax");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_createAt") == null || get_field("history_transfer_createAt") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_createAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_published") == null || get_field("history_transfer_published") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_published");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if (get_field("history_transfer_deletedAt") == null || get_field("history_transfer_deletedAt") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("history_transfer_deletedAt");
                }
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

