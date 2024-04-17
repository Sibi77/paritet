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
        <h1 class="pir-title-h1"><?= get_field('basic_history_title') ?></h1>
            <div class="disclosure-card__label">История</div>



        <?php if(!get_field("basic_history_info_name") == null || !get_field("basic_history_info_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Краткое наименование</div>
                <div class="disclosure-card__content">
                 <?= get_field("basic_history_info_name")?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("basic_history_info_full_name") == null || !get_field("basic_history_info_full_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Полное наименование</div>
                <div class="disclosure-card__content">
                    <?=get_field("basic_history_info_full_name");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("basic_history_info_short_name_en") == null || !get_field("basic_history_info_short_name_en") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Краткое наименование на английском</div>
                <div class="disclosure-card__content">
                  <?= get_field("basic_history_info_short_name_en");?>
                </div>
            </div>
        <?php endif; ?>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование на английском</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_full_name_en") == null || get_field("basic_history_info_full_name_en") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_full_name_en");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_inn") == null || get_field("basic_history_info_inn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_inn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">КПП</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_kpp") == null || get_field("basic_history_info_kpp") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_kpp");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_ogrn") == null || get_field("basic_history_info_ogrn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_ogrn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс Указанные в ЕГРЮЛ</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_address") == null || get_field("basic_history_info_address") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_address");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_phone") == null || get_field("basic_history_info_phone") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_phone");
                }
                ?>
            </div>
        </div>
        <?php if(!get_field("basic_history_info_fax") == null || !get_field("basic_history_info_fax") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Факс</div>
                <div class="disclosure-card__content">
                   <?=get_field("basic_history_info_fax");?>
                </div>
            </div>
        <?php endif; ?>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Электронная почта</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_email") == null || get_field("basic_history_info_email") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_email");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Официальный сайт</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_site") == null || get_field("basic_history_info_site") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_site");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Социальные сети</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_social") == null || get_field("basic_history_info_social") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_social");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Банковские реквизиты</div>

            <div class="disclosure-card__content">Получатель:
                <?php if (get_field("basic_history_info_bank_recipient") == null || get_field("basic_history_info_bank_recipient") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_recipient");
                }
                ?>
            </div>
            <div class="disclosure-card__content">Расчетный счет:
                <?php if (get_field("basic_history_info_bank_rs") == null || get_field("basic_history_info_bank_rs") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_rs");
                }
                ?>
            </div>
            <div class="disclosure-card__content">Бик:
                <?php if (get_field("basic_history_info_bank_bic") == null || get_field("basic_history_info_bank_bic") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_bic");
                }
                ?>
            </div>

            <div class="disclosure-card__content">Корреспондентский счёт:
                <?php if (get_field("basic_history_info_bank_ks") == null || get_field("basic_history_info_bank_ks") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_ks");
                }
                ?>
            </div>
            <div class="disclosure-card__content">Наименования банка:
                <?php if (get_field("basic_history_info_bank_name") == null || get_field("basic_history_info_bank_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_name");
                }
                ?>
            </div>
            <div class="disclosure-card__content">ИНН:
                <?php if (get_field("basic_history_info_bank_inn") == null || get_field("basic_history_info_bank_inn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_inn");
                }
                ?>
            </div>
            <div class="disclosure-card__content">КПП:
                <?php if (get_field("basic_history_info_bank_kpp") == null || get_field("basic_history_info_bank_kpp") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_bank_kpp");
                }
                ?>
            </div>
        </div>
        <?php if(!get_field("basic_history_info_reason_del") == null || !get_field("basic_history_info_reason_del") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина Удаления</div>
                <div class="disclosure-card__content">
                    <?= get_field("basic_history_info_reason_del");?>
                </div>
            </div>
        <?php endif; ?>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_published") == null || get_field("basic_history_info_published") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_published");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_history_info_del_at") == null || get_field("basic_history_info_del_at") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_history_info_del_at");
                }
                ?>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>

