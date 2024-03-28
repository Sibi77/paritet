<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */


?>

<div class="pir-table">
    <div class="pir-container">
        <div class="table-calc__tab-mob">
            <table class="pir-table__table">
                <thead>
                <tr>
                    <td>НАИМЕНОВАНИЕ</td>
                    <td>ИНН</td>
                    <td>Опубликовано</td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('base_info', 'Main');
                disclosureBasicInfo();

                $args = array(
                    'category_name' => 'base_info',
                    'tag' => 'Published',
                    'posts_per_page' => -1

                );
                query_posts($args);
                while (have_posts()) : the_post(); ?>

                    <tr>
                        <td >
                            <a class="pir-table-api" href="<?php the_permalink(); ?>"><?= get_field("basic_info_title"); ?></a>
                        </td>
                        <td><?= get_field("basic_info_inn"); ?></td>
                        <td><?= substr(get_field("basic_info_published"),0,10); ?></td>
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




