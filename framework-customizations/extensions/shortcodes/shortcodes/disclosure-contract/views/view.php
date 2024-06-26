<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  * Правила и положения
  */

?>

<div class="pir-table">
    <div class="pir-container">
        <div class="table-calc__tab-mob">
            <table class="pir-table__table" id="table_filter">
                <thead>
                <tr>
                    <td>НАИМЕНОВАНИЕ</td>
                    <td>Действует с</td>
                    <td>Дата раскрытия</td>
                    <td></td>
                </tr>

                </thead>
                <tbody class="preload-disclosure">
                <tr>
                    <td colspan="3"><span>Данные загружаются <span class="image-load"></span></span> </td>
                </tr>

                </tbody>
                <tbody class="pir_ajax_table">

                <?php
                //                checkPost('contract', 'Contracts');
                //                disclosure_documents('Contracts', 'contract', 'contract_history');


                $args = array(
                    'category_name' => 'contract',
                    'tag' => 'Published',
                    'posts_per_page' => -1,
                    'meta_key' => 'doc_publish_fix',
                    'orderby' => 'meta_value',
                    'order' => 'DESC',

                );
                query_posts($args);
                while (have_posts()) : the_post(); ?>
                    <?php

                    $media = get_attached_media('');
                    ?>

                    <tr>

                        <td>

                            <a class="pir-table-api" href="<?php the_permalink(); ?>">
                                <?php foreach ($media as $url): ?>

                                    <?php if ($url->post_mime_type == 'application/msword') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/doc.svg"
                                             alt="Документ doc">
                                    <?php endif; ?>
                                    <?php if ($url->post_mime_type == 'application/pdf') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/pdf.svg"
                                             alt="Документ pdf">
                                    <?php endif; ?>
                                    <?php if ($url->post_mime_type == 'application/zip') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/zip.svg"
                                             alt="Архив zip">
                                    <?php endif; ?>
                                    <?php if ($url->post_mime_type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/xls.svg"
                                             alt="Документ xls">
                                    <?php endif; ?>

                                    <?php if ($url->post_mime_type == 'image/jpeg') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/jpg.svg"
                                             alt="Картинка jpg">
                                    <?php endif; ?>

                                    <?php if ($url->post_mime_type == 'image/png') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/png.svg"
                                             alt="Картинка png">
                                    <?php endif; ?>

                                <?php endforeach; ?>

                                <?= get_field("doc_title"); ?>
                            </a>
                        </td>
                        <td><?= substr(get_field("doc_validFromDate"), 0, 10); ?></td>
                        <td><?= substr(get_field("doc_publishedAt"), 0, 10); ?></td>
                        <td style="text-align: center">
                            <?php if (!empty($media)) { ?>
                                <?php foreach ($media as $url): ?>
                                    <a href="<?= $url->guid; ?>" download><img
                                                src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg"
                                                class="api-download" alt="Скачать документ"></a>
                                <?php endforeach; ?>

                                <?php
                            } ?>
                        </td>
                    </tr>


                    <!--здесь выводится миниатюра записи-->
                <?php endwhile;
                wp_reset_query();
                ?>

                <?php
                if (empty(query_posts($args))) {
                    echo '<tr>
                    <td style="text-align: center" colspan="4">Информация отсутствует</td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>

