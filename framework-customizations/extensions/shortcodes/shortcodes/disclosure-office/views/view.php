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
                    <td>Телефон</td>
                    <td>Опубликовано</td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('officials', 'Officials');
                office();
                $args = array(
                    'category_name' => 'offices',
                    'tag' => 'Published',
                    'posts_per_page' => -1

                );
                query_posts($args);
                while (have_posts()) : the_post(); ?>

                    <tr>
                        <td >
                            <a href="<?php the_permalink(); ?>"> <?= get_field("office_title"); ?></a>
                        </td>
                        <td><?= get_field("office_phone"); ?></td>
                        <td><?= get_field("office_publishedAt"); ?></td>
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




