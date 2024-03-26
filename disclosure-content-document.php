<?php
/*
Template Name: documents
Template Post Type: post, documents
 */
get_header();
?>
<div class="pir-container">
    <div class="no-section">
        <div class="pir-breadcrumbs">
            <?php true_breadcrumbs(); ?>
        </div>
    </div>
</div>
<section class="disclosure-card">
    <div class="pir-container">
        <div class="disclosure-card__wrap">
            <h1 class="pir-title-h1"><?= get_field("doc_title"); ?></h1>
            <?php

            $media_doc = get_attached_media('');


            foreach ($media_doc as $url) {
            } ?>

            <?php if (!empty($url)) { ?>
                <a href="<?= $url->guid; ?>" class="disclosure-card__download-doc">
                    <div class="disclosure-card__title-doc">Скачать документ</div>
                    <div class="disclosure-card__title-file"><?= $url->post_name ?></div>
                    <div class="disclosure-card__icon-file">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="download">
                    </div>

                </a>
                <?php
            }
            ?>

        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Дополнительная информация</div>
            <div class="disclosure-card__content"><?= get_field("doc_more_info"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Действует с</div>
            <div class="disclosure-card__content"><?= get_field("doc_valid"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Действительный до..</div>
            <div class="disclosure-card__content"><?= get_field("doc_valid_to"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Причина публикации</div>
            <div class="disclosure-card__content"><?= get_field("doc_reason_public"); ?></div>
        </div>
        <div class="disclosure-card__item">

            <div class="disclosure-card__header">Опубликовано</div>
            <div class="disclosure-card__content"><?= get_field("doc_publish"); ?></div>
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
                            $id = get_field("doc_parent_id");

                            $category_name_history = get_field("doc_cat_name_history");
                            $sections_name_history = get_field("doc_section_name_history");
                            global $post;
                            disclosure_doc_history($sections_name_history, $category_name_history);
                            if ($id === null) {
                                $myposts = get_posts([
                                    'tag' => 0,
                                ]);
                            } else{
                                $myposts = get_posts([
                                    'posts_per_page' => -1,
                                    'category_name' => $category_name_history,
                                    'post_type' => 'post',
                                    'tag' => $id,
                                ]);
                            }

                            foreach ($myposts as $post) {
                                setup_postdata($post); ?>
                                <tr>
                                    <td>
                                        <a class="pir-table__download" href="<?php the_permalink(); ?>"><?php the_field("doc_history_title") ?></a>
                                    </td>
                                    <td><?php the_field("doc_history_publish") ?></td>
                                    <td><?php the_field("doc_history_deleted_at") ?></td>

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

