<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */


?>
<!--<form id="filters">-->
<!--    <label><input type="radio" name="filter" value="inservice"  checked="checked"/> На обслуживании</label>-->
<!--    <label><input type="radio" name="filter" value="instorage" selected="selected" /> На хранении</label>-->
<!--    <label><input type="radio" name="filter" value="transferred"  /> Переданные</label>-->
<!---->
<!---->
<!--</form>-->

<div class="pir-table">
    <div class="pir-container">
        <div class="table-calc__tab-mob">
            <table class="pir-table__table" id="table_filter">
                <thead>
                <tr>
                      <td>
                         Наименование
                      </td>
                    <td>
                        инн
                    </td>
                    <td>Дата раскрытия</td>


                </tr>

                </thead>

                <tbody class="preload-disclosure" >
                <tr>
                    <td colspan="3"><span>Данные загружаются <span class="image-load"></span></span> </td>
                </tr>

                </tbody>
                <tbody class="pir_ajax_table">


                 <?php

                 $tag = get_term_by('slug', ' TransferredForStorage','post_tag');
                 $tag_id =  $tag->term_id;

                 $args = array(
                     'posts_per_page' => -1,
                     'category_name' => 'issuers',
                     'tag' => array('InService'),
//                     'tag__not_in' => array($tag_id),
                     'meta_key' => 'issuer_publishedAt_fix',
                     'orderby' => 'meta_value',
                     'order' => 'DESC',
                 );

                 query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                 while (have_posts()) : the_post();?>
<!--                 --><?php //$count = $GLOBALS['wp_query']->post_count;
                     ?>
                 <tr>
                     <td><a <?php post_class('pir-table-api') ?>  href="<?php the_permalink(); ?>"><?= get_field("issuer_title"); ?></a></td>
                     <td><?= get_field("issuer_inn"); ?></td>
                     <td><?= substr(get_field("issuer_publishedAt"),0,10) ; ?></td>
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
//                 ?>

                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>

