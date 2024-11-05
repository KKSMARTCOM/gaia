@extends('frontend.layouts.master')
@section('title', 'Realisations')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Réalisations-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center mb-4">
                    <div class="section-title">
                        <h3 class="title">{{ 'Nos réalisations' }}</h3>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation1.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'EIFFAGE GC MARINE BENIN' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Évaluation Géotechnique pré-compactage du remblai
                                                                                                                                                                                                                                                                                                                                                                                dans le cadre du projet de réhabilitation de 
                                                                                                                                                                                                                                                                                                                                                                                l\'ancien quai du Port Autonome de Cotonou.' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'ARYA' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission d\'ingénierie géotechnique G2 AVP dans le cadre
                                                                                                                                                                                                                                                                                                                                                du projet de rénovation du temple des Pythons à Ouidah' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation2.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation3.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'DISTRITECH SARL' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission d\'ingénierie géotechnique G2 AVP dans le cadre
                                                                                                                                                                                                                                                                                                                                                du projet de rénovation du temple Toligbé à Ouidah.' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'QGMI BENIN ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique de terrain
                                                                                                                                                                                                                                                                                                                                                préalable aux études d’ingénierie géotechnique des
                                                                                                                                                                                                                                                                                                                                                fondations de trois ponts prévus par le projet
                                                                                                                                                                                                                                                                                                                                                d’aménagement et de bitumage de la route
                                                                                                                                                                                                                                                                                                                                                Pénéssoulou – Alédjo – Sèmèrè (44,2 km) et des bretelles
                                                                                                                                                                                                                                                                                                                                                Pénéssoulou – frontière Togo (4,3 km), Alédjo – frontière
                                                                                                                                                                                                                                                                                                                                                Togo (6,1 km), Sèmèrè – frontière Togo (3,10 km)' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation4.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation5.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'DYJESCK SA' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission d’ingénierie géotechnique G3 phase étude
                                                                                                                                                                                                                                                                                                                                                préalable à l\'exécution d\’une villa de type R+1 avec piscine
                                                                                                                                                                                                                                                                                                                                                sise à Cotonou au quartier Jak – Akpakpa.' !!}
                            {!! 'Contrôle, suivi béton et terrassement dans le cadre du
                                                                                                                                                                                                                                                                                                                                                projet prefa à Gakpe-Ouidah.' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'MAISON BIGNON SOSSOU' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique dans le cadre
                                                                                                                                                                                                                                                                                                                                                du projet d\’amenagement de l\’ile de Meko à Ouidah' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation6.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation7.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'SIMG' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique de terrain
                                                                                                                                                                                                                                                                                                                                                préalable aux études architecturales et techniques des
                                                                                                                                                                                                                                                                                                                                                premiers bâtiments du projet Sèmè City dans la
                                                                                                                                                                                                                                                                                                                                                commune de Ouidah – Phase 1A' !!}
                        </div>
                        <a href="" class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Réalisations-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
