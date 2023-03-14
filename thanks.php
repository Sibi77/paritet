<?php
/*
 * Template name: thanks
 */
get_header(); ?>
    <div class="pir-container">
        <div class="pir-breadcrumbs" style="padding-top: 100px">
            <a href=""></a>
            <?php true_breadcrumbs();?>
        </div>
    </div>
<section class="thanks">
    <div class="pir-container">
        <div class="thanks__wrap">
            <h1>Спасибо</h1>
            <p>за проявленный интерес</p>
            <img src="<?php bloginfo('template_directory') ;?>/img/icons/phone-la.svg" alt="phone">
            <p>Наш специалист перезвонит вам в течении 10 минут</p>
            <form>
                <input class="pir-btn" type="button" value="Назад"
                       onClick="history.back()">
            </form>
<!--            <a href="" type="button" class="pir-btn">Назад</a href="">-->
        </div>
    </div>
</section>
<?php get_footer(); ?>