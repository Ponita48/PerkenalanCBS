$(document).ready(function(){
	$(".main-menu-btn").click(function(){ //toggle main-menu
        $(".main-menu").addClass("show");

        window.setTimeout(function(){
            $(".main-menu").addClass("slide")
        },0);
    });
    $('.smoke').click(function(){ //exit main menu by click on smoke
	    $('.main-menu').removeClass('slide')

	    window.setTimeout(function(){
	        $(".main-menu").removeClass("show")
	    },100);
    });
    
    $('#search_icon').click(function() {
		$('#search').slideToggle();
	});

	$('#tgl_lahir').datepicker();
    // $('span.close').click(function(){ //backup close alert
    // 	$(this).parent().remove();
    // });
    $ (function(){
        $('#navigation-panel').show();
        $('#toggleNav').click(function(){
            $('#navigation-panel').slideToggle('fast');
        });
    });
    $('#btn_kirim').click(function() {
        $('#modalConf').modal('show');
    });

});