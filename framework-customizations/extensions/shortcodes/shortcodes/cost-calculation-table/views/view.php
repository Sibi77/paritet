<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="table-calc">
    <div class="pir-container">
        <h2 class="table-calc__title">Расчет стоимости регистрации АО с готовыми документами</h2>
        <div class="table-calc__tab-mob">
            <table>
                <thead>
                <tr>
                    <td><label class="custom-checkbox-container">
                            <input type="checkbox" value="0" id="checkAll">
                            <span class="checkmark"></span>
                            <span class="table-calc__text">Наименование Услуги</span>
                        </label> </td>
                    <td>Цена, Р</td>
                    <td>Скидка, %</td>
                    <td>Сумма, Р</td>
                </tr>
                </thead>

                <tbody>
                <?php foreach($atts['calc_table_item'] as $calcTable):?>
                    <tr>
                        <td class="table-cac__val">
                            <label class="custom-checkbox-container">
                                <input class="calc-table__check" type="checkbox" value="">
                                <span class="checkmark"></span>
                                <span class="table-calc__text"> <?= $calcTable['calc_table_name'] ?></span>
                            </label>
                        </td>
                        <td class="table-calc__price"><?= $calcTable['calc_table_price'] ?></td>
                        <td class="table-calc__discount"><span><?= $calcTable['calc_table_discount'] ?>%</span></td>
                        <td class="table-calc__sum"></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td class="table-calc__total">Итого</td>
                    <td></td>
                    <td></td>
                    <td id="totalVal">0</td>
                </tr>
                </tbody>

            </table>
        </div>

        <a href="#form-request"  class="table-calc__btn form-request">Заказать регистрацию</a>
    </div>

</section>
