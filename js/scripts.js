$(document).ready(function () {
    //smooth scroll to #
    $("a").on('click', function (event) {
        if (this.hash !== "") {

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
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

                    $(this).animate({'opacity': '1'}, 600);

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

                $(this).animate({'opacity': '1'}, 600);

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

    var audio = document.getElementById("myAudio");
    audio.volume = 0.5;
});


//Gallery
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox({alwaysShowClose: true});
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



//contact form
$(function() {
    var form = $('#myForm');

    // var formMessages = $('#form-messages');

    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();
        var name = $("input#name").val();
        var email = $("input#email").val();
        var message = $("textarea#message").val();
        $.ajax({
            type: 'POST',
            url: "../email.php",
            data: {
                name: name,
                email: email,
                message: message
            }
        })
    });
});




