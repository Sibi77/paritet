<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paritet
 */
?>
<!--pir section footer -->

<footer class="pir-footer">
    <div class="container container-md">
        <div class="pir-footer__desktop">
            <div class="pir-footer__d-item">
                <a href="/" class="pir-logo-wrap">
                    <span class="pir-logo"></span>
                    <span class="pir-logo__text">Паритет</span>
                </a>
                <ul>
                    <li>Акционерное общество «РДЦ ПАРИТЕТ»</li>
                    <li>Лицензия №10-000-1-00294 на осуществление
                        деятельности по ведению реестра
                    </li>
                    <li><a href="http://partad.ru/Information/PartadMembers/" target="_blank">Член ПАРТАД</a></li>
                    <li><a href="http://new.nfa.ru/associations/reestr-sro-nfa/" target="_blank">Член СРО НФА</a></li>
                </ul>
                <h4>Личный кабинет</h4>
                <a href="https://pir.paritet.ru/" target="_blank" class="pir-btn">Войти в кабинет</a>
            </div>
            <div class="pir-footer__d-item">
                <h4>Полезные страницы</h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'rules_prices',
                    'container_class' => false,
                    'container_id' => false,
                    'menu_id' => false,
                    'menu_class' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                    'item_spacing' => 'discard',
                ]);
                ?>
            </div>
            <div class="pir-footer__d-item">
                <h4>Основные разделы</h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_sections_site',
                    'container_class' => false,
                    'container_id' => false,
                    'menu_id' => false,
                    'menu_class' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                    'item_spacing' => 'discard',
                ]);
                ?>

            </div>

            <div class="pir-footer__d-item">

                <span class="custom-dropdown">
                    <select>
                        <option data-id="1">Центральный офис</option>
                        <option data-id="3">Филиал № 2</option>
                        <option data-id="2">Филиал № 4</option>
                        <option data-id="4">Московский обл. филиал</option>
                    </select>
                </span>

                <div class="pir-footer__office" data-id="1">
                    <a class="pir-footer__phone" href="tel:+74959947275" onclick="ym(61912495,'reachGoal','phone'); return true;">+7 (495) 994-72-75</a>
                    <a class="pir-footer__mail" href="mailto:office@paritet.ru">office@paritet.ru</a>

                    <div class="pir-footer__social d-flex w-100">
                        <a href="https://t.me/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/telegram.svg"
                                    alt="telegram"></a>
                        <a href="https://vk.com/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/vk.svg"
                                    alt="vk"></a>
                    </div>
                    <p>Адрес</p>
                    <p>Россия, 115114, г. Москва, 2-й Кожевнический переулок, дом 12, строение 2, подъезд 4, этаж 3 </p>
                    <p>Часы приема</p>
                    <p>Пн-Чт 10:00 - 16:00 <br>
                        Пт 10:00 -15:00 <br>
                        Cб, Вс - Выходной
                    </p>
                </div>
                <div class="pir-footer__office" data-id="2">
                    <a href="tel:8422417842" class="pir-footer__phone" onclick="ym(61912495,'reachGoal','phone'); return true;">(8422) 41-78-42</a>
                    <a href="tel:8422417847" class="pir-footer__phone" onclick="ym(61912495,'reachGoal','phone'); return true;">(8422) 41-78-42</a>
                    <a class="pir-footer__mail" href="mailto:office@paritet.ru">office@paritet.ru</a>
                    <div class="pir-footer__social d-flex w-100">
                        <a href="https://t.me/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/telegram.svg"
                                    alt="telegram"></a>
                        <a href="https://vk.com/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/vk.svg"
                                    alt="vk"></a>
                    </div>
                    <p>Адрес</p>
                    <p>Россия, 432071,
                        г. Ульяновск, ул. К. Маркса,
                        д.18, 2-ой этаж</p>
                    <p>Часы приема</p>
                    <p>9.00 – 17.45 (понедельник - четверг) <br>
                        9.00 - 16.30 (пятница, предпраздничные дни)<br>
                        Сб, Вс – выходной
                    </p>
                </div>
                <div class="pir-footer__office" data-id="3">
                    <a href="tel:4243366290" class="pir-footer__phone" onclick="ym(61912495,'reachGoal','phone'); return true;">(42433) 66-290</a>
                    <a href="tel:4243366291" class="pir-footer__phone" onclick="ym(61912495,'reachGoal','phone'); return true;">(42433) 66-291</a>
                    <a class="pir-footer__mail" href="mailto:office@paritet.ru">office@paritet.ru</a>
                    <div class="pir-footer__social d-flex w-100">
                        <a href="https://t.me/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/telegram.svg"
                                    alt="telegram"></a>
                        <a href="https://vk.com/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/vk.svg"
                                    alt="vk"></a>
                    </div>
                    <p>Адрес</p>
                    <p>Россия, 694620,
                        Сахалинская область, г. Холмск, ул. Победы, д. 16
                    </p>
                    <p>Часы приема</p>
                    <p>10.00 – 17.00 (понедельник – четверг) <br>
                        перерыв 12.30 - 14.00 <br>
                        10.00 – 16.00, перерыв 12.30 - 14.00 (пятница, предпраздничные дни) <br>
                        Сб, Вс – выходной

                    </p>
                </div>
                <div class="pir-footer__office" data-id="4">
                    <a href="tel:+79919884313" class="pir-footer__phone" onclick="ym(61912495,'reachGoal','phone'); return true;">+7-991-988-43-13</a>
                    <a class="pir-footer__mail" href="mailto:office@paritet.ru">office@paritet.ru</a>
                    <div class="pir-footer__social d-flex w-100">
                        <a href="https://t.me/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/telegram.svg"
                                    alt="telegram"></a>
                        <a href="https://vk.com/paritetrdc" target="_blank"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/vk.svg"
                                    alt="vk"></a>
                    </div>
                    <p>Адрес</p>
                    <p>141701, Московская область, г.о. Долгопрудный, г. Долгопрудный, Лихачевский проезд, д. 8, помещ. LI, офис 401-3
                    </p>
                    <p>Часы приема</p>
                    <p>ПН-ЧТ 11.00 - 15.00<br>
                        Пт, предпраздничные дни – 11.00-15.00 <br>
                        Сб, Вс – выходной


                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="pir-footer__сopyright-d">
        <div class="container container-md">
            <span> © 1995–2022, АО «РДЦ ПАРИТЕТ»</span>
        </div>
    </div>
</footer>
<!-- end pir section footer -->
<!-- end footer.html-->
<!-- start html_close.html-->


<div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
    <div class="modal__dialog">
        <div class="modal__content text-center">
            <img src="<?php bloginfo('template_directory'); ?>/img/icons/paritet.svg" alt="">
            <a href="" class="modal__close ">

            </a>

        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
    document.addEventListener('wpcf7mailsent', function sendMail(event) {
        if ('2838' == event.detail.contactFormId) {
            gtag('event', 'send', {
                'event_category': 'formapopup',
                'event_action': 'Submit'
            });
            ym(61912495, 'reachGoal', 'collectCall');
        }
    }, false);

    $('.fw_form_fw_form').on('submit', function () {
        if ($(this).valid() && $('#phone').val().length != 0 && $("#phone").intlTelInput("isValidNumber")) {
            $.ajax({
                type: 'POST',
                success: function (responce) {
                    ym(61912495, 'reachGoal', 'send-form');
                    return true;
                },
            });
        } else {
            return false;
        }

        return false;

    });


</script>
</body>
</html>
