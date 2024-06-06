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
            <table class="pir-table__table">
                <thead>
                <tr>
                    <td class="pir-table-width">НАИМЕНОВАНИЕ</td>
                    <td>Дата раскрытия</td>
                    <td></td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('regulatory_organizations', 'MembershipInSelfRegulatoryOrganizations');
//                disclosure_documents('MembershipInSelfRegulatoryOrganizations', 'regulatory_organizations', 'regulatory_organizations_history');


                $args = array(
                    'category_name' => 'regulatory_organizations',
                    'tag' => 'Deleted',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',

                );
                query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                while (have_posts()) : the_post(); ?>
                    <?php

                    $media = get_attached_media('');
                    ?>

                    <tr>

                        <td>

                            <a class="pir-table-api" href="<?php the_permalink(); ?>">
                                <?php foreach($media as $url):?>

                                    <?php if($url->post_mime_type == 'application/msword') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/doc.svg" alt="Документ doc">
                                    <?php endif; ?>
                                    <?php if($url->post_mime_type == 'application/pdf') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/pdf.svg" alt="Документ pdf">
                                    <?php endif; ?>
                                    <?php if($url->post_mime_type == 'application/zip') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/zip.svg" alt="Архив zip">
                                    <?php endif; ?>
                                    <?php if($url->post_mime_type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/xls.svg" alt="Документ xls">
                                    <?php endif; ?>

                                    <?php if($url->post_mime_type == 'image/jpeg') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/jpg.svg" alt="Картинка jpg">
                                    <?php endif; ?>

                                    <?php if($url->post_mime_type == 'image/png') : ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/png.svg" alt="Картинка png">
                                    <?php endif; ?>

                                <?php endforeach; ?>

                                <?= get_field("doc_title"); ?>
                            </a>
                        </td>
                        <td><?= substr(get_field("doc_publishedAt"), 0, 10); ?></td>
                        <td style="text-align: center">
                            <?php if(!empty($media)) { ?>
                                <?php foreach($media as $url):?>
                                    <a href="<?= $url->guid; ?>" download><img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" class="api-download" alt="Скачать документ"></a>
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
                    <td style="text-align: center" colspan="3">Архивные записи отсутствуют</td>
                </tr>';
                }
                ?>

                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>

