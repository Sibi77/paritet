<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<div class="pir-container">
    <div class="pir-content">
        <h1 class="pir-title-h1<?php if ($atts['title_h1_padding']) { ?> pir-title-h1-not-padding<?php } ?>">
            <?= $atts['title_h1'] ?>
        </h1>

        <?php if ($atts['title_h1_desk']) { ?>
            <div class="pir-content pir-p1" style="margin-bottom: 60px">
                <?= $atts['title_h1_desk'] ?>
            </div>
        <?php } ?>

    </div>
</div>