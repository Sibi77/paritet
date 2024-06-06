<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package paritet
 */


?>
<section class="no-section">
    <div class="pir-container">
        <div class="pir-breadcrumbs">
            <a class="home-page" href="/">Главная</a> <i class="angle-arrow-right"></i>
            <a href="/about-company/">О компании</a>  <i class="angle-arrow-right"></i>
            <a href="/all-news/">Новости и статьи</a>
            <i class="angle-arrow-right"></i> <?php the_title(); ?>
        </div>
    </div>
</section>
<section class="pir-table">
    <div class="pir-container">

        <h1 class="pir-title-h1"><?php the_title(); ?></h1>
        <div class="pir-news__single-wrap">

            <div class="pir-news__single">

                <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
                <div class="pir-news__single-header">
                    <div class="pir-news__single-header-date">
                        <?php
                        $articles = get_the_category();
                        if (!empty($articles[1]->cat_name)) {
                            $test = $articles[1]->cat_name;
                            echo ' <span class="pir-news__articles">Статья</span>';
                        }
                        ?>
                        <?php the_field('date_news') ?>
                    </div>
                    <div class="pir-news__single-header-social">
                        <span>Поделится</span><?php echo do_shortcode('[Sassy_Social_Share style="background-color:#f2f2f2;"]') ?>
                    </div>
                </div>
                <?php if (get_field('markirovannyj_spisok')): ?>
                    <div class="pir-news__single-list">

                        <?php if (have_rows('markirovannyj_spisok')): ?>
                            <?php while (have_rows('markirovannyj_spisok')): the_row(); ?>

                                <ul>
                                    <li><?php the_sub_field('tekst_spiska'); ?></li>
                                </ul>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="pir-news__single-list-divider"></div>
                    </div>
                <?php endif; ?>



                <?php the_content(); ?>
            </div>


            <?php if (get_field('zagolovok_vidzheta')): ?>
                <div class="pir-news__single-sidebar">

                    <h3><?php the_field('zagolovok_vidzheta') ?></h3>


                    <?php if (have_rows('nastrojki_vidzheta')): ?>
                        <?php while (have_rows('nastrojki_vidzheta')): the_row(); ?>

                            <a class="pir-news__single-sidebar-wrap" href="<?php the_sub_field('ssylka_vidzheta'); ?>">
                                <img src="<?php the_sub_field('kartinka_vidzheta'); ?>"/>
                                <p><?php the_sub_field('tekst_vidzheta'); ?></p>
                            </a>

                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>


            <?php endif; ?>


        </div>
    </div>
</section>


<section class="banner-section">
    <div class="banner-section__img">
        <img src="<?php bloginfo('template_directory'); ?>/img/baner3.png" alt="">
    </div>
    <div class="container container-md">
        <div class="row">
            <div class="d-md-none d-xl-block col-xl-6  banner-section__item"></div>
            <div class="col-lg-12 col-xl-6 banner-section__item animation-scroll">
                <h2>Регистрация АО «под ключ»</h2>
                <p>
                    Регистрация акционерного общества при учреждении за 6 дней. Вам не надо обращаться в ФНС, Банк
                    России и оплачивать госпошлины. Достаточно одному из учредителей обратиться к нам, и компания будет
                    зарегистрирована.
                </p>
                <a href="/registracziya-ao/" class="pir-btn">Подать документы </a>
            </div>
        </div>
    </div>
</section>


<section id="" class="fw-main-row" style="background-color:#f1f3f6;">
    <div class="fw-container">
        <div class="fw-col-xs-12">

            <div class="form-wrapper fw-contact-form contact-form">
                <form class="fw_form_fw_form"
                      data-fw-ext-forms-type="contact-forms" novalidate="novalidate"><input type="hidden" name="fwf"
                                                                                            value="fw_form"><input
                            type="hidden" id="_nonce_96dd96fe5570a4b316ced837936a306c"
                            name="_nonce_96dd96fe5570a4b316ced837936a306c" value="ed85cb195b"><input type="hidden"
                                                                                                     name="_wp_http_referer"
                                                                                                     value="/"><input
                            type="hidden" name="fw_ext_forms_form_type" value="contact-forms"><input type="hidden"
                                                                                                     name="fw_ext_forms_form_id"
                                                                                                     value="3c2662c53b1e9e87554fbaa75477c2a4">
                    <div class="wrap-forms">
                        <div class="fw-row">
                            <div class="fw-col-xs-12 form-builder-item form-builder-item">
                                <div class="header title">
                                    <h2>Остались вопросы?</h2>
                                    <p>Мы перезвоним Вам в течении 10 минут</p>
                                </div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <label for="id-1">Фамилия и Имя <sup>*</sup> </label>
                                    <input type="text" name="text_83f113a" placeholder="" value="" id="id-1"
                                           required="required" aria-required="true">
                                </div>
                            </div>
                            <div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
                                <div class="field-text">
                                    <label for="phone">Телефон <sup>*</sup> </label>
                                    <div class="intl-tel-input"><input type="tel" name="text_1c21802"
                                                                       placeholder="+7 (000) 000-00-00" value=""
                                                                       id="phone" required="required" data-constraint=""
                                                                       autocomplete="off" aria-required="true">
                                        <div class="flag-dropdown">
                                            <div class="selected-flag" title="Russia (Россия): +7">
                                                <div class="iti-flag ru"></div>
                                                <div class="arrow"></div>
                                            </div>
                                            <ul class="country-list hide">
                                                <li class="country preferred active" data-dial-code="7"
                                                    data-country-code="ru">
                                                    <div class="flag">
                                                        <div class="iti-flag ru"></div>
                                                    </div>
                                                    <span class="country-name">Russia (Россия)</span><span
                                                            class="dial-code">+7</span></li>
                                                <li class="divider"></li>
                                                <li class="country" data-dial-code="7" data-country-code="ru">
                                                    <div class="flag">
                                                        <div class="iti-flag ru"></div>
                                                    </div>
                                                    <span class="country-name">Russia (Россия)</span><span
                                                            class="dial-code">+7</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-row">
                            <div class="fw-col-xs-12 form-builder-item">
                                <div class="field-textarea">
                                    <label for="id-3">Ваш вопрос - <span class="not-necessary">не обязательно</span>
                                    </label>
                                    <textarea name="textarea_275a074" placeholder="" id="id-3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="fw-row"></div>
                    </div>
                    <p class="pir-feedback__agreement">
                        Отправляя данные, даю согласие на обработку персональных данных в соответствии с ФЗ № 152-ФЗ «О
                        персональных данных»
                    </p>
                    <div class="form-btn-wrpap">
                        <button type="submit" class="pir-btn pir-btn-submit" onsubmit="return (ValidPhone())"
                                onclick="ym(61912495,'reachGoal','send-button'); return true;">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

