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
                    <td>должность</td>
                    <td>Опубликован</td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('officials', 'Officials');
                officials();

                $args = array(
                    'category_name' => 'officials',
                    'tag' => 'Published',
                    'posts_per_page' => -1,
                    'meta_key' => 'publishedAt_fix',
                    'orderby' => 'meta_value',
                    'order' => 'DESC',

                );
                query_posts($args);
                while (have_posts()) : the_post(); ?>

                    <tr>
                        <td >
                            <a class="pir-table-api" href="<?php the_permalink(); ?>"><?= get_field("officials_fio"); ?></a>
                        </td>
                        <td><?= get_field("officials_position"); ?></td>
                        <td><?= substr(get_field("officials_published_at"),0,10); ?></td>
                    </tr>


                    <!--здесь выводится миниатюра записи-->
                <?php endwhile;
                wp_reset_query();
                ?>
                <?php
                if (empty(query_posts($args))) {
                    echo '<tr>
                    <td style="text-align: center" colspan="4">Пока нет записей</td>
                </tr>';
                }
                ?>

                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>




