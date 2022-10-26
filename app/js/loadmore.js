jQuery(function($){
    $('#pir-news-loadmore').click(function(){ // клик на кнопку
        $(this).text('Загрузка...'); // меняем текст на кнопке
        // получаем нужные переменные
        var data = {
            'action': 'loadmore',
            'query': posts_vars,
            'page' : current_page
        };
        // отправляем Ajax запрос
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if(data) {
                    $('#pir-news-loadmore').text('Посмотреть ещё'); // добавляем новые посты
                    $('.pir-news-mobile-result').before(data);
                    current_page++; // записываем новый номер страницы
                    if (current_page == max_pages) $("#pir-news-loadmore").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#pir-news-loadmore').remove(); // если посты не были получены так же удаляем кнопку
                }
            }
        });
    });

});
