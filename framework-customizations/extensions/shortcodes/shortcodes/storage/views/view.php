<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  * Эмитенты на хранении
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
                    <td>опубликовано</td>


                </tr>

                </thead>
                <tbody>

                 <?php

                 issuerPost();
                 $tag = get_term_by('slug', 'Transferred','post_tag');
                 $tag_id =  $tag->term_id;
                 $args = array(
                     'category_name' => 'issuers',
                     'tag' => array('MovedToArchive', 'TransferredForStorage','Liquidated'),
                     'posts_per_page' => -1,
                     'orderby' => 'date',
                     'order' => 'ASC',
                     'tag__not_in' => array($tag_id)



                 );
                 query_posts($args); // вместо "5" указываем идентификатор вашей рубрики.
                 while (have_posts()) : the_post();?>
                 <tr>
                     <td><a class="pir-table-api" href="<?php the_permalink(); ?>"><?= get_field("issuer_title"); ?></a></td>
                     <td><?= get_field("issuer_inn"); ?></td>
                     <td><?= substr(get_field("issuer_publishedAt"),0,10) ; ?></td>
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

