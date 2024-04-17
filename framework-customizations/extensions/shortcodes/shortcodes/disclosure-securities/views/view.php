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
                    <td>дата регистрации</td>
                    <td>Опубликован</td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('officials', 'Officials');
                securitiesIssuer('IssuesOfSecurities','issues_securities', 'securities_history');

                $args = array(
                    'category_name' => 'issues_securities',
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
                            <a class="pir-table-api" href="<?php the_permalink(); ?>"><?= get_field("issuerrr_title"); ?></a>
                        </td>
                        <td><?= substr(get_field("issuer_registration_date"),0,10) ; ?></td>
                        <td><?= substr(get_field("issuer_published_at"),0,10); ?></td>
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




