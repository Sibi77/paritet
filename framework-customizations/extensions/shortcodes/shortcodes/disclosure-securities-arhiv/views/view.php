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
                    <td>Опубликовано</td>
                </tr>

                </thead>
                <tbody>

                <?php
//                checkPost('officials', 'Officials');
                securitiesIssuer('IssuesOfSecurities','issues_securities', 'issues_securiti_history');

                $args = array(
                    'category_name' => 'issues_securities',
                    'tag' => 'Deleted',
                    'posts_per_page' => -1

                );
                query_posts($args);
                while (have_posts()) : the_post(); ?>

                    <tr style="cursor: pointer" onclick="document.location = '<?php the_permalink(); ?>'">

                        <td >
                            <?= get_field("issuerrr_name"); ?>
                        </td>
                        <td><?= get_field("issuer_registration_date"); ?></td>
                        <td><?= get_field("issuer_published_at"); ?></td>
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




