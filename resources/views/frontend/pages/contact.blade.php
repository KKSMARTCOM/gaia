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
                                <label for="form-name" class="icon lb-name">Nom <span class="text-danger"> *</span> </label>
                                <div class="form-box">
                                    <input type="text" name="name" id="form-name" class="input-box"
                                        placeholder="Ex: Doe">
                                    <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="form-name" class="icon lb-name">Prénom <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <input type="text" name="email" id="form-email" class="input-box"
                                        placeholder="Ex: John">
                                    <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="form-name" class="icon lb-name">Email <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <input type="text" name="subject" id="form-subject" class="input-box"
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
