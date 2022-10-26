<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<ul class="advantages-col">
    <?php foreach($atts['icon_list_add'] as $iconlist):?>
        <li>
            <img src="<?= $iconlist['icon_list_icon']['url'] ?>" alt="">
            <?= $iconlist['icon_list_name'] ?>
        </li>
    <?php endforeach; ?>
</ul>



