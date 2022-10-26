<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="pir-container">
    <div class="pir-contacts">
        <?php foreach($atts['contact_block'] as $contacts):?>
        <?php $i?>
            <div class="pir-contacts__wrap" id="branch<?=$i; $i++;?>">
                <h2 class="pir-contacts__title"><?= $contacts['contact_title']?></h2>
                <div class="pir-contacts__info">
                    <address><?= $contacts['contact_address']?></address>
                    <div class="pir-contacts__desk pir-content p1">
                        <?= $contacts['contact_desk']?>
                    </div>
                    <div class="about-company__clock">
                        <div class="about-company__clock-left">
                            <?= $contacts['clock_title']?>
                        </div>
                        <div class="about-company__clock-right">

                            <?php foreach($contacts['clock_add'] as $clock):?>
                                <p><?= $clock['clock_time'] ?></p>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="pir-contacts__map">

                    <?= $contacts['contact_map']?>
                </div>


            </div>
        <?php endforeach; ?>






    </div>

</div>
