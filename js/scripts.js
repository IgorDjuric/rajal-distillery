$(document).ready(function () {
    //smooth scroll to #
    $("a[href^=\"#\"]").on('click', function (event) {
        if (this.hash !== "") {

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top - 90
            }, 800, function () {
                    window.location.hash = hash;
            });
        }
    });

    if (location.hash !== '') {
        console.log(location.hash);
        $(location.hash).addClass('active');

        if ($(location.hash).hasClass('active')) {
            $('.fade').each(function (i) {

                var bottom_of_object = $(this).position().top;
                var bottom_of_window = $(window).scrollTop() + $(window).height();

                /* If the object is completely visible in the window, fade it it */
                if (bottom_of_window >= bottom_of_object) {

                    $(this).animate({'opacity': '1'}, 500);

                }
            });
        }


    }


    //display divs on scroll
    $(window).scroll(function () {

        $('.fade').each(function (i) {

            var bottom_of_object = $(this).position().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window >= bottom_of_object) {

                $(this).animate({'opacity': '1'}, 500);

            }
        });

    });


    // number counter
    var a = 0;
    $(window).scroll(function () {
        if ($(".counter")[0]) {
            var oTop = $('.counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function () {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }
        }

    });

    $("#nav-link-products").mouseover(function() { $(".product-links-toggle").css('visibility','visible'); });
    $("#nav-link-products").mouseout(function() { $(".product-links-toggle").css('visibility','hidden'); });
    $(".product-links-toggle").mouseover(function() { $(".product-links-toggle").css('visibility','visible'); });
    $(".product-links-toggle").mouseout(function() { $(".product-links-toggle").css('visibility','hidden'); });

    $("#nav-link-selling").mouseover(function() { $(".selling-links-toggle").css('visibility','visible'); });
    $("#nav-link-selling").mouseout(function() { $(".selling-links-toggle").css('visibility','hidden'); });
    $(".selling-links-toggle").mouseover(function() { $(".selling-links-toggle").css('visibility','visible'); });
    $(".selling-links-toggle").mouseout(function() { $(".selling-links-toggle").css('visibility','hidden'); });

    //audio
    var audio = document.getElementById("myAudio");
    audio.volume = 0.5;


    //mobile menu sublist toggle
    $('.nav-item-selling-btn').click(function () {
        $('.nav-item-selling-btn').toggleClass('fa-plus fa-minus');
       $('.mobile-sub-links-selling').slideToggle();
    });
    $('.nav-item-products-btn').click(function () {
        $('.nav-item-products-btn').toggleClass('fa-plus fa-minus');
        $('.mobile-sub-links-products').slideToggle();
    });

});





// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st < 200) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}


//Gallery
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox({alwaysShowClose: true});
});

