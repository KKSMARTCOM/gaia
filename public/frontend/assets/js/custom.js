/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).on('ready', function () {
    $('.site-head').slick({
        dots: true,
        arrows: false,
        infinite: true,
        centerMode: false,
        autoplay: true,
        vertical: false,
        verticalSwiping: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
})

$(function () {
    $('#load-more').on('click', function () {
        $('.service-more').css({
            'display': 'block'
        });
    })

});

function redirectToRoute() {
    // Récupère les routes à partir des attributs data du bouton "Continuer"
    const button = document.querySelector('button[onclick="redirectToRoute()"]');
    const routeDevis = button.getAttribute('data-route-devis');
    const routeEssai = button.getAttribute('data-route-essai');

    // Vérifie quel bouton radio est sélectionné
    const entrepriseChecked = document.querySelector('input[name="client_category"][value="entreprise"]').checked;
    const particulierChecked = document.querySelector('input[name="client_category"][value="particulier"]').checked;

    // Redirige en fonction de la sélection
    if (entrepriseChecked) {
        window.location.href = routeDevis;  // Redirection vers la route 'devis'
    } else if (particulierChecked) {
        window.location.href = routeEssai;  // Redirection vers la route 'essai'
    } else {
        $('.alert-text').text('Vous devez choisir une catégorie avant de continuer');
    }
}
