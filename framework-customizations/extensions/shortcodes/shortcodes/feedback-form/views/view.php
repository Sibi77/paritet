<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="pir-feedback d-flex" id="form-request">
    <div class="container">
        <div class="row">
            <h2 class="pir-title w-100 text-center"><?= $atts['form_title']?></h2>
            <span class="w-100 text-center"><?= $atts['form_subtitle']?></span>
            <form action="<?php bloginfo('template_directory') ;?>/mail.php" method="POST" class="form">
                <div class="pir-feedback__wrap">
                    <label for="name">Фамилия и Имя</label>
                    <input id="name" type="text" name="user_name" required>
                </div>

                <div class="pir-feedback__wrap">
                    <label for="phone">Телефон</label>
                    <input id="phone" type="tel" name="user_phone" placeholder="+7 (000) 000-00-00" required>
                </div>

                <div class="pir-feedback__wrap">
                    <label for="question">Ваш вопрос</label>
                    <textarea name="user_question" id="question" cols="30" rows="10" required></textarea>
                    <p class="pir-feedback__agreement">
                        <?= $atts['form_personal_data']?>
                    </p>
                </div>

                <button type="submit" class="pir-btn"><?= $atts['form_btn']?></button>
            </form>
        </div>
    </div>
</section>
