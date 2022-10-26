<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-why-us">
    <div class="container container-md">
        <h2 class="pir-title"><?= $atts['why_us_title'] ?></h2>
        <div class="pir-why-us__wrap">
            <?php foreach($atts['why_us_add'] as $why):?>
                <div class="pir-why-us__item">
                    <h3 class="pir-why-us__title"><?= $why['why_us_list_title'] ?></h3>
                    <ul class="pir-why-us__list">
                        <?php foreach($why['why_us_add_list'] as $item):?>
                            <li><?= $item['why_us_list']?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
