<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="notification-covid">
    <div class="pir-container">
        <h2 class="notification-covid__title"><?= $atts['notification_title']?></h2>
        <p class="notification-covid__desk"><?= $atts['notification_desk']?></p>
    </div>
</section>