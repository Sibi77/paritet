<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-reviews">
    <?php foreach($atts['review'] as $reviews):?>
        <?php $i?>
        <div class="pir-reviews__item" id="reviews-single<?=$i; $i++;?>">
            <div class="pir-container container-md">
                <h2 class="pir-reviews__title"><?=  $reviews['review_title']?></h2>
                <div class="pir-reviews__wrap">
                    <div class="pir-reviews__desk pir-content pir-p1">
                        <?=  $reviews['review_desk']?>
                    </div>
                    <div class="pir-reviews__sidebar">
                        <h3 class="pir-reviews__sidebar-title">
                            <?php if(!empty($reviews['review_sidebar_logo']['url'])){?>
                                <img src="<?=$reviews['review_sidebar_logo']['url']?>" alt="">
                            <?php } ?>
                           <?=  $reviews['review_sidebar_title']?></h3>
                        <a class="pir-reviews__doc" href="<?= $reviews['review_and_project_btn_link']['url']?>"><img
                                    src="<?= $reviews['review_and_project_btn_link_screen']['url']?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<?php foreach($atts['review'] as $reviews):?>


<?php endforeach; ?>