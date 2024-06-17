jQuery(document).ready(function ($) {
    $(window).load(function(){
        let pirAjax_table = $('.pir_ajax_table')
        let pirPreloadAjax = $('.preload-disclosure')
        pirAjax_table.show()
        pirPreloadAjax.hide()

    });

    // Контейнер с контентом
    let $mainBox = $('.pir_ajax_table');
    let imageLoad = $('.preload-disclosure');

    // Отправка ajax запроса при клике по ссылке на рубрику в виджете "Рубрики"
    $('#disclosure-btn-filter a').click(function (e) {
        e.preventDefault();
        $('#disclosure-btn-filter a').removeClass('active')
        $(this).addClass('active')

        let dataCategory = $(this).attr('data-category-slug')
        let dataSection = $(this).attr('data-section')
        let dataSortKey = $(this).attr('data-sort-key')

        let parentCategory = $('.addition-filter .active').attr('data-category-slug')
        let parentSection = $('.addition-filter  .active').attr('data-section')
        let parentSortKey = $('.addition-filter .active').attr('data-sort-key')
        let status = ''

        if ($(this).hasClass('active')){
            status = parentCategory
            console.log(status, 'status1')
            console.log(dataCategory, 'status2')
            ajaxCat(dataCategory, dataSection, dataSortKey, status);



        } else {
            ajaxCat(dataCategory, dataSection, dataSortKey, status);
            // console.log(dataCategory)

        }






    });
    $('.addition-filter a').click(function (e) {
        e.preventDefault();
        let parentCategory = $('#disclosure-btn-filter .active').attr('data-category-slug')
        let parentSection = $('#disclosure-btn-filter .active').attr('data-section')
        let parentSortKey = $('#disclosure-btn-filter .active').attr('data-sort-key')
        let status ='';
        let dataCategory = $(this).attr('data-category-slug')
        let dataSection = $(this).attr('data-section')
        let dataSortKey = $(this).attr('data-sort-key')
        if ($(this).hasClass('active')){
           $(this).removeClass('active')
            ajaxCat(parentCategory, parentSection, parentSortKey, status);

        } else {
                $('.addition-filter a').removeClass('active')
                $(this).addClass('active')
            status = parentCategory
            console.log(status, 'status2')
                ajaxCat(dataCategory, dataSection, dataSortKey, status);

        }


    });


    // let dataCategory = $(this).attr('data-category-slug')
    // Отслеживание события нажатия кнопок браузера "Вперед/Назад"

    // window.onpopstate = function(event) {
    //     document.title = event.state.page_title;
    //     ajaxCat(location.href, dataCategory);
    // }

    /**
     * Ajax запрос постов из рубрики по переданной ссылке на неё
     *
     *
     * @param catSlug метка записи для фильтров
     * @param section ссылка на рубрику
     * @param sortKey метка сортировки для фильтров
     * @param status метка сортировки для фильтров
     */
    function ajaxCat(catSlug, section, sortKey, status) {
        $mainBox.hide()
        imageLoad.show();

        $.ajax({
            url : myPlugin.ajaxurl, // обработчик
            type : 'POST', // тип запроса
            data : {
                action: 'get_cat',
                cat_slug: catSlug,
                section: section,
                sort_key: sortKey,
                status: status

            }, // данные




            beforeSend : function( xhr ){
                // filter.find( 'button' ).text( 'Загружаю...' ); // изменяем текст кнопки
                $mainBox.html()
                $('#disclosure-btn-filter a').css({
                    pointerEvents: 'none',
                    opacity: '0.5'
                })
                $('.addition-filter a').css({
                    pointerEvents: 'none',
                    opacity: '0.5'
                })

            },
            success : function( data ){
                $('#disclosure-btn-filter a').css({
                    pointerEvents: 'auto',
                    opacity: '1'
                })
                $('.addition-filter a').css({
                    pointerEvents: 'auto',
                    opacity: '1'
                })
                let tableCounter = $(".table-counter");
                let tableData = $(".pir-table__table tbody tr");
                tableCounter.text(tableData.length -1);
                $mainBox
                    .html(data)
                    .show()
                imageLoad.hide();

            }
        });

    }

});