<?php
/*
Template Name: officials single
Template Post Type: post, officials
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
        <h1 class="pir-title-h1">Должностные лица</h1>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФИО</div>
            <div class="disclosure-card__content"><?= get_field("officials_fio");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Должность</div>
            <div class="disclosure-card__content"><?= get_field("officials_position");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата избрания</div>
            <div class="disclosure-card__content"><?= get_field("officials_date_election");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опыт работы</div>
            <div class="disclosure-card__content"><?= get_field("officials_work_experience");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина удаления</div>
            <div class="disclosure-card__content"><?= get_field("officials_del_reason");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("officials_pub_reason");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата создания</div>
            <div class="disclosure-card__content"><?= get_field("officials_created_at");?></div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("officials_published_at");?></div>
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
                        OfficialsHistory('officials_parent_id');
                        $id =  get_field("officials_id");
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
                                'category_name' => 'officials_history',
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }



                        foreach( $myposts as $post ){setup_postdata( $post ); ?>
                            <?php
                            ?>
                            <tr  style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                                <td><?php the_field("history_officials_fio") ?></a></td>
                                <td><?php the_field("history_officials_published_at") ?></td>
                                <td><?php the_field("history_officials_deletedAt") ?></td>

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

