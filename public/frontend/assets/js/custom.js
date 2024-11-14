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

    $('#form-services').on('change', function () {

        var serviceId = $(this).val();

        //console.log(serviceId);

        if (serviceId) {
            $.ajax({
                url: '/communes/' + serviceId,
                type: 'GET',
                success: function (response) {

                    //console.log(response.communes);

                    $('#form-commune').empty().append(
                        '<option value="">Sélectionner une commune</option>');

                    $.each(response.communes, function (key, commune) {
                        $('#form-commune').append('<option value="' + commune.id +
                            '" data-price="' + commune.pivot.additional_price + '">' +
                            commune.name + '</option>');
                    });

                    // Mise à jour du tableau avec les informations du service sélectionné
                    if (response) {
                        // Mettez à jour les champs du tableau ici
                        $('#service-table tbody').html(`
                        <tr>
                            <td>${response.title}</td>
                            <td>
                                    ${response.description}
                               
                            </td>
                            <td class="price-column" style="white-space: nowrap; text-align: center;">
                                ${response.base_price} FCFA HT
                            </td>
                        </tr>
                    `);
                    }

                },
                error: function (xhr, status, error) {
                    toastr.error("Erreur lors de la récupération du service : " + error)
                }
            })
        }
    })

    $('#form-commune').on('change', function () {
        var communeId = $(this).val();
        var serviceId = $('#form-services').val();



        if (communeId) {
            $.ajax({
                url: '/services/' + serviceId + '/communes/' + communeId + '/price',
                type: 'GET',
                success: function (response) {
                    console.log(response);
                    if (response) {
                        $('table tbody td.price-column').text(response + ' FCFA TTC');
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error("Erreur lors de la récupération du prix : " + error)
                }
            });
        }

    });

})

/* $(function () {
    $('#load-more').on('click', function () {
        $('.service-more').css({
            'display': 'block'
        });
    })

}); */

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
