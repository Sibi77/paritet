<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<div class="pir-container">
    <div class="tariff-prices">
        <h2 class="pir-content__title"><?= $atts['price_title'] ?></h2>
        <?php foreach($atts['price_add'] as $price):?>
            <div class="tariff-prices__item"><span><?= $price['price_price'] ?></span><?= $price['price_desk'] ?></div>
        <?php endforeach; ?>
    </div>
</div>