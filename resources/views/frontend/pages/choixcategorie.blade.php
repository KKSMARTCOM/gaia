@extends('frontend.layouts.master')
@section('title', 'Choix de catégorie client')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero')
    {{-- Hero section --}}

    <!-- Choix de catégorie client-Area-Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ $contactTitle->title ?? 'Choix de catégorie client' }}</h3>
                        <div class="col-sm-12">
                            <p>{{ $choixTitle->sub_title ?? 'Choisissez votre catégorie puis cliquez sur le bouton continuer.' }}</p>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">
                    <div class="form-group">
                        <label class="mr-4 mb-3" style="margin-right: 60px;">
                            <input type="radio" name="client_category" value="entreprise" required class="radio-custom">
                            <span class="radio-label">Entreprise</span>
                        </label>
                        <label class="mb-3">
                            <input type="radio" name="client_category" value="particulier" required class="radio-custom">
                            <span class="radio-label">Particulier</span>
                        </label>
                    </div><br>
                    <div class="col-sm-12 text-center">
                        <button class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s" type="submit" id="submit_btn" onclick="redirectToRoute()"
                            data-route-devis="{{ route('devis') }}" 
                            data-route-essai="{{ route('essai') }}">
                            <span class="text">Continuer</span>
                            <span class="dir-part"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choix de catégorie client-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
