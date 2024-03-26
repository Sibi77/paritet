<?php
/*
Template Name: Securities
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
        <h1 class="pir-title-h1"><?= get_field("issuerrr_name"); ?></h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Эмитент</div>
            <div class="disclosure-card__content"><?= get_field("issuerrr_name"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации АО</div>
            <div class="disclosure-card__content"><?= get_field("issuer_registration_date"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Вид ценной бумаги</div>
            <div class="disclosure-card__content"><?= get_field("issuer_security_type"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Категория ценной бумаги</div>
            <div class="disclosure-card__content"><?= get_field("issuer_security_category"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Код гос. регистрации (ГРН).</div>
            <div class="disclosure-card__content"><?= get_field("issuer_registration_number"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ISIN код</div>
            <div class="disclosure-card__content"><?= get_field("issuer_isin_code"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата регистрации выпуска.</div>
            <div class="disclosure-card__content"><?= get_field("issuer_registration_date"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата аннулирования выпуска</div>
            <div class="disclosure-card__content"><?= get_field("issuer_cancellation_date"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Номинальная стоимость.</div>
            <div class="disclosure-card__content"><?= get_field("issuer_denomination"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Количество размещено</div>
            <div class="disclosure-card__content"><?= get_field("issuer_issue_volume"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Сумма выпуска по номиналу</div>
            <div class="disclosure-card__content"><?= get_field("issuer_issue_amount"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создан</div>
            <div class="disclosure-card__content"><?= get_field("issuer_created_at"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("issuer_publication_reason"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликованно</div>
            <div class="disclosure-card__content"><?= get_field("issuer_published_at"); ?></div>
        </div>
    </div>
    <div class="pir-container">
        <h2 class="pir-content__title"">История изменений</h2>
        <div class="pir-table" style="padding-bottom: 0">
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

                            <td>Перенесено в архив</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $id =  get_field("issuerrr_parent_id");
                        $section_name =  get_field("security_section_name");
                        $category_name =  get_field("security_category_name");
                        //                            $category_name_history = get_field("doc_cat_name_history");
                        securitiesIssuerHistory($category_name, $section_name);
                        global $post;

                        if ($id === null) {
                            $myposts = get_posts([
                                'tag' => 0
                            ]);
                        } else{
                            $myposts = get_posts( [
                                'posts_per_page' => -1,
                                'category_name' => $category_name,
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }



                        foreach( $myposts as $post ){setup_postdata( $post ); ?>
                            <?php
                            ?>
                            <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                <td><?php the_field("history_issuer_name") ?></td>
                                <td><?php the_field("history_issuer_publishedAt") ?></td>
                                <td><?php the_field("history_issuer_deletedAt") ?></td>

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

