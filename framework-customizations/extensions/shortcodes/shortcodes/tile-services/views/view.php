<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="pir-services" id="pir-services">
    <h2 class="pir-title text-center <?php if( is_front_page() ){echo "animation-scroll";} else {echo '';}?>"><?= $atts['services_title'] ?></h2>

    <div class="container-md container ">
        <div class="pir-services__wrap-item">
        <?php foreach($atts['services_tile'] as $tile):?>
            <div class="pir-services__wrap <?php if( is_front_page() ){echo "animation-scroll";} else {echo '';}?> ">


                <?php if($tile['label']){?>
                    <span class="services-label"><?= $tile['label']?></span>
                <?php } ?>


                <a href="<?= $tile['link'] ?>" class="pir-services__item d-flex flex-wrap justify-content-center text-center ">
                <span class="pir-services__icon">
                    <img src="<?= $tile['icon']['url'] ?>" alt="">
                </span>
                    <h3 class="pir-services__title"><?= $tile['title'] ?></h3>
                    <p class="pir-services__desk">
                        <?= $tile['desk'] ?>
                    </p>
                </a>
                <a href="<?= $tile['link'] ?>" class="pir-secondary-btn"><?= $tile['btn'] ?></a>
            </div>
        <?php endforeach; ?>

        </div>
        <?php if($atts['services_btn_all']){?>
            <div class="pir-services__all  justify-content-center">
                <a href="<?=$atts['services_btn_all_link']?>" class="pir-btn-white pir-btn animation-scroll">Посмотреть все услуги</a>
            </div>
        <?php } ?>
    </div>
</section>