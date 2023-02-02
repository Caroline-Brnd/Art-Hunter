/**
 * Animation du scroll de billet avec Javascript
**/
jQuery(document).ready(function($){
    // Stockage des références des différents éléments dans des variables
    rocket = $('#login-carte');
	
    // Calcul de la marge entre le haut du document et #rocket_mobile
    fixedLimit = rocket.offset().top - parseFloat(rocket.css('marginTop').replace(/auto/,0));
 
    // On déclenche un événement scroll pour mettre à jour le positionnement au chargement de la page
    $(window).trigger('scroll');
 
    $(window).scroll(function(event){
        // Valeur de défilement lors du chargement de la page
        windowScroll = $(window).scrollTop();
 
        // Mise à jour du positionnement en fonction du scroll
        if( windowScroll >= fixedLimit ){
            rocket.addClass('fixed');
        } else {
            rocket.removeClass('fixed');
        }
    });
});