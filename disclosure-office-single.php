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

        <h1 class="pir-title-h1"><?= get_field('office_title');?></h1>



        <?php if(!get_field("office_address") == null || !get_field("office_address") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Адрес</div>
                <div class="disclosure-card__content">
                   <?=get_field("office_address");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("office_phone") == null || !get_field("office_phone") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Телефон</div>
                <div class="disclosure-card__content">
                 <?=get_field("office_phone");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("office_fax") == null || !get_field("office_fax") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Факс</div>
                <div class="disclosure-card__content">
                  <?=get_field("office_fax");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("office_head") == null || !get_field("office_head") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Руководитель филиала</div>
                <div class="disclosure-card__content">
               <?=get_field("office_head");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("office_publishedAt") == null || !get_field("office_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("office_publishedAt"),0,10);?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("office_pub_reason") == null || !get_field("office_pub_reason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина публикации</div>
                <div class="disclosure-card__content">
                    <?= get_field("office_pub_reason");?>
                </div>
            </div>
        <?php endif; ?>


        <?php if(!get_field("office_publishedAt") == null || !get_field("office_publishedAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                 <?=get_field("office_publishedAt");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("office_delAt") == null || !get_field("office_delAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                  <?=get_field("office_delAt");?>
                </div>
            </div>
        <?php endif; ?>


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
                            <tr>
                                <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?php the_field("history_office_title") ?></a></td>
                                <td><?php echo substr(get_field("history_office_deletedAt"),0,10) ?></td>

                            </tr>
                            <?php

                        }
                        if (empty($myposts)) {
                            echo '<tr>' . '<td colspan="2" style="text-align: center">Нет предыдущих версий раскрытия</td>' . '</tr>';
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

