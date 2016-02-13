$(function() {

    $(".phone-various").on("click",function(e) {
        e.preventDefault();
        $(this).css("display", "none");
        $("#phone").css("display", "block");
    });
    $("#close").on("click",function(e) {
        e.preventDefault();
        $(".phone-various").css("display", "block");
        $("#phone").css("display", "none");
    });

    $("#phone").on("click", "#close_" ,function(e) {
        e.preventDefault();
        document.location = window.location.pathname;
    });

    $("#main-form").on("click", "#close_2" ,function(e) {
        e.preventDefault();

        var varUrl = window.location.pathname+'?form=y#form';
        window.location = varUrl;
        /*document.location.hash = '#form';
        window.location.href = document.location;*/
        //document.location = document.location.hash;
    });




    $("#back-top").hide();

    $(window).scroll(function (){
        if ($(this).scrollTop() > 700){
            $("#top").fadeIn();
        } else{
            $("#top").fadeOut();
        }
    });

    $("#top").click(function (){
        $("body,html").animate({
            scrollTop:0
        }, 400);
        return false;
    });


    $(".all-form form input[type='text'], .all-form form textarea").each(function(){
        $(this).attr("placeholder", $(this).parent().attr("data-place"));

    });

    $(".all-form").on('submit', 'form', function(e){
        e.preventDefault();

        var t =$(this),
            flagError = 0;

        t.find('.error').removeClass('error');

        t.find('.form-control.req input, .form-control.req textarea').each(function(){
            if($(this).val()=='')
            {
                $(this).closest('.form-control').addClass('error');
                flagError++;
            }
        });

        t.find('.form-control.email.req').each(function(){
            var pattern = /^[-0-9a-z_.]+@[-0-9a-z^.]+.[a-z]{2,6}/g;
            if (pattern.test($(this).find('input').val())) {
                $(this).closest('.form-control').removeClass('error');
            }
            else {
                $(this).closest('.form-control').addClass('error');
                flagError++;
            }
        });


        if(flagError==0)
        {
            t.attr("data-result", t.find('input[name="form_result"]').val());
            t.attr("data-ok", t.find('input[name="form_ok"]').val());
            t.attr("data-ajax", t.find('input[name="form_ajax"]').val());

            var dataResult = t.attr("data-result");
            var dataAjax = t.attr("data-ajax");
            var dataOk = t.attr("data-ok");
                console.log(dataResult+'='+dataAjax);
            var data = t.serializeArray();
                console.log(data);
            data.push({'name': dataAjax, 'value': 'y'});
            data.push({'name': 'iblock_submit', 'value': 'send'});
            data.push({'name': 'submit', 'value': 'send'});

            $.post(
                t.attr('action'),
                data,
                function(data) {
                    $('#'+dataResult).html(data);
                });

/*
            $.fancybox.close();

            $.fancybox('<div class="send-ok">' +
            '<p class="h2">Ваш вопрос отправлен!</p>'+
            '</div>');
*/
            if(dataAjax === 'ajax_form') {
                $(this).closest('.' + dataOk).html('<div class="send-ok">' +
                '<p class="hOk">Ваш вопрос отправлен!</p><a id="close_2">x</a></div>');
            }
            if(dataAjax === 'ajax_rew') {
                $(this).closest('.' + dataOk).html('<div class="send-ok">' +
                '<p class="hOk">Ваш отзыв отправлен!</p><a id="close_2">x</a></div>');
            }
            if(dataAjax === 'ajax_phone') {
                $('.ww-ok .y-ok').html('<div class="send-ok">' +
                '<p class="hOk">Ваш запрос отправлен!</p>' +
                '<a id="close_">x</a>' + /*
                 'Спасибо за проявленный интерес.<br>Мы свяжемся с Вами в самое ближайшее время..' +
                 '<p class"h2">Летайте вместе с нами!</p>'+*/
                '</div>');
                $('#ww-phone_res').css('display', 'none');
                $('#phone').addClass('bg_body');
            }
            return false;
        }
    });


    /*	$('.ww-banner-list .jcarousel').jcarousel(); */
            
	$('.banner-list .jcarousel')
		.jcarousel({
			wrap: 'circular'
		})
        .on('jcarousel:animate', function(event, carousel) {
            $(this).find(".text").children().animate({opacity: 0},0);
        })
        .on('jcarousel:animateend', function(event, carousel) {
            $(this).find(".text").children().animate({opacity: 0.9},100);
        })
	    .jcarouselAutoscroll({
	        interval: 10000,
	      //  target: '+=1',
	        autostart: true
	    });


        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });         
            
       $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination();
            

		$(".various").fancybox({
			fitToView	: false,
			autoSize	: true,
			closeClick	: false,
			scrolling :  'no',
			openEffect	: 'none',
			closeEffect	: 'none'
		});
});