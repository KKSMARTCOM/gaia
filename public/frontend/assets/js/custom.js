/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).on('ready', function () {
    // Csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /* Navbar Toggle */

    $('.navbar-toggler').on('click', function () {
        $('.mobile-navbar').css({ 'display': 'block' });
    });

    $('.navbar-close').on('click', function () {
        $('.mobile-navbar').css({ 'display': 'none' });
    });

    $('.nav-item').on('click', function () {
        $('.mobile-navbar').css({ 'display': 'none' });
    });

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
                            <td>${response.description}</td>
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
                        $('table tbody td.price-column input[name="price"]').val(response);
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error("Erreur lors de la récupération du prix : " + error)
                }
            });
        }

    });

    $('#essai-form').on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData();

        //formData.append('transactionId', transactionId);
        formData.append('lastname', $('#form-lastname').val());
        formData.append('firstname', $('#form-firstname').val());
        formData.append('phone', $('#form-phone').val());
        formData.append('address', $('#form-address').val());
        formData.append('email', $('#form-email').val());
        formData.append('service_id', $('#form-services').val());
        formData.append('commune_id', $('#form-commune').val());
        formData.append('building_type', $('#form-building_type').val());
        //formData.append('price', price);

        let fileInput = $('#form-plan')[0];
        if (fileInput.files.length > 0) {
            formData.append('topographic_survey', fileInput.files[0]);
        }

        let button = $('#submit_btn'); // Stocke le bouton
        let originalText = button.html(); // Sauvegarde le texte original
        let loader = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Envoi...';
        let finishUrl = button.data("finish-url");

        button.html(loader).prop('disabled', true); // Désactive et change le texte du bouton


        let url = "/essai-store";

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.status == "success") {
                    toastr.success(response.message);
                    window.location.href = finishUrl;
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText);
                button.html(originalText).prop('disabled', false); // Réactive le bouton
            },
            complete: function () {
                button.html(originalText).prop('disabled', false); // Réactive le bouton
            }
        });

        //const price = $('#form-price').val();

        /* openKkiapayWidget({
            amount: price,
            position: "center",
            callback: "https://www.gaialab-bj.com/finish",
            data: "Paiement GAIA",
            //sandbox: "true",
            theme: "green",
            key: "0a21cd7b21155d517c094fdbff1a07c8b5809f38"
        }); */

        /* addSuccessListener(response => {
            console.log(response);
            const transactionId = response.transactionId;

            

        });

        addFailedListener(error => {
            console.log(error);
        }); */
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
    const selectedOption = document.querySelector('input[name="client_category"]:checked');

    if (selectedOption) {
        if (selectedOption.value === 'entreprise') {
            window.location.href = routeDevis; // Redirection vers la route 'devis'
        } else if (selectedOption.value === 'particulier') {
            window.location.href = routeEssai; // Redirection vers la route 'essai'
        }
    } else {
        // Affiche un message d'erreur si aucune option n'est sélectionnée
        const alertText = document.querySelector('.alert-text');
        alertText.textContent = 'Veuillez sélectionner une catégorie avant de continuer.';
    }
}


function updatePlaceholder(input, textInputId) {
    // Met à jour le placeholder avec le nom du fichier sélectionné
    const file = input.files[0];
    const maxSize = 10 * 1024 * 1024;
    const fileName = input.files[0]?.name || "Aucun fichier sélectionné";

    if (file && file.size > maxSize) {
        toastr.error("Le fichier dépasse la taille maximale autorisée de 10 Mo.");
        document.getElementById(textInputId).value = "Aucun fichier sélectionné";
    } else {
        document.getElementById(textInputId).value = fileName;
    }
}

function updatePlaceholderessai(input) {
    const file = input.files[0];
    const maxSize = 10 * 1024 * 1024;
    const fileName = input.files[0]?.name || 'Aucun fichier sélectionné';

    if (file && file.size > maxSize) {
        toastr.error("Le fichier dépasse la taille maximale autorisée de 10 Mo.");
        document.getElementById('custom-file-input').value = "Aucun fichier sélectionné";
    } else {
        document.getElementById('custom-file-input').value = fileName;
    }

}




