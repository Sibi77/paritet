<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="additional-serv" style="background-color: <?= $atts['additional_serv_bg']?>">
    <div class="pir-container">
        <h2 class="pir-content__title"> <?= $atts['additional_serv_title']?></h2>

     
        <ul class="additional-serv__list">
            <?php foreach($atts['additional_serv'] as $additionalServ):?>


                <li>
                    <?php if(empty($additionalServ['additional_serv_link'])){?>
                        <?= $additionalServ['additional_serv_name'] ?>
                    <?php }  ?>
                    <?php if(!empty($additionalServ['additional_serv_link'])){?>
                        <a href="<?= $additionalServ['additional_serv_link'] ?>">
                            <?= $additionalServ['additional_serv_name'] ?>
                        </a>
                    <?php }  ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

