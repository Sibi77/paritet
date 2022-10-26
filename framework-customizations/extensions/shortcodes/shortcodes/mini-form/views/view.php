<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/**
 * @var int $form_id
 * @var string $submit_button_text
 * @var array $extra_data
 */
?>

<form action="#" class="pir-mini-form">
    <h3 class="pir-mini-form__title">Нужно новое АО?</h3>
    <label>
        Телефон
        <input id="mini-form" type="tel" name="user_phone"  placeholder="+7 (000) 000-00-00" required>
    </label>
    <button class="pir-btn">Заказать звонок</button>

</form>
