<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  * Эмитенты на обслуживании
  */

?>


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
                        инн
                    </td>
                    <td>Дата раскрытия</td>


                </tr>

                </thead>
                <tbody>

                 <?php

//                 checkPost('transfer_agents','TransferAgents');
//                 transferAgents('IssuersWithPartOfTheRegistrarFunctions', 'func_issuer','func_issuer_history');
//                 issuerHistoryPost();

                 $args = array(
                     'posts_per_page' => -1,
                     'category_name' => 'func_issuer',
                     'tag' => 'Published',
                     'meta_key' => 'publishedAt_fix',
                     'orderby' => 'meta_value',
                     'order' => 'DESC',


                 );
                 query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                 while (have_posts()) : the_post();?>
                     <tr>
                         <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?= get_field("transfer_title"); ?></a></td>
                         <td><?= get_field("transfer_inn"); ?></td>
                         <td><?= substr(get_field("transfer_published"),0,10) ?></td>
                     </tr>



                     <!--здесь выводится миниатюра записи-->
                 <?php endwhile;
                     wp_reset_query();
                 ?>
                 <?php
                 if (empty(query_posts($args))) {
                     echo '<tr>
                    <td style="text-align: center" colspan="3">Информация отсутствует</td>
                </tr>';
                 }
                 ?>

                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>

