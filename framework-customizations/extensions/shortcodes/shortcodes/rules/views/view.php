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


                </tr>

                </thead>
                <tbody>

                 <?php


                 rules_regulations();


                 $args = array(
                     'cat'      => 63,
                     'tag' => 'Published',
                     'posts_per_page' => -1

                 );
                 query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                 while (have_posts()) : the_post();?>
                 <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">
                     <td>
                         <img src="//localhost/wp-content/uploads/2020/03/pdf.svg" alt="doc">
                         <?php the_title(); ?>
                     </td>
                     <td>14.02.2023	</td>
                     <td>01.04.2023 </td>
<!--                     <td>--><?php //= get_field("published"); ?><!--</td>-->
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

