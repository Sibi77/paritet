<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<ul class="advantages-col <?php if ($atts['list_col_icon_margin']) { ?> advantages-col-not-margin<?php } ?>">
    <?php foreach($atts['icon_list_add'] as $iconlist):?>
        <li>
            <img src="<?= $iconlist['icon_list_icon']['url'] ?>" alt="">
            <?= $iconlist['icon_list_name'] ?>
        </li>
    <?php endforeach; ?>
</ul>



