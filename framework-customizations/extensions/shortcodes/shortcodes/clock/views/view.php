<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="pir-container">
    <div class="about-company__clock">
        <div class="about-company__clock-left">
            <?= $atts['clock_title']?>
        </div>
        <div class="about-company__clock-right">

            <?php foreach($atts['clock_add'] as $clock):?>
                <p><?= $clock['clock_time'] ?></p>
            <?php endforeach; ?>

        </div>
    </div>
</div>
