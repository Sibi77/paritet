<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
$videoLink = $atts['pir_video_link']
?>

<section class="pir-video">

    <div class="pir-container">
        <h2 class="pir-video__title"><?= $atts['pir_video_title']?></h2>
        <div class="pir-video__wrap">
            <div class="pir-video__left">
                <div class="pir-video__video">
                    <?php echo do_shortcode($videoLink); ?>
                </div>
            </div>
            <div class="pir-video__right">
                <div class="pir-video__text">
                    <?= $atts['pir_video_text']?>
                </div>
                <?php if( !empty( $atts['pir_video_btn_link'] )): ?>
                    <a href="<?= $atts['pir_video_btn_link']?>" class="pir-btn pir-video__btn"> <?= $atts['pir_video_btn']?></a>
                    <?php endif; ?>

            </div>
        </div>
    </div>
</section>