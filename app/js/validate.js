$(function (){
    var inputPhone = $('input[id="id-2"]');
    inputPhone.attr('type', ('tel')).attr('id', 'phone').attr('data-constraint', '');
    var label = $('label[for="id-2"]');
    label.attr('for', 'phone');

    inputPhone.intlTelInput({
        autoPlaceholder: true,
        defaultCountry: "ru",
        onlyCountries: ['ru'],
        preferredCountries: ['ru'],
    });


    // on blur: validate
    // function addClassSectionForm(){
    //     var formSection = $('.form-wrapper').parents('.fw-main-row ');
    //     formSection.addClass('pir-main-form')
    // }
    // addClassSectionForm();

    $(document).on('keyup blur','#phone', function (){
        $(this).valid()
        if ($(this).intlTelInput("isValidNumber")) {
        } else {
            $(this).addClass("error");
            label.removeClass('ok')
        }
    })

    $(document).on('blur keyup','#id-1', function (){
        $(this).valid()
    })

    // on keydown: reset
    $(document).on('keydown','#phone', function (){
        $(this).removeClass("error");
        label.addClass('ok')
    })

    $(".fw_form_fw_form").validate({
        errorElement: 'small',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.attr("name") === "aut_privacy") {
                error.insertBefore(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        rules: {
            phone: {
                required: true,
                validatePhone: true
            },
            aut_privacy: {
                required: true,
            }
        },
        messages: {
            phone: "Номер указан некорректно!",

        },
    });

    $(document).on('click', '.pir-modal-success .pir-btn', function (){
        var pirModal = $('.pir-modal-success');
        pirModal.fadeOut();
        var formSection = $('.form-wrapper').parents('.fw-main-row ');
        formSection.removeClass('pir-main-form')

    })
    $(document).mouseup(function (e) {
        var container = $(".pir-main-form");
        if (container.has(e.target).length === 0){
            var formSection = $('.form-wrapper').parents('.fw-main-row ');
            formSection.removeClass('pir-main-form');
            var pirModal = $('.pir-modal-success');
            pirModal.fadeOut();

        }
    });

    // submit form ajax
    $('.fw_form_fw_form').on('submit', function(){
        var $this = $(this),
            btn = $this.find('.pir-btn-submit'),
            data = $this.serialize(),
            formAlert = $('.pir-modal-success'),
            textError = $('.pir-modal-success__body p');
            loader = '<img class="loader" src="' + lawData.themePath + '/img/loader.gif">';
        if ($(this).valid() && $('#phone').val().length != 0 && $("#phone").intlTelInput("isValidNumber")) {
            $.ajax({
                type: 'POST',
                data: data,
                beforeSend: function(){
                    btn.attr('disabled', true);
                    formAlert.removeClass('error-form');
                    textError.text('Наш специалист перезвонит вам в течении 10 минут')
                    btn.after(loader);
                },
                success: function(responce){
                    var formSection = $('.form-wrapper').parents('.fw-main-row ');
                    formSection.addClass('pir-main-form')
                    formAlert.fadeIn(300, function(){
                        if(responce.success){
                            formAlert.addClass('pir-active-modal');
                            $this[0].reset();
                            ym(61912495,'reachGoal','send-form'); return true;
                            // setTimeout(function(){
                            //     formAlert.fadeOut();
                            // }, 7000);
                        }else{
                            formAlert.addClass('alert-danger');
                            var errors = '';
                            for(var key in responce.data.errors){
                                errors += responce.data.errors[key] + '<br>';
                            }
                            formAlert.html(errors);
                        }
                    });
                    $('.loader').remove();
                    btn.attr('disabled', false);
                    $this.find('input').removeClass('valid');
                },
            });
        } else {
            // alert('Заполните обязательные поля!');
            // formAlert.fadeIn().addClass('error-form');
            // textError.text('Заполните правильно обязательные поля!')
            return false;
        }


        return false;

    });
// end submit form ajax
    document.addEventListener('wpcf7mailsent', function( event ) {
       var miniForm = $('.mini-form-modal');

        miniForm.fadeIn('fast');
    }, false );

})
jQuery.extend(jQuery.validator.messages, {
    required: "Это поле обязательное для заполнения",
});
