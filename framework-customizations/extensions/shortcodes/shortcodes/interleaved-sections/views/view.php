<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<?php foreach($atts['interleaved_sections'] as $inter):?>
    <?php $i?>
    <section class="interleaved-sections"  id="interleaved-sections<?=$i; $i++;?>">
        <div class="pir-container container-md">
            <h3 class="interleaved-sections__title"><?=  $inter['interleaved_sections_title']?></h3>
            <div class="interleaved-sections__desk">
                <?=  $inter['interleaved_sections_desk']?>
            </div>
        </div>
    </section>
<?php endforeach; ?>

