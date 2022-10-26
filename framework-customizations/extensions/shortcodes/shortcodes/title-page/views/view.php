<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<div class="pir-head-content" style="background-image: url(<?= $atts['title_page_bg']['url'] ?>)">
    <div class="container container-md">
        <div class="pir-head-content__wrap">
            <h1><?= $atts['title_page_title'] ?></h1>
            <?= $atts['title_page_desk'] ?>
        </div>
    </div>
</div>
