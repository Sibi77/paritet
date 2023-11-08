<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="pir-video">

    <div class="pir-container">
        <h2 class="pir-video__title"><?= $atts['pir_video_title']?></h2>
        <div class="pir-video__wrap">
            <div class="pir-video__left">
                <div class="pir-video__video">
                    <?php echo do_shortcode( '[presto_player id=6187]' ); ?>
                </div>
            </div>
            <div class="pir-video__right">
                <div class="pir-video__text">
                    <p >
                        Быстро и профессионально зарегистрируем новое АО и выпуск ценных бумаг. Никаких госпошлин, очередей и ожидания.
                    </p>
                    <p>Вам не нужно тратить время на посещение Банка России и ФНС</p>
                </div>
                <a href="#" class="pir-btn pir-video__btn">Зарегистрировать АО</a>
            </div>
        </div>
    </div>
</section>