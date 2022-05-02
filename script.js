$(document).ready(function () {
    $('.fa-xmark').hide();
    $('a').hide();


    $('.fa-bars').click(function () {
        $('a').fadeIn();
    $('.fa-xmark').fadeIn();
    $('.fa-bars').fadeOut(1000);


    $('.fa-xmark').click(function () {
    $('.fa-bars').fadeIn(1000);

    });
    });


    $('.hd2').hide();
    $('.h3').hide();
    setInterval(function(){ 
        $('.hd1').fadeIn()
        $('.hd1').fadeOut()
        $('.hd2').fadeIn(2000)
        $('.hd2').fadeOut()
        $('.hd3').fadeIn(3000)
        console.log("Oooo Yeaaa!");
    },5000, 5000);

    $('.ab').click(function () {
        $('.header').hide();
        $('#about').show();
    });
}); 
