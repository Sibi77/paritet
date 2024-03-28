<?php
/*
Template Name: transfer agents
Template Post Type: post, transfer_agents
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

        <h1 class="pir-title-h1"><?= get_field("transfer_title"); ?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_reason_public") == null || get_field("transfer_reason_public") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_reason_public");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_del_reason") == null || get_field("transfer_del_reason") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_del_reason");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_source") == null || get_field("transfer_source") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_source");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Краткое наименование</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_short_name") == null || get_field("transfer_short_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_short_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Полное наименование</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_full_name") == null || get_field("transfer_full_name") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_full_name");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ИНН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_inn") == null || get_field("transfer_inn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_inn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ОГРН</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_ogrn") == null || get_field("transfer_ogrn") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_ogrn");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адресс указанный в ЕГРЮЛ</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_address") == null || get_field("transfer_address") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_address");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_phone") == null || get_field("transfer_phone") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_phone");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФАКС</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_fax") == null || get_field("transfer_fax") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_fax");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_createAt") == null || get_field("transfer_createAt") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_createAt");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_published") == null || get_field("transfer_published") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_published");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if (get_field("transfer_delAt") == null || get_field("transfer_delAt") == '') {
                    echo '<span class="api-undefined">Не определено</span>';
                } else {
                    echo get_field("transfer_delAt");
                }
                ?>
            </div>
        </div>
    </div>
    <div class="pir-container">
        <h2 class="pir-content__title"">История изменений</h2>
        <div class="pir-table">
            <div class="pir-container">
                <div class="table-calc__tab-mob">
                    <table class="pir-table__table">
                        <thead>
                        <tr>
                            <td>
                                Наименование
                            </td>
                            <td>
                                Опубликовано
                            </td>

                            <td>удалено</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $id =  get_field("transfer_parent_id");
                        $transfer_cat = get_field('transfer_cat_name');
                        $transfer_sections = get_field('transfer_cat_sections');
                        transferAgentsHistory($transfer_cat,$transfer_sections);
                        global $post;
                        if ($id === null) {
                            $myposts = get_posts([
                                'tag' => 0,
                            ]);
                        } else{
                            $myposts = get_posts( [
                                'posts_per_page' => -1,
                                'category_name' => $transfer_cat,
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }


                        foreach( $myposts as $post ){setup_postdata( $post ); ?>
                            <tr>
                                <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?php the_field("history_transfer_title") ?></a></td>
                                <td><?php substr(the_field("history_transfer_published"),0,10);  ?></td>
                                <td><?php substr(the_field("history_transfer_deletedAt"), 0,10); ?></td>

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

