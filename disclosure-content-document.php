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

            <?php

            $media_doc = get_attached_media('');


            foreach ($media_doc as $url) {
            } ?>
            <h1 class="pir-title-h1" <?php if(!empty($url)) echo 'style="width: 625px"'; ?>><?= get_field("doc_title"); ?></h1>
            <?php if (!empty($url)) { ?>


                    <a href="<?= $url->guid; ?> " download class="disclosure-card__download-doc">
                        <div class="disclosure-card__title-doc">Скачать документ</div>
                        <div class="disclosure-card__title-file"><?= $url->post_name ?></div>
                        <div class="disclosure-card__icon-file">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="download">
                        </div>

                    </a>

                <?php

            }
            ?>

            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина публикации</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_publicationReason") == null || get_field("doc_publicationReason") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_publicationReason");
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Причина удаления</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_deleteReason") == null || get_field("doc_deleteReason") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_deleteReason");
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Источник</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_source") == null || get_field("doc_source") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_source");
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Дополнительная информация</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_description") == null || get_field("doc_description") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_description");
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Действует с</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_validFromDate") == null || get_field("doc_validFromDate") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo substr(get_field("doc_validFromDate"), 0, 10);
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Действует по</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_validToDate") == null || get_field("doc_validToDate") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo substr(get_field("doc_validToDate"), 0, 10);
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Создано</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_createdAt") == null || get_field("doc_createdAt") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_createdAt");
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Опубликовано</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_publishedAt") == null || get_field("doc_publishedAt") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_publishedAt");
                    }
                    ?>
                </div>
            </div>
            <div class="disclosure-card__item">
                <div class="disclosure-card__header">Удалено</div>
                <div class="disclosure-card__content">
                    <?php if (get_field("doc_deletedAt") == null || get_field("doc_deletedAt") == '') {
                        echo '<span class="api-undefined">Не определено</span>';
                    } else {
                        echo get_field("doc_deletedAt");
                    }
                    ?>
                </div>
            </div>
            <div class="pir-table" style="padding-bottom: 0">
                <h2 class="pir-content__title"">История изменений</h2>
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

                                <td>Удалено</td>

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
                            } else {
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
                                        <a class="pir-table-api"
                                           href="<?php the_permalink(); ?>"><?php the_field("history_doc_title") ?></a>
                                    </td>
                                    <td><?php echo substr(get_field("history_doc_publishedAt"), 0, 10) ?></td>
                                    <td><?php echo substr(get_field('history_doc_deletedAt'),0,10)  ?></td>

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

