<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="table-company">
    <div class="pir-container">
        <!--        <h2 class="table-calc__title">Расчет стоимости регистрации АО с готовыми документами</h2>-->
        <table>
            <thead>
            <tr>
                <td>НАИМЕНОВАНИЕ</td>
                <td>регистрация</td>
                <td>Регион</td>
                <td>Налогообложение</td>
                <td>Цена, ₽</td>
                <td></td>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($atts['table_company'] as $company): ?>
                <tr>

                    <td class="table-company__name"><?= $company['table_company_name'] ?></td>
                    <td><?= $company['table_company_reg'] ?></td>
                    <td><?= $company['table_company_region'] ?></td>
                    <td><?= $company['table_company_tax'] ?></td>
                    <td><?= $company['table_company_price'] ?></td>
                    <td><a href="#form-request" class="table-order form-request <?php if ($company['table_company_check']) { ?> booking<?php } ?>" ><?php if ($company['table_company_check']) { ?> Заказано<?php } ?> <?php if (!$company['table_company_check']) { ?> Заказать<?php } ?></a></td>
                </tr>
            <?php endforeach; ?>


            </tbody>

        </table>
    </div>

    <div class="table-company__mobile">
        <?php foreach ($atts['table_company'] as $company): ?>

            <div class="table-company__mobile-item">
                <div class="table-company__mobile-wrap">
                    <div class="table-company__mobile-title">Наименование</div>
                    <div class="table-company__mobile-name table-company__mobile-val"><?= $company['table_company_name'] ?></div>
                    <div class="table-company__mobile-title">Дата регистрации</div>
                    <div class="table-company__mobile-name"><?= $company['table_company_reg'] ?></div>
                    <div class="table-company__mobile-title">Регион</div>
                    <div class="table-company__mobile-name"><?= $company['table_company_region'] ?></div>
                    <div class="table-company__mobile-title">Налогообложение</div>
                    <div class="table-company__mobile-name"><?= $company['table_company_tax'] ?></div>
                    <div class="table-company__mobile-title">Цена</div>
                    <div class="table-company__mobile-name"><?= $company['table_company_price'] ?> ₽</div>
                    <a href="#form-request" class="table-order form-request <?php if ($company['table_company_check']) { ?> booking<?php } ?>" ><?php if ($company['table_company_check']) { ?> Заказано<?php } ?> <?php if (!$company['table_company_check']) { ?> Заказать<?php } ?></a>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</section>
