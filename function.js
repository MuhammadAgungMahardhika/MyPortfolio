// smooth scrooling
var scrollSpy = new bootstrap.ScrollSpy(document.body, {target: '#navbar-example'});

jQuery(document).ready(function ($) {

    $(window).scroll(function () {

        var wScrool = $(this).scrollTop();
        // parallax efex pada tulisan Nama saya
        

        $('#MyFoto').css({
            'transform': 'translate(0px,' + wScrool / 12 + '%)'
        });

        $('#MyName').css({
            'transform': 'translate(0px,' + wScrool / 4 + '%)'
        });

        //mengubah navbar menjadi fixed saat di seksi about

        // if(wScrool >= $('#AboutMe').offset().top-20){

        //   $('#Nav').css({
        //     'position' : 'fixed',
        //     'background-color' : 'rgb(52,56,114)'
            
        //   });
        // }else if(wScrool < $('#AboutMe').offset().top-0){
        //   $('#Nav').css({
        //     'position' : 'absolute',
        //     'background-color' : 'transparent'
        //   });
        // }

        //parralax efek pada my projects

        if(wScrool > $('#MyProjects').offset().top-150){
            $('.card ').addClass('muncul');
         
        }


    });

  
    $(window).on('load',function(){
        $('#MyName .NamaSaya').addClass('Muncul');
        $('.rounded-circle').addClass('MunculFoto');
    });

});
