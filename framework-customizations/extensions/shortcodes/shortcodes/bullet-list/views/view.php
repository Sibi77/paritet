<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>


<div class="pir-container">
    <ul class="list">
        <?php foreach($atts['bullet_list_add'] as $bulletlist):?>
            <li> <?= $bulletlist['bullet_list_name'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>


