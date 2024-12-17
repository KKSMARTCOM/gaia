<section class="contact-area section-padding-top mb-5" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Contact</h3>
                    <div class="desc">
                        <p>Remplissez le formulaire pour nous contacter</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form class="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="form-lastname" class="icon lb-name">Nom <span class="text-danger"> *</span>
                            </label>
                            <div class="form-box">
                                <input type="text" name="lastname" id="form-lastname" class="input-box"
                                    placeholder="Ex: Doe">
                                <label for="form-lastname" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="form-firstname" class="icon lb-name">Prénom <span class="text-danger">
                                    *</span></label>
                            <div class="form-box">
                                <input type="text" name="firstname" id="form-firstname" class="input-box"
                                    placeholder="Ex: John">
                                <label for="form-firstname" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="form-email" class="icon lb-name">Email <span class="text-danger">
                                    *</span></label>
                            <div class="form-box">
                                <input type="text" name="email" id="form-email" class="input-box"
                                    placeholder="Ex: john@example.com">
                                <label for="form-email" class="icon lb-subject"><i class="fal fa-envelope"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <label for="form-message" class="icon lb-name">Message <span class="text-danger">
                                    *</span></label>
                            <div class="form-box">
                                <textarea class="input-box" id="form-message" placeholder="Donnez-nous plus de détails..." cols="30" rows="4"
                                    name="message"></textarea>
                                <label for="form-message" class="icon lb-message"><i class="fal fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-5">
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


@push('scripts')
    <script>
        $(document).ready(function() {
            // Csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('submit', '#contact-form', function(e) {
                e.preventDefault();

                console.log($(this).serialize());

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact') }}",
                    data: $(this).serialize(),
                    beforeSend: function() {
                        $('#submit_btn').prop("disabled", true);
                        $('#submit_btn').text('Chargement...');
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 'success') {
                            toastr.success(response.message);
                            $('#submit_btn').prop("disabled", false);
                            $('#submit_btn').text('Envoyer');
                            $('#contact-form').trigger('reset');
                        }
                    },
                    error: function(response) {
                        if (response.status == 422) {
                            let errorsMessage = $.parseJSON(response.responseText);

                            $.each(errorsMessage.errors, function(key, val) {
                                console.log(val[0]);
                                toastr.error(val[0])
                            })
                            $('#submit_btn').prop("disabled", false);
                            $('#submit_btn').text('Envoyer');

                        }
                    }
                })
            })
        })
    </script>
@endpush
