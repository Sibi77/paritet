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
                    <td>НАИМЕНОВАНИЕ</td>
                    <td>Действует c</td>
                    <td>Опубликовано</td>
                    <td style="text-align: center">Скачать</td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('calculation_funds', 'CalculationOfOwnFunds');
                disclosure_documents('CalculationOfOwnFunds', 'calculation_funds', 'calculation_funds_history');


                $args = array(
                    'category_name' => 'calculation_funds',
                    'tag' => 'Published',
                    'posts_per_page' => -1

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

                                <?php endforeach; ?>

                                <?= get_field("doc_title"); ?>
                            </a>
                        </td>
                        <td><?= get_field("doc_validFromDate"); ?></td>
                        <td><?= get_field("doc_publishedAt"); ?></td>
                        <td style="text-align: center">
                            <?php if(!empty($media)) { ?>
                                <?php foreach($media as $url):?>
                                    <a href="<?= $url->guid; ?>" download><img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" class="api-download" alt="Скачать документ"></a>
                                <?php endforeach; ?>

                                <?php
                            } ?>
                            <?php if(empty($media)) { ?>
                                Отсуствует

                                <?php
                            }
                            ?>
                        </td>
                    </tr>



                    <!--здесь выводится миниатюра записи-->
                <?php endwhile;
                wp_reset_query();
                ?>


                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>

