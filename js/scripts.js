$(document).ready(function () {
    // Code actif

    // Menu Burger
    $('.burger').sidr({
        name: 'respNav',
        source:'.header__secondnav',
        displace: false,
        
    });

    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });

    // Carousel

    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ['Précédent', 'Suivant'],
        dots: false,
        autoplay: true,
        autoplaySpeed: 900,
        autoplayHoverPause: true,
        margin:10,
        responsive:{
            0:{
                items:1,
                
            },
            768:{
                items:2,
                
            },
            992:{
                items:3,
                
            }
        }

    });

   



}); /*toujours faire gaffe a ce que cet element soit toujours en bas*/