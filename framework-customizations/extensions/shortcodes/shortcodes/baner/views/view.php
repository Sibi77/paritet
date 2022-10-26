<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="banner-section">
    <div class="banner-section__img">
        <img src="<?= $atts['banner_img']['url'] ?>" alt="">
    </div>
    <div class="container container-md">
        <div class="row">
            <div class="d-md-none d-xl-block col-xl-6  banner-section__item"></div>
            <div class="col-lg-12 col-xl-6 banner-section__item animation-scroll">
                <h2><?= $atts['banner_title']?></h2>
                <?= $atts['banner_desk']?>
                <a href="<?= $atts['banner_btn_link']?>" class="pir-btn"><?= $atts['banner_btn']?></a>
            </div>
        </div>
    </div>
</section>
