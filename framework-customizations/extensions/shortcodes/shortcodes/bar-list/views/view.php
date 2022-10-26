<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="pir-disclosure">
    <div class="pir-container">
        <ul class="pir-disclosure__list">
            <?php foreach($atts['bar_list_add'] as $bars):?>
                <li>
                    <a href="<?= $bars['bar_list_link'] ?>">
                        <?= $bars['bar_list_name'] ?>
                        <span class="pir-disclosure__list-label"><?= $bars['bar_list_price'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</section>

