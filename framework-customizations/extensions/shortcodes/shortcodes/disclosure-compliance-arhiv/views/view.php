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
                    <td>НАИМЕНОВАНИЕ ДОКУМЕНТА</td>
                    <td>Действует</td>
                    <td>Опубликовано</td>
                    <td></td>
                </tr>

                </thead>
                <tbody>

                <?php
                checkPost('non_compliance', 'NonComplianceRequirements');
                disclosure_documents('NonComplianceRequirements', 'non_compliance', 'non_compliance_history');


                $args = array(
                    'category_name' => 'non_compliance',
                    'tag' => 'Deleted',
                    'posts_per_page' => -1

                );
                query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                while (have_posts()) : the_post(); ?>

                    <tr>

                        <td>  <a class="pir-table__download" href="<?php the_permalink(); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/img/icons/pdf.svg" alt="Документ">
                                <?= get_field("doc_title"); ?></a></td>
                        <td><?= get_field("doc_valid"); ?></td>
                        <td><?= get_field("doc_publish"); ?></td>
                        <td>
                            <?php
                            $media = get_attached_media('');
                            ?>
                            <?php foreach ($media as $url) {
                            } ?>
                            <a href="<?= $url->guid; ?>" download><img src="<?php bloginfo('template_directory'); ?>/img/icons/download.svg" alt="Скачать документ"></a>
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

