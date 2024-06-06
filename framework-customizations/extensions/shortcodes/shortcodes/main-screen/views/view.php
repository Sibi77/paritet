<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!--bg code for admin: style="background-image: url(<?= $atts['main_screen_bg']['url'] ?>)-->
<section class="main-screen">
    <div class="pir-carousel">
        <div class="container container-md">
            <div class="pir-carousel__wrap">
                <div class="pir-carousel__item-wrap owl-carousel">
                    <?php foreach($atts['main_screen_slide'] as $screen):?>
                        <div class="pir-carousel__item">
                            <h2 class="pir-carousel__title"><?= $screen['title'] ?></h2>
                            <p class="pir-carousel__desk">
                                <?= $screen['desk'] ?>
                            </p>
                            <a class="pir-btn" href="<?= $screen['link_btn'] ?>"><?= $screen['btn'] ?></a>

                        </div>

                    <?php
                        if(isset($screen['name'])){
                          echo  $screen['name'] ;
                        }
                        ?>
                    <?php endforeach; ?>
                </div>
                <div class="pir-carousel__info">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/Pir-logo.svg" alt="logo">
                    <h1><?= $atts['info']?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main-screen__additional-nav">
        <?php foreach($atts['main_screen_additional_nav'] as $nav):?>
            <a href="<?= $nav['link_btn'] ?>" class="pir-secondary-btn"><?= $nav['btn'] ?></a>
        <?php endforeach; ?>
    </div>
    <a href="#pir-services" class="pir-scroll-arrow bonce"></a>
</section>