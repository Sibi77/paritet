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
        let status = ''

        if ($(this).hasClass('active')){
            status = parentCategory
            ajaxCat(dataCategory, dataSection, dataSortKey, status);



        } else {
            ajaxCat(dataCategory, dataSection, dataSortKey, status);

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
                ajaxCat(dataCategory, dataSection, dataSortKey, status);

        }

    });


    /**
     * Ajax запрос постов из рубрики по
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

                $mainBox
                    .html(data)
                    .show()
                imageLoad.hide();
                let tableCounter = $(".table-counter");
                let tableData = $(".pir-table__table tbody tr");
                let noIndex = $('.no-index-search')
                if (noIndex.length){
                    tableCounter.text(tableData.length -2);
                }else {
                    tableCounter.text(tableData.length -1);
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
            }
        });

    }

});