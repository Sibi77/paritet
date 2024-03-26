<?php
/*
Template Name: base info history
Template Post Type: post, base-info
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
        <h1 class="pir-title-h1">Основные сведения</h1>
            <div class="disclosure-card__label">История</div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_name");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?=get_field("basic_history_info_full_name");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование на английском</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_short_name_en"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование на английском</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_full_name_en"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_inn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">КПП</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_kpp"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_ogrn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс Указанные в ЕГРЮЛ</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_address"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content"><a href="tel:<?= get_field("basic_history_info_phone"); ?>"><?= get_field("basic_history_info_phone"); ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_fax"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Электронная почта</div>
            <div class="disclosure-card__content"><a href="mailto:<?= get_field("basic_history_info_email"); ?>"><?= get_field("basic_history_info_email"); ?></a>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Официальный сайт</div>
            <div class="disclosure-card__content"><a href="/"><?= get_field("basic_history_info_site"); ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Социальные сети</div>
            <div class="disclosure-card__content"><a href="<?= get_field("basic_history_info_social"); ?>"><?= get_field("basic_history_info_social"); ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Банковские реквизиты</div>

            <div class="disclosure-card__content">Получатель: <?= get_field("basic_history_info_bank_recipient"); ?></div>
            <div class="disclosure-card__content">Расчетный счет: <?= get_field("basic_history_info_bank_rs"); ?></div>
            <div class="disclosure-card__content">Бик: <?= get_field("basic_history_info_bank_bic"); ?></div>
            <div class="disclosure-card__content">Корреспондентский счёт: <?= get_field("basic_history_info_bank_ks"); ?></div>
            <div class="disclosure-card__content">Наименования банка: <?= get_field("basic_history_info_bank_name"); ?></div>
            <div class="disclosure-card__content">ИНН: <?= get_field("basic_history_info_bank_inn"); ?></div>
            <div class="disclosure-card__content">КПП: <?= get_field("basic_history_info_bank_kpp"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата публикации</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_published"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_reason_public"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина Удаления</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_reason_del"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Перенесено в архив</div>
            <div class="disclosure-card__content"><?= get_field("basic_history_info_del_at"); ?></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

