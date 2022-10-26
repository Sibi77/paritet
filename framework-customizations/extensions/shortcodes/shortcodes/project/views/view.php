<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-projects text-center">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column   w-100">
                <h2 class="pir-title animation-scroll"> <?= $atts['project_title'] ?></h2>
                <div class="pir-projects__wrap d-flex flex-wrap animation-scroll owl-carousel">

                    <?php foreach($atts['project_add'] as $project):?>
                        <div class="pir-projects__items">
                            <div class="pir-projects__header">
                                <h3 class="pir-projects__title"> <?= $project['project_add_title'] ?></h3>
                                <?= $project['project_desk'] ?>
                            </div>
                            <p class="pir-projects__quote">
                                <?= $project['project_reviews'] ?>
                            </p>
                            <div class="pir-projects__user d-flex align-items-center">
                                <div class="pir-projects__user-photo">
                                    <img src="<?= $project['project_photo']['url'] ?>" alt="user-photo">
                                </div>
                                <div class="pir-projects__user-wrap">
                                    <div class="pir-projects__user-name"><?= $project['project_name'] ?></div>
                                    <div class="pir-projects__user-position">  <?= $project['project_position'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <!--                <a href="#" class=" pir-btn pir-btn-white " >Рассказать о проблеме. Мы поможем!</a>-->
            </div>
        </div>
    </div>
</section>
 
