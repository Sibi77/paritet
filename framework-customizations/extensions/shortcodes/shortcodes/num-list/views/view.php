<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<div class="pir-container">
    <ol class="num-list">
        <?php foreach($atts['num_list_add'] as $numlist):?>
            <li> <?= $numlist['num_list_name'] ?></li>
        <?php endforeach; ?>
    </ol>
</div>


