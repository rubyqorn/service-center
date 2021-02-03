$(document).ready(function(){
    let promotionSlider = $('#promotion-slider .owl-carousel');
    
    promotionSlider.owlCarousel({
        loop:true,
        margin:15,
        items: 4,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('#promotion-slider #navs .next').click(function() {
        promotionSlider.trigger('next.owl.carousel');
    })

    $('#promotion-slider #navs .prev').click(function() {
        promotionSlider.trigger('prev.owl.carousel');
    })

    $('#promotion-slider .owl-dots .owl-dot').click(function(e) {
        owl.trigger('to.owl.carousel', [$(this).index(), 300]);
        $('#promotion-slider .owl-dots .active').removeClass('active');
        $(e.target).addClass('active');
    });

    let reviewsSlider = $('#reviews .owl-carousel');
    
    reviewsSlider.owlCarousel({
        stagePadding: 40,
        margin: 40,
        loop:true,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('#reviews-preview #slider-buttons #next-review-slide').click(function() {
        reviewsSlider.trigger('next.owl.carousel');
    })

    $('#reviews-preview #slider-buttons #previous-review-slide').click(function() {
        reviewsSlider.trigger('prev.owl.carousel');
    })

    $('#repair-navbar .toggle-menu .menu-toggler').click(function() {
        $('#repair-navbar .toggle-menu .col-lg-12').slideToggle('slow');
    })

    $('#footer .service-links .links .title .service-dropdown').click(function() {
        $('#footer .service-links .info').slideToggle('slow');
    })

    $('#footer .service-links .links .title .devices-dropdown').click(function() {
        $('#footer .service-links .devices').slideToggle('slow');
    })
});

function toggleAccordionItem(blockName) {
    let collapsibleBlock = document.querySelector('#accordion #accordion-block #accordion-item #'+blockName);
    
    if (collapsibleBlock.style.display == 'none') {
        collapsibleBlock.style.display = 'block';
    } else {
        collapsibleBlock.style.display = 'none';
    }
}

function toggleRequestForm() {
    let modal = document.querySelector("#request-form-modal");
    let btn = document.querySelector("#request-form");
    let span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

toggleRequestForm();
