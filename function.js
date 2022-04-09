// smooth scrooling

jQuery(document).ready(function ($) {
    var scrollSpy = new bootstrap.ScrollSpy(document.body, { target: '#navbar-example' });

    $('#MyName .NamaSaya').addClass('Muncul');
    $('#MyFoto .rounded-circle').addClass('muncul');

    $('#MyCertificates .card').hover(function () {
        $('.star').css({
            'transition': '2s',
            'color': '#ffd700'
        });
    });

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

        if (wScrool > $('#MyProjects').offset().top - 200) {
            $('.card ').addClass('muncul');

        } else if (wScrool > $('#AboutMe').offset().top - 200) {
            $('.efek1').addClass('Muncul');

        } else if (wScrool > $('#MyProjects').offset().top - 200) {
            $('.efek1').addClass('Muncul');

        }


    });



});
