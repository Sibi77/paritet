<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="title-icon_wrap-2">
    <a href="#form-request" class="form-request">
        <img src="<?= $atts['title_icon_img']['url']?>" alt="" >
        <h3><?= $atts['title_icon']?></h3>
    </a>
</div>
