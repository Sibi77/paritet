<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<div class="popup-header">
    <div class="container">
        <div class="popup-header__wrap">
            <a href="<?= $atts['alert_link']?>"><?= $atts['alert_text']?></a>
            <button class="popup-header__close" type="button"></button>
        </div>
    </div>
</div>