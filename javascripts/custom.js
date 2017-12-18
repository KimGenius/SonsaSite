$(function () {
    $('.about-popup1 .about-popup-disable').click(function () {
        $('.about-popup1').fadeOut()
    })
    $('.about-us-item1').click(function () {
        $('.about-popup1').fadeIn()
    })

    $('.about-popup2 .about-popup-disable').click(function () {
        $('.about-popup2').fadeOut()
    })
    $('.about-us-item2').click(function () {
        $('.about-popup2').fadeIn()
    })

    $('.about-popup3 .about-popup-disable').click(function () {
        $('.about-popup3').fadeOut()
    })
    $('.about-us-item3').click(function () {
        $('.about-popup3').fadeIn()
    })

    $('.about-popup4 .about-popup-disable').click(function () {
        $('.about-popup4').fadeOut()
    })
    $('.about-us-item4').click(function () {
        $('.about-popup4').fadeIn()
    })

    $('.about-popup5 .about-popup-disable').click(function () {
        $('.about-popup5').fadeOut()
    })
    $('.about-us-item5').click(function () {
        $('.about-popup5').fadeIn()
    })

    // file download
    $('.mac-bride1').click(function () {
        window.location.assign('/file/mac-bride1.pdf');
    })
    $('.mac-bride2').click(function () {
        window.location.assign('/file/mac-bride2.pdf');
    })
    $('.sanjae').click(function () {
        window.location.assign('/file/sanjae.pdf');
    })
    $('.inbo1').click(function () {
        window.location.assign('/file/inbo1.pdf');
    })
    $('.inbo2').click(function () {
        window.location.assign('/file/inbo2.pdf');
    })
})