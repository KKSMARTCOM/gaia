@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Contact-Area-Start -->
    <section class="contact-area section-padding-gaia" id="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ $contactTitle->title ?? 'Formulaire de contact' }}</h3>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Contact-Form -->
                    <form class="contact-form" id="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form-lastname" class="icon lb-name">Nom <span class="text-danger"> *</span>
                                </label>
                                <div class="form-box">
                                    <input type="text" name="lastname" id="form-lastname" class="input-box"
                                        placeholder="Ex: Doe">
                                    <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="form-firstname" class="icon lb-name">Prénom <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <input type="text" name="firstname" id="form-firstname" class="input-box"
                                        placeholder="Ex: John">
                                    <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="form-name" class="icon lb-name">Email <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <input type="text" name="email" id="form-email" class="input-box"
                                        placeholder="Ex: john@example.com">
                                    <label for="form-subject" class="icon lb-subject"><i
                                            class="fal fa-envelope"></i></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="form-name" class="icon lb-name">Message <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <textarea class="input-box" id="form-message" placeholder="Donnez-nous plus de détails..." cols="30" rows="4"
                                        name="message"></textarea>
                                    <label for="form-message" class="icon lb-message"><i class="fal fa-edit"></i></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-box text-center">
                                    <button class="button-blue-trans mouse-dir" type="submit" id="submit_btn">Envoyer
                                        <span class="dir-part"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Contact-Form / -->
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            console.log('Script AJAX chargé'); // Test

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
            });

            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('contact') }}",
                    data: $(this).serialize(),
                    beforeSend: function() {
                        $('#submit_btn').prop('disabled', true).text('Chargement...');
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Succès !',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                $('#contact-form')[0].reset();
                                $('#submit_btn').prop('disabled', false).text(
                                    'Envoyer');
                            });
                        } else {
                            Swal.fire({
                                title: 'Erreur !',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK',
                            });
                        }
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            let errorMessages = '';

                            $.each(errors, function(key, value) {
                                errorMessages += `<p>${value[0]}</p>`;
                            });

                            Swal.fire({
                                title: 'Erreur !',
                                html: errorMessages,
                                icon: 'error',
                                confirmButtonText: 'OK',
                            });
                        }

                        $('#submit_btn').prop('disabled', false).text('Envoyer');
                    },
                });
            });
        });
    </script>
@endpush
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
