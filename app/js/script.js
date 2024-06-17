$(function () {

    // Variables
    var pirHamburger = $('.pir-hamburger');
    var pirMenu = $('.pir-menu');
    var searchMenu = $('.pir-search-site-mob');
    var bodyDoc = $('body');
    var pirNavWrap = $('.pir-nav-wrap');
    var pirHead = $('.pir-head');
    var pirCarouselWrap = $('.pir-carousel__item-wrap');
    var pirAccordionWrap = $('.pir-accordion__wrap');
    var swipeMenu = $('.swipe-menu');
    var megaMenu = $('.mega-menu');
    var megaMenuWrap = $('.pir-mega-menu-wrap');
    var footerBlockOffice = $('.pir-footer__office');
    var pirAboutCounterNum = $('.pir-about__counter .pir-about__counter--num');
    var timeCounterAnimation = 2;
    var counterLimit = 1;
    var animationScroll = $('.animation-scroll');
    var breadCrumbs = $('.bread-crumbs');
    var heightHeader = $('.pir-head-content').height();
    var btnPrevPage = $('.pir-prev-page');
    var pirTable = $('.pir-table');
    var tableData = $(".pir-table__table tbody tr");
    var tableCounter = $(".table-counter");
    var factsProjectItem = $('.facts__project p');
    var wpAdminBar = $('.wpadminbar');
    var textarea = $('#id-3');
    var saleRegAo = '. Антикризисная Акция';

    var pirLogo = $('.pir-head').find('.pir-logo');


    $(document).on('click', '.pir-search-site__btn-desk', function (){
        var  formSearch = $('.pir-search-site');
        formSearch.show();
    })
    $(document).on('click', '.pir-search-site__close', function (){
        var  formSearch = $('.pir-search-site');
        formSearch.hide();
    })
    $(document).mouseup(function (e) {
        var container = $(".pir-search-site");
        if (container.has(e.target).length === 0){
            container.hide();
        }
    });


    function pirSearchSubmit(event){
        var searchForm = $('#search-filter-form-6178')
        searchForm.submit(function(){
            return false;
        })


        var searchInput = searchForm.find('.sf-input-text')
        searchInput.prop('require')
            if(searchInput.val() === ''){
                searchForm.off()
            }


        $(document).on('submit', searchForm, function (){
            e.preventDefault();
        })
    }
    pirSearchSubmit();

    // function pageDeskScaling(){
    //
    //
    //     if ($(document).width() > 767) {
    //         var headerWrap = $('.pir-head-content__wrap')
    //         var headerWrapTitle = $('.pir-head-content__wrap h1')
    //         var headerWrapText = $('.pir-head-content__wrap p');
    //
    //         headerWrapTitle.each(function () {
    //             var $span = $( this ).wrapInner( '<span>' ).children( 'span' );
    //
    //
    //            if($span.width() > 601 ){
    //                headerWrapText.css({
    //                    width: 'auto'
    //                });
    //            } else {
    //
    //                headerWrapText.css( 'width', $span.width() );
    //            }
    //         });
    //
    //     }
    //
    //
    // }
    // pageDeskScaling();


    function clearInputNewsSearch() {
        $('.sf-field-search').ready(function () {
            $('.sf-field-search ').append("<button type='button' class='news-clear-search'></button>")
        });
    }

    clearInputNewsSearch();

    function radioCheckBoxSearch() {
        var radioCategory = $('.sf-field-category').find('input.sf-input-checkbox');
        var radioTag = $('.sf-field-tag').find('input.sf-input-checkbox');

        radioCategory.on('click', function () {
            radioCategory.not(this).attr('checked', false);
            this.checked = this.checked;
        });
        radioTag.on('click', function () {
            radioTag.not(this).attr('checked', false);
            this.checked = this.checked;
        });
    }

    radioCheckBoxSearch();

    function removeClassNextPrevPagination() {
        var next = $('.pir-news-pagination .next');
        var prev = $('.pir-news-pagination .prev');
        next.removeClass('page-numbers')
        prev.removeClass('page-numbers')
    }

    removeClassNextPrevPagination();
    setInterval(removeClassNextPrevPagination, 1);

    function parentBlockMiniForm() {
        $('.wpcf7').parent().addClass("section-mini-form");
    }

    parentBlockMiniForm();

    function textBigFormParagraph() {
        var textForm = $('.form-wrapper .header.title p');
        textForm.text('Мы перезвоним Вам в течение 10 минут');
    }

    textBigFormParagraph();

    function toggleLinkMobileMenu(e) {
        var link = $('.mobile-menu .not-href-mobile')
        link.append('<span class=\'toggle-sub-menu\'></span>')
        var toggleSubMenu = $('.toggle-sub-menu')
        if ($(document).width() < 767) {
            toggleSubMenu.click(function () {
                $(this).find('.sub-menu').toggleClass('menu-active');
                $(this).siblings('.sub-menu').toggleClass('active');
                $(this).toggleClass('animate-btn')
            })

        }
    }

    toggleLinkMobileMenu();


    function visibleCookieModal(e) {
        $('.notification-cookie-wrap').prepend('<div class="notification-cookie">\n' +
            '        <p>Мы используем файлы cookie для улучшения работы сайта. Продолжая просматривать сайт, вы соглашаетесь с\n' +
            '            условиями использования cookie</p>\n' +
            '        <a href="#" class="notification-cookie__btn-true ">Закрыть</a>\n' +
            '    </div>');
        var modalCookie = $('.notification-cookie');
        var modalCookieMost = $('.notification-cookie-most');
        modalCookieMost.addClass('notification-cookie-most-visible');
        modalCookie.addClass('notification-cookie-visible')

        $(document).on('click', '.notification-cookie-most__close', function () {
            $.cookie('notificationCookieHideHeader', 'notification-cookie-hide-header', {expires: 1, path: '/'})
            modalCookieMost.fadeOut(200);

        })
        if ($.cookie('notificationCookieHideHeader')) {
            modalCookieMost.hide();
        }
        if ($.cookie('notificationCookieHide')) {
            modalCookie.addClass('notification-cookie-hide');
        }
        if (modalCookie.hasClass('notification-cookie-hide')) {
            modalCookieMost.addClass('notification-cookie-most-visible-m1');
        } else {
            modalCookie.removeClass('notification-cookie-most-visible-m1')
        }


        $(window).resize(function () {
            if (window.innerWidth < 1200) {
            } else {
                if (modalCookie.hasClass('notification-cookie-hide')) {
                    modalCookieMost.addClass('notification-cookie-most-visible-m1');
                } else {
                    modalCookieMost.css({
                        bottom: '125px'
                    })
                }
            }

        });
        $(document).on('click', '.notification-cookie__btn-true', function (e) {
            e.preventDefault();
            $.cookie('notificationCookieHide', 'notification-cookie-hide', {expires: 30, path: '/'})
            modalCookie.addClass('notification-cookie-hide');
            if (modalCookie.hasClass('notification-cookie-hide')) {
                modalCookieMost.addClass('notification-cookie-most-visible-m1')
            } else {
                modalCookie.removeClass('notification-cookie-most-visible-m1')
            }

        })

    }


    visibleCookieModal();


    btnPrevPage.css({
        top: (heightHeader - 25) + 'px'
    });


    function notNecessaryTextForm() {
        var label = $('[for="id-3"]');
        var labelReplace = label.text().replace(new RegExp("не обязательно", 'g'), "<span class='not-necessary'>не обязательно</span>");
        label.html(labelReplace);
    }


    function textareaVal() {
        $(document).on('click', '.tile-price__wrap .pir-btn', function () {
            var titleText = $(this).siblings('h3').text().trim();
            textarea.val(titleText + saleRegAo);
        })
    }

    function textareaValGift() {
        $(document).on('click', '.title-icon_wrap', function () {
            var giftText = 'Регистрация АО' + saleRegAo;
            textarea.val(giftText);
        })
    }

    textareaVal();
    textareaValGift();

    notNecessaryTextForm();
    // hamburger header menu
    $(document).on('click', '.pir-hamburger', function (e) {
        e.preventDefault();
        if (!pirMenu.hasClass('pir-menu__active')) {
            pirHamburger.addClass('pir-hamburger--open');
            pirMenu.addClass('pir-menu__active');
            bodyDoc.css({
                overflow: 'hidden'
            });
            pirMenu.animate({
                left: '0',
                opacity: '1',
            }, 500);
            $(this).css({
                color: '#000'
            })
        } else {
            pirHamburger.removeClass('pir-hamburger--open');
            pirMenu.removeClass('pir-menu__active');
            bodyDoc.css({
                overflow: 'auto'
            });
            pirMenu.animate({
                left: '-100%',
                opacity: '0',
            }, 500);

        }

    });

    $(document).on('click', '.pir-search-site__btn-mob', function (e) {
        e.preventDefault();
        if (!searchMenu.hasClass('pir-menu__active')) {
            $('.pir-search-site-mob__close').addClass('pir-hamburger--open');
            searchMenu.addClass('pir-menu__active');
            bodyDoc.css({
                overflow: 'hidden'
            });
            searchMenu.animate({
                left: '0',
                opacity: '1',
            }, 500);
            $(this).css({
                color: '#000'
            })
        } else {
            searchMenu.removeClass('pir-menu__active');
            bodyDoc.css({
                overflow: 'auto'
            });
            searchMenu.animate({
                left: '-100%',
                opacity: '0',
            }, 500);

        }
       var searh = $('.sf-input-text');
        searh.focus();
    });
    $(document).on('click', '.pir-search-site-mob__close', function (){
        var searh = $('.sf-input-text');
        searh.blur();
    })
    // end hamburger header menu

    //swipe menu header

    if (window.innerWidth < 768) {
        swipeMenu.swipe({

            swipeRight: function () {
                pirMenu.addClass('pir-menu__active');
                pirHamburger.addClass('pir-hamburger--open');
                $(this).css({
                    overflow: 'hidden'
                });
                pirMenu.animate({
                    left: '0',
                    opacity: '1',
                }, 500);
            },
        });
        bodyDoc.swipe({
            swipeLeft: function () {
                $(this).css({
                    overflow: 'auto'
                });
                pirMenu.removeClass('pir-menu__active');
                pirHamburger.removeClass('pir-hamburger--open');
                pirMenu.animate({
                    left: '-100%',
                    opacity: '0',
                }, 500);
            },
        })

    }
    if (window.innerWidth < 1200) {
        $('.facts__wrap').owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            autoplay: false,
            center: false,
            autoWidth: true,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            }
        });
        // section project owl carousel
        $('.pir-projects__wrap').owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            autoplay: false,
            center: false,
            autoWidth: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            }
        });

    } else {
        $('.pir-projects__wrap').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            center: true,
            autoWidth: true,
            margin: 22,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            }
        });
    }


    // end swipe menu header


    // header fixed nav scroll


    $(window).scroll(function () {
        //header scroll menu
        var scroll = $(window).scrollTop();


        if (scroll >= 20 && window.location.pathname === '/') {
            pirLogo.removeClass('pir-logo-new-color');
        }
        if (scroll <= 20 && window.location.pathname === '/') {
            pirLogo.addClass('pir-logo-new-color');
        }


        if ($(document).width() > 480 ? true : false) {
            if (megaMenu.hasClass('mega-menu-active')) {
                return false
            }
            if (scroll >= 58) {
                pirNavWrap.addClass('pir-nav-fixed');

            } else {
                pirNavWrap.removeClass('pir-nav-fixed');
                pirHead.css({})
            }
            // edn header scroll menu
        } else {
            if (scroll >= 20) {
                pirNavWrap.addClass('pir-nav-fixed');
            } else {
                pirNavWrap.removeClass('pir-nav-fixed');
                pirHead.css({})
            }

        }


        //not transparent background for bread-crumbs
        if (scroll >= heightHeader) {
            breadCrumbs.addClass('not-transparent');
        } else {
            breadCrumbs.removeClass('not-transparent');
        }
        //end not transparent background for bread-crumbs

        //scroll hide btn prev
        if (scroll >= pirTable.height()) {
            btnPrevPage.hide()
        } else {
            btnPrevPage.show();
        }
        //end scroll hide btn prev

        //animation section


        //animation section end

        //animation counter
        pirAboutCounterNum.each(function () {
            var topOfWindow = $(window).scrollTop();
            var CounterPos = $(this).offset().top;
            if (CounterPos < topOfWindow + 700) {
                if (counterLimit < 2) {
                    $('.pir-about__counter--num').each(function () {
                        $(this).addClass('pir-about__counter--viz');
                        var
                            i = 1,
                            num = $(this).data('num'),
                            step = 1000 * timeCounterAnimation / num,
                            that = $(this),
                            int = setInterval(function () {
                                if (i <= num) {
                                    that.html(i);
                                } else {
                                    counterLimit = counterLimit + 2;
                                    clearInterval(int);
                                }
                                i++;
                            }, step);
                    });
                }
            }

        });
        //end animation counter

    });
    if (window.outerWidth > 992) {

        animationScroll.each(function () {

            var _thisAnimate = $(this);
            if ($.cookie('hasSeenAnimation') == null) {
                // ...
                $(window).scroll(function () {

                    _thisAnimate.css('opacity', '0');
                    var titlePos = _thisAnimate.offset().top;
                    var topOfWindow = $(window).scrollTop();
                    if (titlePos < topOfWindow + 900) {

                        _thisAnimate.addClass('animated fadeInUp').css("opacity", "1");


                        $.cookie('hasSeenAnimation', 'true');


                    }

                })
                // ...

                // set cookie to stop next visit

            }
            if ($.cookie('hasSeenAnimation')) {
                $('.animation-scroll').css("opacity", "1");
            }


        });

    }

    // end header fixed nav scroll

    //header owl carousel
    pirCarouselWrap.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 10000,
        navText: '',
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
                margin: 0,

            },
            1000: {
                items: 1,

            }
        }
    });
    //end header owl carousel


    // pir accordion

    $(document).on('click', '.pir-accordion', function (e) {
        e.preventDefault();
        pirAccordionWrap.slideToggle();
    });
    //end pir accordion


//    mega-menu
    $(document).on('click', '.mega-menu', function (e) {
        e.preventDefault();
        megaMenu.toggleClass('mega-menu-active');
        megaMenuWrap.toggleClass('mega-menu-wrap-active');
        pirNavWrap.addClass('pir-nav-fixed');
        var pirLogo = $('.pir-logo ');
        var currentMenu = $('.current-menu-item a');
        if ($('.pir-mega-menu-wrap').hasClass('mega-menu-wrap-active')) {

            currentMenu.removeClass('active');
        } else {
            currentMenu.addClass('active');
        }
        if (pirLogo.hasClass('pir-logo-new-color')) {
            pirLogo.removeClass('pir-logo-new-color')
        }
    });


//  end  mega-menu

    //keydown
    $(document).on('keydown', function (e) {
        //close mega menu ESC
        if (e.keyCode === 27) {
            closeMenu();
        }
        //end close mega menu ESC
    });

    //function closeMenu
    function closeMenu() {
        var currentMenu = $('.current-menu-item a');
        if (megaMenu.hasClass('mega-menu-active')) {
            megaMenu.removeClass('mega-menu-active');
            megaMenuWrap.removeClass('mega-menu-wrap-active');
            currentMenu.addClass('active')
            bodyDoc.css({
                overflow: 'auto'
            })
        }
    }

    //end function closeMenu

    //closeBtn for mega-menu
    $(document).on('click', '.pir-mega-menu-wrap__close-menu', function (e) {
        closeMenu();
        //end close mega menu ESC
    });
    //end closeBtn for mega-menu

    //address select footer
    $('.pir-footer__office:first').show();
    $(document).on('change', '.custom-dropdown select', function () {
        var optionId = $(this).find('option:selected').data("id");
        footerBlockOffice.each(function () {
            if (optionId === $(this).data('id')) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
    // end address select footer

    //pir accordion panel

    $(document).on('click', '.pir-panel-group .panel-heading', function () {
        var panelBody = $(this).siblings('.pir-panel-group .panel-body');
        $(this).toggleClass('active');
        panelBody.slideToggle();
    });

    //end pir accordion panel

    //animated anchor scroll
    $(document).on('click', '.pir-scroll-arrow,  .form-request, .signature-type', function (e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });





    //end animated anchor scroll





    var tableFilter = $("#table_filter");
    if(tableFilter.length){
        tableCounter.text(tableData.length-1);
    } else {
        tableCounter.text(tableData.length);
    }


    $('.pir-search__search').keyup(function(){
        var search = $(this).val();
        tableData.hide();

        var len = $('.pir-table :not(.notfound) td:contains("'+search+'")').length;


        if(len > 0){

            $('.pir-table:not(.notfound) td:contains("'+search+'")').each(function(){
                $(this).closest('tr').show();
            });
        }else{
            $('.notfound').show();

        }
        var numOfVisibleRows = $('.pir-table__table tr:visible').length;
        tableCounter.text(numOfVisibleRows -1);
        if( !$(this).val() ) {

            $('.notfound').hide();
        }
        if($(this).val().trim() === ''){
            $('.notfound').hide();
        }


    });
        // Case-insensitive searching (Note - remove the below script for Case sensitive search )
        $.expr[":"].contains = $.expr.createPseudo(function(arg) {
        return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
    });

    function counterFactsItem(e) {

        var check = $('.facts__project p');
        if (window.location.pathname === '/all-services/konsultaczionnye-uslugi/registracziya-ao/') {
            $.ajax({
                type: "POST",
                url: "/disclosure/perechen-zaregistrirovannyh-zao-rdcz-paritet-vypuskov-czennyh-bumag/",
                cache: true,
                async: true,
                success: function (response) {
                    var success = $($.parseHTML(response)).find(".pir-table__table tbody tr");
                    check.text(success.length);
                }
            });
        }

    }

    counterFactsItem();

    function p(e) {
        if ("/all-services/konsultaczionnye-uslugi/reorganizacziya-i-likvidacziya-yur-licz/" === window.location.pathname) {
            var t = $(".pir-menu__top-phone"), i = $(".pir-footer__phone"), a = $(".pir-btn-submit"),
                o = $(".pir-mini-form-mobile__btn"), n = $(".mini-form_reorganization .pir-btn");
           t.attr("onclick", "ym(61912495,'reachGoal','phone_transfor')\n"), i.attr("onclick", "ym(61912495,'reachGoal','phone_transfor')\n"), a.attr("onclick", "ym(61912495,'reachGoal','send_form_transfor')"), o.attr("onclick", "ym(61912495,'reachGoal','call_transfor')\n"), n.attr("onclick", "ym(61912495,'reachGoal','call_transfor')")
        }
    }
    p();


    //input phone Mask
    // phoneMaskAndValidationInit();

    //end input phone mask


    function getInternetExplorerVersion() {
        var rv = -1;
        if (navigator.appName == 'Microsoft Internet Explorer') {
            var ua = navigator.userAgent;
            var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat(RegExp.$1);
            return false
        } else if (navigator.appName == 'Netscape') {
            var ua = navigator.userAgent;
            var re = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat(RegExp.$1);
        }
        return rv;
    }

    if (document.location.pathname === '/no-ie/') {
        return false
    } else {
        if (getInternetExplorerVersion() !== -1) {
            document.location.href = '/no-ie/';
        }
    }

    //  Добавление активных ссылок меню
    function activeMenu() {
        var url = document.location.href;
        $.each($(".pir-menu-desk a"), function () {
            if (this.href == url) {
                $(this).addClass('active');
            }
            ;
        });
    }

    // end Добавление активных ссылок меню
    activeMenu();


    //  Добавление активных ссылок фильтру в компоненте  поиска
    function activeSearch() {
        var url = document.location.href.trim();
        $.each($(".pir-search__filter-js a"), function () {
            if (this.href.trim() === url) {
                $(this).addClass('active');
            }
            ;
        });
    }

    // end Добавление активных ссылок фильтру в компоненте  поиска
    activeSearch();


    // table-calc
    function interestSubtraction() {

        var price = $('.table-calc__price');

        price.each(function () {
            var priceInt = parseFloat($(this).text().replace(" ", ""));
            var interest = parseFloat($(this).siblings('.table-calc__discount').text().replace(" ", ""))
            var sumInterest = priceInt * interest / 100;
            var sumTotal = priceInt - sumInterest;
            var sumRounding = Math.round(sumTotal);
            $(this).siblings('.table-calc__sum').text(sumRounding)
            $(this).siblings('.table-cac__val').find('input').val(sumRounding)
        });
    }

    function tableCompanyForm() {
        var btnOrder = $('.table-order');
        var textArea = $('.field-textarea textarea')
        btnOrder.each(function () {
            $(this).on('click', function () {
                textArea.val($(this).parents('tr').find('.table-company__name').text())
            })
        })
    }

    function tableCompanyFormMobile() {
        var btnOrder = $('.table-order');
        var textArea = $('.field-textarea textarea')
        btnOrder.each(function () {
            $(this).on('click', function () {
                textArea.val($(this).siblings('.table-company__mobile-val').text())
            })
        })
    }

    if (window.innerWidth < 768) {
        tableCompanyFormMobile();
    } else {
        tableCompanyForm();
    }
    interestSubtraction();
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $(".table-calc table input:checkbox").on("change", function () {


        var totalValue = 0;
        $('.table-calc table input:checked').each(function () {


            var val = $(this).val().replace(" ", "");
            val = Number(val)

            totalValue += parseFloat((val));
        });
        $("#totalVal").text(totalValue.toLocaleString());


        //    Связыванние данных отмеченых в таблице с формой
        var arr = $('.calc-table__check:checkbox:checked').siblings('.table-calc__text').map(function () {
            return $(this).text();
        }).get();
        var totalVal = $('#totalVal').text();
        var textArea = $('#id-3');
        if ($('.calc-table__check').is(':checked')) {
            textArea.val(arr + '. Итоговая стоимость выбранных услуг: ' + totalVal + ' руб.');

            var textVal = $('#id-3').val();
            var hideBlock = $('.hideblock');
            hideBlock.text(textVal)

            var heightBlock = hideBlock.innerHeight() + 2;
            $('#id-3').css({
                height: heightBlock
            })


        } else {
            $('#id-3').val('');

        }

        // end   Связыванние данных отмеченых в таблице с формой

    })


});


function openCity(evt, cityName) {
    //Declare all variables
    var i, tabcontent, tablinks;

    //Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    //Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    //Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function phoneMaskAndValidationInit() {
    var inputPhone = $('input[id="id-2"]');
    inputPhone.attr('type', ('tel'));

}



