<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="mini-banner">
    <div class="pir-container">
        <h2 class="mini-banner__title"><?= $atts['mini_banner_title']?></h2>
        <div class="mini-banner__desk">
            <?= $atts['mini_banner_desk']?>
        </div>
        <a href="#form-request" class="mini-banner__btn form-request"><?= $atts['mini_banner_btn']?></a>
    </div>
</section>