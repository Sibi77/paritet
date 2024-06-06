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

        <h1 class="pir-title-h1"><?= get_field("issuerrr_title"); ?></h1>


        <?php if(!get_field("issuerrr_name") == null || !get_field("issuerrr_name") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Эмитент</div>
                <div class="disclosure-card__content">
                   <?=get_field("issuerrr_name");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_jsc_registration_date") == null || !get_field("issuer_jsc_registration_date") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата регистрации АО</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("issuer_jsc_registration_date"),0,10) ;?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("issuer_security_type") == null || !get_field("issuer_security_type") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Вид ценной бумаги</div>
                <div class="disclosure-card__content">
                   <?= get_field("issuer_security_type");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("issuer_security_category") == null || !get_field("issuer_security_category") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Категория ценной бумаги</div>
                <div class="disclosure-card__content">
                 <?=get_field("issuer_security_category");?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("issuer_registration_number") == null || !get_field("issuer_registration_number") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Код гос. регистрации (ГРН).</div>
                <div class="disclosure-card__content">
                    <?=get_field("issuer_registration_number");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_isin_code") == null || !get_field("issuer_isin_code") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">ISIN код</div>
                <div class="disclosure-card__content">
                    <?=get_field("issuer_isin_code");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_registration_date") == null || !get_field("issuer_registration_date") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата регистрации выпуска.</div>
                <div class="disclosure-card__content">
                   <?=substr(get_field("issuer_registration_date"),0,10) ;?>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!get_field("issuer_cancellation_date") == null || !get_field("issuer_cancellation_date") =='') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата аннулирования выпуска</div>
                <div class="disclosure-card__content">
                  <?= substr(get_field("issuer_cancellation_date"),0,10) ;?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_published_at") == null || !get_field("issuer_published_at") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дата раскрытия</div>
                <div class="disclosure-card__content">
                    <?=substr(get_field("issuer_published_at"),0,10);?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_publication_reason") == null || !get_field("issuer_publication_reason") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина публикации</div>
                <div class="disclosure-card__content">
                    <?=get_field("issuer_publication_reason");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_published_at") == null || !get_field("issuer_published_at") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                   <?=get_field("issuer_published_at");?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!get_field("issuer_deleteAt") == null || !get_field("issuer_deleteAt") == '') : ?>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                   <?=get_field("issuer_deleteAt");?>
                </div>
            </div>
        <?php endif; ?>

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
                            <td>Перенесено в архив</td>
                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $id =  get_field("issuerrr_parent_id");
//                        $section_name =  get_field("security_section_name");
                        $category_name =  get_field("security_category_name");
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
                                'category_name' => $category_name,
                                'post_type' => 'post',
                                'order'    => 'DESC',
                                'tag' => $id,
                            ] );
                        }



                        foreach( $myposts as $post ){setup_postdata( $post ); ?>

                            <tr>
                                <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?php the_field("history_issuer_title") ?></a></td>
                                <td><?php echo substr(get_field("history_issuer_deletedAt"),0,10) ?></td>
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

