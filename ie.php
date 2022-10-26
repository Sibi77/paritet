<?php
/*
 * Template name: no-ie
 */
get_header("ie"); ?>

    <!DOCTYPE html>
    <html class="h-100" style="margin-top: 0!important;"  lang="ru">

<style>
    #wpadminbar{
        display: none!important;
    }
</style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-48455276-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-48455276-1');
    </script>

    <body class="h-100">
    <section  class="no-ie">
        <div class="container">
            <div class="no-ie__wrap d-flex flex-column justify-content-center align-items-center text-center">
                <h1>К сожалению, наш сайт не поддерживает <br> Internet Explorer</h1>
                <p>Вы можете открыть сайт в любом из современных браузеров</p>
                <div class="no-ie__browsers">
                    <a href="https://www.google.com/intl/ru/chrome/"><img src="<?php bloginfo('template_directory') ;?> /img/browsers/chrome%201.svg" alt="chrome"></a>
                    <a href="https://www.mozilla.org/ru/firefox/new/"><img src="<?php bloginfo('template_directory') ;?>/img/browsers/firefox.svg" alt="firefox"></a>
                    <a href="https://download.free-browser.ru/?gclid=CjwKCAiA7t3yBRADEiwA4GFlI0b6PjgWOtWBT87A4lRRu7omXgmt_7JwGvJHiHd8iopolWU5YKnwXBoC3GUQAvD_BwE"><img src="<?php bloginfo('template_directory') ;?>/img/browsers/yandex.svg" alt="yandex"></a>
                    <a href="https://www.opera.com/ru"><img src="<?php bloginfo('template_directory') ;?>/img/browsers/safari.svg" alt="safari"></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ;?>/img/browsers/opera.svg" alt="opera"></a>
                    <a href="https://www.microsoft.com/en-us/edge"><img src="<?php bloginfo('template_directory') ;?>/img/browsers/edge.svg" alt="edge"></a>
                </div>
            </div>
        </div>
    </section>

    </body>
    </html>
<?php get_footer('ie'); ?>