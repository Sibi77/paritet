<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="tile-price">
    <div class="container container-md">
        <div class="tile-price__wrap">
            <?php foreach ($atts['tile_price'] as $tilePrice): ?>
                <?php if ($tilePrice['link1']) { ?>
                    <a href="<?= $tilePrice['link1'] ?>" class="tile-price__item">

                        <?php if ($tilePrice['label']) { ?>
                            <i class="tile-price__label"><?= $tilePrice['label'] ?></i>
                        <?php } ?>
                        <div class="tile-price__wrap-price">
                            <span><?= $tilePrice['price'] ?></span>
                            <?php if ($tilePrice['old_price']) { ?>
                                <p class="tile-price__old-price"><?= $tilePrice['old_price'] ?></p>
                            <?php } ?>

                        </div>
                        <h3>
                            <?= $tilePrice['title'] ?>
                        </h3>
                        <ul class="tile-price__list">
                            <?php foreach ($tilePrice['list'] as $tileList): ?>
                                <li><?= $tileList['name_list'] ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <object class="tile-price__link-wrap">
                            <?php if ($tilePrice['link1']) { ?>
                                <a href="<?= $tilePrice['link1'] ?>" class="pir-btn"><?= $tilePrice['btn1'] ?></a>
                            <?php } ?>
                            <?php if ($tilePrice['link2']) { ?>
                                <a href="<?= $tilePrice['link2'] ?>"
                                   class="pir-btn form-request"><?= $tilePrice['btn2'] ?></a>
                            <?php } ?>
                        </object>

                    </a>
                <?php } ?>
                <?php if ($tilePrice['link2']) { ?>
                    <a href="<?= $tilePrice['link2'] ?>" class="tile-price__item form-request">

                        <?php if ($tilePrice['label']) { ?>
                            <i class="tile-price__label"><?= $tilePrice['label'] ?></i>
                        <?php } ?>
                        <div class="tile-price__wrap-price">
                            <span><?= $tilePrice['price'] ?></span>
                            <?php if ($tilePrice['old_price']) { ?>
                                <p class="tile-price__old-price"><?= $tilePrice['old_price'] ?></p>
                            <?php } ?>

                        </div>
                        <h3>
                            <?= $tilePrice['title'] ?>
                        </h3>
                        <ul class="tile-price__list">
                            <?php foreach ($tilePrice['list'] as $tileList): ?>
                                <li><?= $tileList['name_list'] ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <object class="tile-price__link-wrap">
                            <?php if ($tilePrice['link1']) { ?>
                                <a href="<?= $tilePrice['link1'] ?>" class="pir-btn"><?= $tilePrice['btn1'] ?></a>
                            <?php } ?>
                            <?php if ($tilePrice['link2']) { ?>
                                <a href="<?= $tilePrice['link2'] ?>"
                                   class="pir-btn form-request"><?= $tilePrice['btn2'] ?></a>
                            <?php } ?>
                        </object>

                    </a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>



