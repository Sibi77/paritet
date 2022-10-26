<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<aside class="additional-material">
    <h3><?php echo $atts['additional_materials_title'] ?></h3>
    <ul>

        <?php foreach($atts['additional_materials'] as $additionalMat):?>


            <li>
                <?php if(empty($additionalMat['additional_materials_link'])){?>
                    <?= $additionalMat['additional_materials_name'] ?>
                <?php }  ?>
                <?php if(!empty($additionalMat['additional_materials_link'])){?>
                    <a href="<?= $additionalMat['additional_materials_link'] ?>">
                        <?= $additionalMat['additional_materials_name'] ?>
                    </a>
                <?php }  ?>
            </li>
        <?php endforeach; ?>

    </ul>
</aside>

