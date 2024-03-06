<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<?php
//$login = wpgetapi_endpoint( 'disclo_pir', 'test', array('debug' => false) );
//
//// Обращаемся к API
//
//$login = json_decode($login, true);
//
//$login1 = $login['jwtToken'];
//$url = 'https://c5cb7e3fb0cf43.lhr.life/api/PirDisclosure/v2/Disclosures/Full';
//$args = array(
//    'headers' => array(
//        'Authorization' => 'Bearer '.$login1
//    )
//);
//
//$response =  wp_remote_get( $url, $args );
//$response = wp_remote_retrieve_body( $response ) ;



?>
<div class="pir-table">
    <div class="pir-container">
        <div class="table-calc__tab-mob">

            <table class="pir-table__table">
                <thead>
                <tr>

<!--                    --><?php //fw_print($type) ?>
<!--                    --><?php //foreach ($type['Valute'] as $vak): ?>
<!--                        <td>--><?php //= $vak['Name'] ?><!--</td>-->
<!--                    --><?php //endforeach; ?>


                </tr>

                </thead>
                <tbody>

                <?php foreach ($atts['table_body'] as $tablebody): ?>
                    <tr>
                        <?php foreach ($tablebody['table_row'] as $tablerow): ?>


                            <?php if ($tablerow['table_file']) { ?>
                                <td>
                                    <a class="pir-table__download" href="<?= $tablerow['table_file']['url'] ?>">
                                        <img src="<?= $tablerow['table_icon']['url'] ?>" alt="doc">
                                        <?= $tablerow['table_name'] ?>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if (!$tablerow['table_file']) { ?>
                                <td>
                                    <?= $tablerow['table_name'] ?>
                                </td>
                            <?php } ?>

                        <?php endforeach; ?>

                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <div class="notfound">Ничего не найдено</div>
        </div>

    </div>
</div>

