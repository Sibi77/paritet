<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paritet
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Cache-Control" content="private">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-180x180.png">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <meta name="google-site-verification" content="oZGZKlE7z8-U5pM7cxQPVH-ns-aQ9fxrM2cKv17U6SE"/>
    <meta name="yandex-verification" content="a28474b19f40a45f"/>
    <?php wp_head(); ?>
</head>
<div class="swipe-menu"></div>

<body>

<div class="swipe-overlay"></div>
<!-- end html_open.html-->

<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48455276-1"></script>-->
<!--<script>-->
<!--    window.dataLayer = window.dataLayer || [];-->
<!---->
<!--    function gtag() {-->
<!--        dataLayer.push(arguments);-->
<!--    }-->
<!---->
<!--    gtag('js', new Date());-->
<!--    gtag('config', 'UA-48455276-1');-->
<!--</script>-->

<!-- Yandex.Metrika counter-->

<!--<script type="text/javascript" >-->
<!--    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};-->
<!--        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})-->
<!--    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");-->
<!---->
<!--    ym(61912495, "init", {-->
<!--        clickmap:true,-->
<!--        trackLinks:true,-->
<!--        accurateTrackBounce:true,-->
<!--        webvisor:true-->
<!--    });-->
<!--</script>-->
<!--<noscript><div><img src="https://mc.yandex.ru/watch/61912495" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->


<div class="pir-modal-success mini-form-modal">
    <div class="pir-modal-success__head">
        <p>
            <span>Спасибо</span>
            за проявленный интерес
        </p>
    </div>
    <div class="pir-modal-success__body">
        <img src="<?php bloginfo('template_directory'); ?>/img/icons/telephone-call.svg" alt="phone">
        <p>Наш специалист перезвонит вам в течении 10 минут</p>
        <button type="button" class="pir-btn">Закрыть</button>
    </div>
</div>
<header class="pir-head">
    <div class="pir-nav-wrap  <?php if (is_front_page()) {
    } else {
        echo "pir-nav-not-fixed";
    } ?> ">
        <div class="container container-md">
            <div class="d-flex justify-content-between align-items-center pir-nav">
                <a class="pir-hamburger" href="#">
                    <div class="pir-hamburger__inner"></div>
                    <span class="pir-hamburger__open">Меню</span>
                </a>
                <a href="/" class="pir-logo-wrap">
                    <span class="pir-logo <?php if (is_front_page()) {
                        echo "pir-logo-new-color";
                    } ?>"></span>
                    <span class="pir-logo__text">Паритет</span>
                </a>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu' => '',
                    'container' => 'nav',
                    'container_class' => 'pir-nav-desk',
                    'container_id' => false,
                    'menu_id' => false,
                    'menu_class' => 'pir-menu-desk',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                    'item_spacing' => 'discard',
                ]);
                ?>

                <div class="pir-nav__contact-wrap">
                    <a href="tel:+74959947275" class="pir-menu__top-phone" onclick="ym(61912495,'reachGoal','phone'); return true;">+7 (495) 994 72 75</a>
                    <button type="button" class="pir-search-site__btn pir-search-site__btn-mob"></button>
                    <a href="tel:+74959947275" class="pir-phone-call" onclick="ym(61912495,'reachGoal','phone'); return true;"><img src="<?php bloginfo('template_directory'); ?>/img/icons/phone-call.svg" alt="mobile-phone"></a>
                    <button type="button" class="pir-search-site__btn pir-search-site__btn-desk"></button>

                    <div class="pir-search-site">


                        <div class="pir-search-site__wrap">
                            <?php echo do_shortcode( '[searchandfilter id="6743"]' );?>
                            <img class="pir-search-site__close" src="<?php bloginfo('template_directory'); ?>/img/icons/close-searhc.svg" alt="">
                            <div class="pir-search-site__ajax-result">

                            </div>
                            <div class="pir-search-site__link-wrap">
                                <a href="/all-services/konsultaczionnye-uslugi/registracziya-ao/">Регистрация АО</a>
                                <a href="/all-services/joint-stock-companies/vedenie-reestra-akczionerov/">Ведение реестра</a>
                                <a href="/all-services/konsultaczionnye-uslugi/reorganizacziya-i-likvidacziya-yur-licz/">Реорганизация</a>
                                <a href="/all-services/uslugi-dlya-ooo/registracziya-ooo/">Регистрация OOО</a>
                                <a href="/all-services/konsultaczionnye-uslugi/likvidacziya-kompanij/">Ликвидация юр лиц</a>
                                <a href="/all-services/vladelczam-czennyh-bumag/uslugi-eskrou-agenta/">Услуги Эскроу агента</a>
                            </div>

                        </div>


                    </div>


                    <a href="https://pir.paritet.ru/" target="_blank" class="pir-btn-sign-in-d">Вход в кабинет</a>
                </div>


            </div>
            <div class="pir-search-site-mob">
                <div class="pir-search-site-mob__header">
                    <button class="pir-search-site-mob__close pir-search-site__btn-mob"></button>
                    <span>ПОИСК ПО САЙТУ</span>
                </div>
                <div class="pir-container">
                    <div class="pir-search-site-mob__search">
                        <?php echo do_shortcode( '[searchandfilter id="6743"]' );?>
                        <img class="pir-search-site-mob__icon" src="<?php bloginfo('template_directory'); ?>/img/icons/search.svg" alt="search">
                    </div>
                    <h2 class="pir-search-site-mob__title">Быстрые ссылки</h2>
                    <div class="pir-search-site-mob__fast-link">
                        <a href="/all-services/konsultaczionnye-uslugi/registracziya-ao/">Регистрация АО</a>
                        <a href="/all-services/joint-stock-companies/vedenie-reestra-akczionerov/">Ведение реестра</a>
                        <a href="/all-services/konsultaczionnye-uslugi/reorganizacziya-i-likvidacziya-yur-licz/">Реорганизация</a>
                        <a href="/all-services/uslugi-dlya-ooo/registracziya-ooo/">Регистрация OOО</a>
                        <a href="/all-services/konsultaczionnye-uslugi/likvidacziya-kompanij/">Ликвидация юр лиц</a>
                        <a href="/all-services/vladelczam-czennyh-bumag/uslugi-eskrou-agenta/">Услуги Эскроу агента</a>
                    </div>
                </div>


            </div>
            <nav class="pir-menu">
                <div class="pir-menu__head">
                    <a class="pir-hamburger" href="#">
                        <div class="pir-hamburger__inner"></div>
                        <span class="pir-hamburger__close">Закрыть</span>
                    </a>
                    <a href="/" class="pir-logo-wrap">
                        <span class="pir-logo"></span>
                        <span class="pir-logo__text">Паритет</span>
                    </a>
                    <a href="tel:+74959947275" class="pir-menu__top-phone" onclick="ym(61912495,'reachGoal','phone'); return true;">+7 (495) 994 72 75</a>
                    <a href="https://pir.paritet.ru/" target="_blank" class="pir-btn-sign-in-m">Вход</a>
                </div>

                <div class="mega-menu-tablet">

                    <div class="pir-mega-menu-wrap__body-wrap">

                        <div class="container-md container">
                            <a href="/registracziya-ao/" class="mobile-header-link"><img src="<?php bloginfo('template_directory'); ?>/img/icons/sale-tag.svg" alt="sale">Регистрация АО</a>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'mega_menu',
                                'menu' => '',
                                'container' => false,
                                'container_class' => false,
                                'container_id' => false,
                                'menu_id' => false,
                                'menu_class' => 'pir-mega-menu-wrap__item menu-tablet',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 0,
                                'walker' => '',
                                'item_spacing' => 'discard',
                            ]);
                            ?>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'mega_menu',
                                'menu' => '',
                                'container' => false,
                                'container_class' => false,
                                'container_id' => false,
                                'menu_id' => false,
                                'menu_class' => 'pir-mega-menu-wrap__item mobile-menu',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 0,
                                'walker' => '',
                                'item_spacing' => 'discard',
                            ]);
                            ?>
                            <button class="pir-mega-menu-wrap__close-menu"></button>
                        </div>
                    </div>
                    <a href="https://pir.paritet.ru/User/SignIn" class="pir-mega-menu-wrap__services-bottom">
                        <div class="pir-mega-menu-wrap__services-b-wrap">
                            <h2><span>Личный кабинет владельца</span> - доступ к своим счетам и голосование на собрании
                                из любой точки мира 24/7</h2>


                        </div>

                    </a>
                </div>
            </nav>
            <!--            <div class="pir-menu-overlay"></div>-->
    </div>

</header>

<div class="pir-mega-menu-wrap">
    <div class="pir-mega-menu-wrap__body">
        <div class="container">
            <div class="pir-mega-menu-wrap__body-wrap">

                <?php
                wp_nav_menu([
                    'theme_location' => 'mega_menu',
                    'menu' => '',
                    'container' => false,
                    'container_class' => false,
                    'container_id' => false,
                    'menu_id' => false,
                    'menu_class' => 'pir-mega-menu-wrap__item',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                    'item_spacing' => 'discard',
                ]);
                ?>

                <button class="pir-mega-menu-wrap__close-menu"></button>
            </div>
        </div>
    </div>
    <div class="pir-mega-menu-wrap__services-bottom">
        <div class="container">
            <div class="pir-mega-menu-wrap__services-b-wrap">
                <h2><span>Личный кабинет Акционера</span> - полный доступ к своим счетам и голосование на собрании из
                    любой точки мира</h2>
                <a href="/lichnyj-kabinet-akczionera/" class="pir-btn">Открыть кабинет</a>
            </div>
        </div>

    </div>
</div>


<div class="notification-cookie-wrap">
    <!--<div class="notification-cookie-most">-->
    <!---->
    <!--    <p>-->
    <!--        Акционерам ПАО «ХМЗ» о порядке продажи акций в случае принятия Добровольного предложения <a class="notification-cookie-most__btn" href="/akczioneram-pao-hmz/">Подробнее...</a>-->
    <!--    </p>-->
    <!--    <div class="notification-cookie-most__btn-wrap">-->
    <!--           <a href="/akczioneram-pao-mostotrest/" class="notification-cookie-most__btn">Подробнее</a>-->
    <!--        <button class="notification-cookie-most__close" type="button">Закрыть</button>-->
    <!--    </div>-->
    <!--</div>-->
<!--    <div class="notification-cookie">-->
<!--        <p>Мы используем файлы cookie для улучшения работы сайта. Продолжая просматривать сайт, вы соглашаетесь с-->
<!--            условиями использования cookie</p>-->
<!--        <a href="#" class="notification-cookie__btn-true ">Закрыть</a>-->
<!--    </div>-->
</div>




