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
                        Регион
                    </td>
                    <td>
                        инн
                    </td>
                    <td>опубликовано</td>


                </tr>

                </thead>
                <tbody>

                 <?php


                 checkPost();
                 issuerPost();
                 issuerHistoryPost();

                 $args = array(
                     'cat'      => 18,
                     'tag' => 'Published',
                     'posts_per_page' => -1

                 );
                 query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                 while (have_posts()) : the_post();?>
                 <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                     <td><?= get_field("short_name"); ?></td>
                     <td><?= get_field("address"); ?></td>
                     <td><?= get_field("inn"); ?></td>
                     <td><?= get_field("published"); ?></td>
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

