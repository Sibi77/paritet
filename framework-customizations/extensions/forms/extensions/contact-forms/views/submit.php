<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var int $form_id
 * @var string $submit_button_text
 * @var array $extra_data
 */
?>
<p class="pir-feedback__agreement">
    Отправляя данные, даю согласие на обработку персональных данных в соответствии с ФЗ № 152-ФЗ «О персональных данных»
</p>
<div class="form-btn-wrpap">
    <button type="submit"
            class="pir-btn pir-btn-submit"
            onsubmit="return (ValidPhone())"
            onclick="ym(61912495,'reachGoal','send-button'); return true;">
            <?php echo esc_attr( $submit_button_text ) ?>
    </button>
</div>