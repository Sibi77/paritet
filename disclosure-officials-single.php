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
        <h1 class="pir-title-h1"><?= get_field('officials_title');?></h1>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_pub_reason") == null || get_field("officials_pub_reason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_pub_reason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Причина Удаления</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_del_reason") == null || get_field("officials_del_reason") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_del_reason");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Источник</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_source") == null || get_field("officials_source") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_source");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">ФИО</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_fio") == null || get_field("officials_fio") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_fio");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Должность</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_position") == null || get_field("officials_position") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_position");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Дата избрания</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_date_election") == null || get_field("officials_date_election") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  substr(get_field("officials_date_election"),0,10);
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опыт работы</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_work_experience") == null || get_field("officials_work_experience") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_work_experience");
                }
                ?>
            </div>
        </div>

        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Создано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_created_at") == null || get_field("officials_created_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_created_at");
                }
                ?>
            </div>
        </div>
        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_published_at") == null || get_field("officials_published_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_published_at");
                }
                ?>
            </div>
        </div>



        <div class="disclosure-card__item">
            <div class="disclosure-card__header">Удалено</div>
            <div class="disclosure-card__content">
                <?php if(get_field("officials_del_at") == null || get_field("officials_del_at") == ''){
                    echo '<span class="api-undefined">Не определено</span>';
                }else{
                    echo  get_field("officials_del_at");
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
                                Опубликован
                            </td>

                            <td>Удален</td>

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
                            <tr>
                                <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?php the_field("history_officials_title") ?></a></a></td>
                                <td><?php echo substr(get_field("history_officials_published_at"),0,10) ?></td>
                                <td><?php echo substr(get_field("history_officials_deletedAt"),0,10) ?></td>

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

