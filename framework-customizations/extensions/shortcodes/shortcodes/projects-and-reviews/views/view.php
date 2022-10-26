<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-projects">
    <h2 class="pir-title"><?= $atts['review_and_project_section_title'] ?></h2>
    <div class="container container-md">
       <div class="pir-projects__wrap owl-carousel">
           <?php foreach($atts['review_and_project'] as $reviewProject):?>
               <a href="<?= $reviewProject['review_and_project_btn_link'] ?>" class="pir-projects__item">
                   <img class="pir-projects__logo" src="<?= $reviewProject['review_and_project_logo']['url'] ?>" alt="logo">
                   <h3 class="pir-projects__title"><?= $reviewProject['review_and_project_title'] ?></h3>
                   <p class="pir-projects__desk"><?= $reviewProject['review_and_project_desk'] ?></p>
                   <button class="pir-secondary-btn"><?= $reviewProject['review_and_project_btn_name'] ?></button>
               </a>
           <?php endforeach; ?>

       </div>
       <div class="bnt-container">
           <a href="<?= $atts['review_and_project_section_btn_link'] ?>" class="pir-btn pir-btn-white">
               <?= $atts['review_and_project_section_btn'] ?></a>
       </div>
    </div>
</section>