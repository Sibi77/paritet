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


        <?php if(!get_field("transfer_short_name") == null || !get_field("transfer_short_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Краткое наименование</div>
                <div class="disclosure-card__content">
                   <?=get_field("transfer_short_name");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("transfer_full_name") == null || !get_field("transfer_full_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Полное наименование</div>
                <div class="disclosure-card__content">
                  <?=get_field("transfer_full_name");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("transfer_inn") == null || !get_field("transfer_inn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ИНН</div>
                <div class="disclosure-card__content">
                  <?=get_field("transfer_inn");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("transfer_ogrn") == null || !get_field("transfer_ogrn") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ОГРН</div>
                <div class="disclosure-card__content">
                   <?=get_field("transfer_ogrn");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("transfer_address") == null || !get_field("transfer_address") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Адресс указанный в ЕГРЮЛ</div>
                <div class="disclosure-card__content">
                  <?= get_field("transfer_address");?>
                </div>
            </div>
        <?php endif; ?>


        <?php if(!get_field("transfer_phone") == null || !get_field("transfer_phone") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Телефон</div>
                <div class="disclosure-card__content">
                  <?=get_field("transfer_phone");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("transfer_fax") == null || !get_field("transfer_fax") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ФАКС</div>
                <div class="disclosure-card__content">
                   <?=get_field("transfer_fax");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("transfer_published") == null || !get_field("transfer_published") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("transfer_published"),0,10);?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("transfer_reason_public") == null || !get_field("transfer_reason_public") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина публикации</div>
                <div class="disclosure-card__content">
                    <?=get_field("transfer_reason_public");?>
                </div>
            </div>
        <?php endif; ?>


        <?php if(!get_field("transfer_published") == null || !get_field("transfer_published") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                   <?=get_field("transfer_published");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("transfer_delAt") == null || !get_field("transfer_delAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                   <?=get_field("transfer_delAt")?>
                </div>
            </div>
        <?php endif; ?>

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
                            <td>Перенесено в архив</td>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $id =  get_field("transfer_parent_id");
                        $transfer_cat = get_field('transfer_cat_name');
                        $transfer_sections = get_field('transfer_cat_sections');
//                        transferAgentsHistory($transfer_cat,$transfer_sections);
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
                                <td><?php echo substr(get_field("history_transfer_deletedAt"), 0,10); ?></td>

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

