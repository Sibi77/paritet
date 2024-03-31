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
            <?php true_breadcrumbs();?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">
        <h1 class="pir-title-h1"><?=get_field("basic_info_title")?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_reason_public") == null || get_field("basic_info_reason_public") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_reason_public");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина Удаления</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_reason_del") == null || get_field("basic_info_reason_del") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_reason_del");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_source") == null || get_field("basic_info_source") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_source");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_name") == null || get_field("basic_info_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_full_name") == null || get_field("basic_info_full_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_full_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование на английском</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_short_name_en") == null || get_field("basic_info_short_name_en") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_short_name_en");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование на английском</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_full_name_en") == null || get_field("basic_info_full_name_en") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_full_name_en");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_inn") == null || get_field("basic_info_inn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_inn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">КПП</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_kpp") == null || get_field("basic_info_kpp") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_kpp");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_ogrn") == null || get_field("basic_info_ogrn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_ogrn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс Указанные в ЕГРЮЛ</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_address") == null || get_field("basic_info_address") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_address");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_phone") == null || get_field("basic_info_phone") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_phone");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_fax") == null || get_field("basic_info_fax") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_fax");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Электронная почта</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_email") == null || get_field("basic_info_email") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_email");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Официальный сайт</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_site") == null || get_field("basic_info_site") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_site");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Социальные сети</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_social") == null || get_field("basic_info_social") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_social");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Банковские реквизиты</div>

            <div class="disclosure-card__content">Получатель:
                <?php if (get_field("basic_info_bank_recipient") == null || get_field("basic_info_bank_recipient") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_recipient");
                }
                ?>
            </div>
            <div class="disclosure-card__content">Расчетный счет:
                <?php if (get_field("basic_info_bank_rs") == null || get_field("basic_info_bank_rs") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_rs");
                }
                ?>
            </div>
            <div class="disclosure-card__content">Бик:
                <?php if (get_field("basic_info_bank_bic") == null || get_field("basic_info_bank_bic") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_bic");
                }
                ?>
            </div>

            <div class="disclosure-card__content">Корреспондентский счёт:
                <?php if (get_field("basic_info_bank_ks") == null || get_field("basic_info_bank_ks") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_ks");
                }
                ?>
            </div>
            <div class="disclosure-card__content">Наименования банка:
                <?php if (get_field("basic_info_bank_name") == null || get_field("basic_info_bank_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_name");
                }
                ?>
            </div>
            <div class="disclosure-card__content">ИНН:
                <?php if (get_field("basic_info_bank_inn") == null || get_field("basic_info_bank_inn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_inn");
                }
                ?>
            </div>
            <div class="disclosure-card__content">КПП:
                <?php if (get_field("basic_info_bank_kpp") == null || get_field("basic_info_bank_kpp") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_bank_kpp");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_createAt") == null || get_field("basic_info_createAt") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_createAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_published") == null || get_field("basic_info_published") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_published");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if (get_field("basic_info_del_at") == null || get_field("basic_info_del_at") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("basic_info_del_at");
                }
                ?>
            </div>
        </div>


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

                            <td>Удалено</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        disclosureBasicInfoHistory('base_info_history');
                        $id =  get_field("basic_info_parent_id");
                        //                            $category_name_history = get_field("doc_cat_name_history");
                        //                            issuerHistoryPost('history');
                        global $post;

                        if ($id === null) {
                            $myposts = get_posts([
                                'tag' => 0
                            ]);
                        } else{
                            $myposts = get_posts( [
                                'posts_per_page' => -1,
                                'category_name' => 'base_info_history',
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }



                        foreach( $myposts as $post ){setup_postdata( $post ); ?>
                            <?php
                            ?>
                            <tr  >
                                <td>
                                    <a class="pir-table-api" href="<?php the_permalink(); ?>"> <?php the_field("basic_history_title") ?></a>
                                   </a></td>
                                <td><?php echo substr(get_field("basic_history_info_published"),0,10) ?></td>
                                <td> <?php echo substr(get_field("basic_history_info_del_at"),0,10)?></td>

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

