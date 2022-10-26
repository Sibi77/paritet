<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<div class="pir-container">
    <div class="pir-content pir-p1 <?php if ($atts['not_last_margin']) { ?> not-last-margin<?php } ?>">
        <?= $atts['desk'] ?>
    </div>
</div>