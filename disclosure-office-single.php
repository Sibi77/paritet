<?php
/*
Template Name: office_single
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
        <h1 class="pir-title-h1">Филиалы и представительства</h1>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Адрес</div>
            <div class="disclosure-card__content"><?= get_field("office_address"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Телефон</div>
            <div class="disclosure-card__content"><?= get_field("office_phone"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Факс</div>
            <div class="disclosure-card__content"><?= get_field("office_fax"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Руководитель филиала</div>
            <div class="disclosure-card__content"><?= get_field("office_head"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("office_pub_reason"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Созданно</div>
            <div class="disclosure-card__content"><?= get_field("office_createdAt"); ?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("office_publishedAt"); ?></div>
        </div>
    </div>
    <div class="pir-container">
        <h2 class="pir-content__title">История изменений</h2>
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
                        $id =  get_field("office_parent_id");
                        officeHistory();
                        //                            $category_name_history = get_field("doc_cat_name_history");
//                        securitiesIssuerHistory($category_name, $section_name);
                        global $post;

                        if ($id === null) {
                            $myposts = get_posts([
                                'tag' => 0
                            ]);
                        } else{
                            $myposts = get_posts( [
                                'posts_per_page' => -1,
                                'category_name' => 'offices_history',
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }



                        foreach( $myposts as $post ){setup_postdata( $post ); ?>
                            <?php
                            ?>
                            <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                <td><?php the_field("history_office_address") ?></td>
                                <td><?php the_field("history_office_publishedAt") ?></td>
                                <td><?php the_field("history_office_deletedAt") ?></td>

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

