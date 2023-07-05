(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Skills
    $('.skill').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);

$(document).ready(function () {
    $('.nav li a').click(function(e) {
    
    $('.nav li.active').removeClass('active');
    
    var $parent = $(this).parent();
    $parent.addClass('active');
    e.preventDefault();
    });
    });
    
// country change

function countryChange() {
    var countryState = [
        [
            'US', [
            ['', ''],
            ['AL', 'Alabama'],
            ['AK', 'Alaska'],
            ['AZ', 'Arizona'],
            ['AR', 'Arkansas'],
  ], ],
[
            'CA', [
            ['', ''],
            ['AB', 'Alberta'],
            ['BC', 'British Columbia'],
            ['MB', 'Manitoba'],
            ['NB', 'New Brunswick'],
  ]],
[
            'IND', [
            ['', ''],
            ['TN', 'TamilNadu'],
            ['KL', 'Kerala'],
            ['MP', 'Madhya Pradhesh'],
            ['AP', 'Andra Pradhesh'],
  ]]
   ];

    var countryElement = document.getElementById('countryId');
    var stateElement = document.getElementById('stateId');
    var stateLabelElement = document.getElementById('stateLabel');

if (countryElement && stateElement) {
        var listOfState = [
            ['XX', 'None']
        ];

        var currentCountry = countryElement.options[countryElement.selectedIndex].value;
        for (var i = 0; i < countryState.length; i++) {
            if (currentCountry == countryState[i][0]) {
                listOfState = countryState[i][1];
            }
        }
        if (listOfState.length < 2) 
            {
            stateElement.style.display = 'none';
            stateLabelElement.style.display = 'none';
            }
    else 
        {
        stateElement.style.display = 'inline';
        stateLabelElement.style.display = 'inline';
        }
        var selectedState;
        for (var i = 0; i < stateElement.length; i++) {
            if (stateElement.options[i].selected === true) {
                selectedState = stateElement.options[i].value;
            }     
        }
        stateElement.options.length = 0;
        for (var i = 0; i < listOfState.length; i++) {
            stateElement.options[i] = new Option(listOfState[i][1], listOfState[i][0]);
            if (listOfState[i][0] == selectedState) {
                stateElement.options[i].selected = true;
            }    
        }      
    }
}