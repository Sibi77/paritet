<?php
/*
Template Name: base info single
Template Post Type: post, base-info
 */
get_header();
?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i><?= get_field("full_name"); ?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">
        <h1 class="pir-title-h1">Основные сведения</h1>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_name");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content"><?=get_field("basic_info_full_name");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование на английском</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_short_name_en"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование на английском</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_full_name_en"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_inn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">КПП</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_kpp"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_ogrn"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс Указанные в ЕГРЮЛ</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_address"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content"><a href="tel:<?= get_field("basic_info_phone"); ?>"><?= get_field("basic_info_phone"); ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_fax"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Электронная почта</div>
            <div class="disclosure-card__content"><a href="mailto:<?= get_field("basic_info_email"); ?>"><?= get_field("basic_info_email"); ?></a>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Официальный сайт</div>
            <div class="disclosure-card__content"><a href="/"><?= get_field("basic_info_site"); ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Социальные сети</div>
            <div class="disclosure-card__content"><a href="<?= get_field("basic_info_social"); ?>"><?= get_field("basic_info_social"); ?></a></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Банковские реквизиты</div>

            <div class="disclosure-card__content">Получатель: <?= get_field("basic_info_bank_recipient"); ?></div>
            <div class="disclosure-card__content">Расчетный счет: <?= get_field("basic_info_bank_rs"); ?></div>
            <div class="disclosure-card__content">Бик: <?= get_field("basic_info_bank_bic"); ?></div>
            <div class="disclosure-card__content">Корреспондентский счёт: <?= get_field("basic_info_bank_ks"); ?></div>
            <div class="disclosure-card__content">Наименования банка: <?= get_field("basic_info_bank_name"); ?></div>
            <div class="disclosure-card__content">ИНН: <?= get_field("basic_info_bank_inn"); ?></div>
            <div class="disclosure-card__content">КПП: <?= get_field("basic_info_bank_kpp"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата публикации</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_published"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("basic_info_reason_public"); ?></div>
        </div>


        <?php if(!empty( get_field("basic_info_reason_del"))) {?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина Удаления</div>
                <div class="disclosure-card__content"><?= get_field("basic_info_reason_del"); ?></div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Перенесено в архив</div>
                <div class="disclosure-card__content"><?= get_field("basic_info_del_at"); ?></div>
            </div>
            <?php
        }
        ?>


    </div>
    <div class="pir-container">
        <h2 class="pir-content__title"">История изменений</h2>
        <div class="pir-table" style="padding-bottom: 0" >
            <div class="pir-container">
                <div class="table-calc__tab-mob">
                    <table class="pir-table__table" >
                        <thead>
                        <tr>
                            <td>
                                Наименование
                            </td>
                            <td>
                                Опубликовано
                            </td>

                            <td>Перенесено в архив</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        disclosureBasicInfoHistory('base_info_history');
                        $id =  get_field("basic_info_id");
                        //                            $category_name_history = get_field("doc_cat_name_history");
                        //                            issuerHistoryPost('history');
                        global $post;

                        $myposts = get_posts( [
                            'posts_per_page' => -1,
                            'category_name' => 'base_info_history',
                            'post_type' => 'post',
                            'order'    => 'DESC',
                            'tag' => $id,
                        ] );

                        foreach( $myposts as $post ){setup_postdata( $post ); ?>
                            <?php
                            ?>
                            <tr  style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                <td><?php the_field("basic_history_info_name") ?></a></td>
                                <td><?php the_field("basic_history_info_del_at") ?></td>
                                <td><?php the_field("basic_history_info_published") ?></td>

                            </tr>
                            <?php

                        }
                        if (empty($myposts)) {
                            echo '<tr>' . '<td>Нет истории</td>' . '</tr>';
                        }
                        wp_reset_postdata();
                        ?>


                        </tbody>
                    </table>
                    <div class="notfound">Ничего не найдено</div>
                </div>

            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>

