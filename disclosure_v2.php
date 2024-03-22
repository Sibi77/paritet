<?php
/*
 * Template name: Раскрытие информации
 */
get_header(); ?>

<div class="pir-head-content disclosure-v2-bg">
    <div class="container">
        <div class="pir-head-content__wrap">



            <div class="pir-head-content__absolute">

                <h2>Раскрытие информации</h2>
                <p>Раскрытии информации о префессиональном участнике рынка ценных бумаг в соответствии с указанием ЦБ РФ №ХХХ от 00.00.0000, вступившем в действие с 01.04.2024.
                    Раскрытие информации в соответствии с ФЗ  22.04.1996 №39-Ф3 , действующим до 01.04.2024 смотрите <a
                            href="/disclosure/" style="color: #FA4811">здесь</a>.</p>
            </div>

        </div>
    </div>
</div>
<div class="pir-container">
    <div class="pir-breadcrumbs">
        <a class="home-page" href="/">Главная</a>
        <i class="angle-arrow-right"></i>Раскрытие информации
    </div>
</div>
<section class="pir-news-all">
    <div class="pir-news-container">
        <div class="pir-container">
            <ul class="pir-disclosure__list">
                <?php
                $get_sections = paritet_get_api('https://master.paritet.ru:9443/api/PirDisclosure/v2/Disclosures/References');
                ?>
                <?php foreach($get_sections->data->section as $item):?>
                    <li>
                        <a href="#">
                            <?= $item->value?>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>

