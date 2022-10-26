<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="pir-container" style="padding-bottom: 30px">
    <?php foreach($atts['manag_add'] as $manag):?>

        <div class="pir-table__text">
            <h3><?= $manag['manag_name'] ?></h3>
            <span><?= $manag['bar_list_link'] ?></span>
        </div>

    <?php endforeach; ?>


</div>
