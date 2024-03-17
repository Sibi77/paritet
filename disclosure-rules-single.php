<?php
/*
Template Name: rules
Template Post Type: post, rules
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
        <div class="disclosure-card__wrap">
            <h1 class="disclosure-card__title"><?= get_field("rules_title"); ?></h1>
            <?php
            rules_history_post();
            $media_doc = get_attached_media('');


            foreach ($media_doc as $url) {
            } ?>
            <a href="<?= $url->guid; ?>" download class="disclosure-card__download-doc">
                <div class="disclosure-card__title-doc">Скачать документ</div>
                <div class="disclosure-card__title-file"></div>
                <div class="disclosure-card__icon-file">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="download">
                </div>

            </a>
            <?php
            ?>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Дополнительная информация</div>
            <div class="disclosure-card__content"><?= get_field("rules_more_info"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Действует с</div>
            <div class="disclosure-card__content"><?= get_field("rules_valid"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Действительный до..</div>
            <div class="disclosure-card__content"><?= get_field("rules_valid_to"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("rules_reason_public"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("rules_publish"); ?></div>
        </div>
        <div class="pir-table">
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

                                <td>Перенесено в архив</td>

                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            $id = get_field("rules_id");
                            global $post;

                            $myposts = get_posts([
                                'posts_per_page' => -1,
                                'category_name' => 'rules_history',
                                'post_type' => 'post',
                                'tag' => $id,
                            ]);

                            foreach ($myposts as $post) {
                                setup_postdata($post); ?>
                                <tr>
                                    <td><a class="pir-table__download" href="<?php the_permalink(); ?>"><?php the_field("rules_history_title") ?></a></td>
                                    <td><?php the_field("rules_history_publish") ?></td>
                                    <td><?php the_field("rules_history_deleted_at") ?></td>

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
    </div>
</section>


<?php get_footer(); ?>

