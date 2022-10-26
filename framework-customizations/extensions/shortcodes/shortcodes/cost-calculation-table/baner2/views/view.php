<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-el-services">
    <div class="container-md pir-container">
        <h2 class="pir-title">Онлайн сервисы</h2>
        <div class="pir-el-services__item animation-scroll">
            <div class="pir-el-services__img">
                <img s src="<?= $atts['banner_img']['url'] ?>" alt="pir">
            </div>
            <div class="pir-el-services__list">
                <h2 class="pir-el-services__title">Кабинет Эмитента</h2>
                <ul>
                    <li>Доступ к счетам эмитента 24/7</li>
                    <li>Статистика реестра</li>
                    <li>Самостоятельное создание собрания</li>
                    <li>Электронное голосование и трансляция</li>
                    <li>Электронный обмен документами</li>
                    <li>Расчеты с бухгалтерией</li>
                </ul>
                <a href="./lichnyj-kabinet-emitenta/" class="pir-btn">Открыть кабинет</a>
            </div>
        </div>
        <div class="pir-el-services__item animation-scroll">
            <div class="pir-el-services__img">
                <img src="<?= $atts['banner_img1']['url'] ?>" alt="pir">
            </div>
            <div class="pir-el-services__list">
                <h2 class="pir-el-services__title">Кабинет Владельца</h2>
                <ul>
                    <li>Доступ к своим счетам 24/7</li>
                    <li>Информация о проведенных операциях</li>
                    <li>Электронное голосование</li>
                    <li>Архив и итоги собраний</li>
                    <li>Публичная информация эмитента</li>
<!--                    <li>Электронный обмен документами</li>-->
                    <li>Расчеты с бухгалтерией</li>
                </ul>
                <a href="./lichnyj-kabinet-akczionera/" class="pir-btn">Открыть кабинет</a>
            </div>
        </div>

    </div>
</section>
