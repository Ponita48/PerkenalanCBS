$(document).ready(function(){
    console.log("document ready");
    $(".main-menu-btn").click(function(){ //toggle main-menu
        $(".main-menu").addClass("show");

        window.setTimeout(function(){
            $(".main-menu").addClass("slide")
        },0);
        console.log("show main menu");
    });
    $('.smoke').click(function(){ //exit main menu by click on smoke
        $('.main-menu').removeClass('slide')

        window.setTimeout(function(){
            $(".main-menu").removeClass("show")
        },100);
        console.log("close main menu");
    });
    $('.close-menu-btn').click(function(){
        $('.main-menu').removeClass('slide')

        window.setTimeout(function(){
            $(".main-menu").removeClass("show")
        },100);
        console.log("close main menu");
    })
    
    $('#search_icon').click(function() {
        $('#search').slideToggle();
    });

    $('#tgl_lahir').datepicker();
    // $('span.close').click(function(){ //backup close alert
    //  $(this).parent().remove();
    // });
    $('#navigation-panel').show();
        $('#toggleNav').click(function(){
            $('#navigation-panel').slideToggle('slow');
        });
    $('#btn_kirim').click(function() {
        $('#modalConf').modal('show');
    });

});