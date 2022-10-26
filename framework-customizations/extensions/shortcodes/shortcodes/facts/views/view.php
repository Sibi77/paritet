<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="facts">

    <div class="container container-md">

        <div class="facts__wrap owl-carousel">

            <a href="<?=$atts['facts_work']['0']['facts_work_link']?>" class="facts__item facts__work"
                 style="background-image: url(<?= $atts['facts_work']['0']['facts_work_bg']['url'] ?>)">
                <p><?= $atts['facts_work']['0']['facts_work_title'] ?></p>
                <span><?/*= $atts['facts_work']['0']['facts_work_year'] */?>27 лет</span>
                <div class="test-facts"></div>
            </a>

            <a href="<?= $atts['facts_online']['0']['link']?>" class="facts__item facts__online"
                 style="background-image: url(<?= $atts['facts_online']['0']['facts_online_bg']['url'] ?>)">
                <p><?= $atts['facts_online']['0']['facts_online_title'] ?></p>
                <span><?= $atts['facts_online']['0']['facts_online_desk'] ?></span>
                <div class="test-facts"></div>
            </a>

            <a href="<?= $atts['facts_project']['0']['facts_project_link']?>" class="facts__item facts__project"
                 style="background-image: url(<?= $atts['facts_project']['0']['facts_project_bg']['url'] ?>)">
                <p><?= $atts['facts_project']['0']['facts_project_num'] ?></p>
                <span><?= $atts['facts_project']['0']['facts_project_desk'] ?></span>
                <div class="test-facts"></div>
            </a>

        </div>
    </div>
</section>
