@extends('frontend.layouts.master')
@section('title', 'Realisations')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero');
    {{-- Hero section --}}

    <!-- Réalisations-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ 'Nos réalisations' }}</h3>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation1.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'EIFFAGE GC MARINE BENIN' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Évaluation Géotechnique pré-compactage du remblai
                                                                                        dans le cadre du projet de réhabilitation de 
                                                                                        l\'ancien quai du Port Autonome de Cotonou.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'ARYA' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission d\'ingénierie géotechnique G2 AVP dans le cadre
                                                        du projet de rénovation du temple des Pythons à Ouidah' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation2.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation3.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'DISTRITECH SARL' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission d\'ingénierie géotechnique G2 AVP dans le cadre
                                                        du projet de rénovation du temple Toligbé à Ouidah.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
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
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation4.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation5.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
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
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'MAISON BIGNON SOSSOU' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique dans le cadre
                                                        du projet d\’amenagement de l\’ile de Meko à Ouidah' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation6.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation7.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'SIMG' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique de terrain
                                                        préalable aux études architecturales et techniques des
                                                        premiers bâtiments du projet Sèmè City dans la
                                                        commune de Ouidah – Phase 1A' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AGTS BENIN ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique de terrain
                                                        dans le cadre du projet de construction de dallots sur
                                                        l\'axe Bohicon – Dassa' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation8.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation9.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'CNERTP' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission de reconnaissance géotechnique dans le cadre
                                                        du projet de construction de 250 habitats lacustres à Ganvié.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'BIOLYNX & TIC' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Mission d\'ingénierie géotechnique G2 AVP dans le
                                                        cadre du projet d\’extension de l\’usine de Biolynx & TIC
                                                        Bénin à Sèmè-Kpodji.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation10.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation11.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'VINIT FOOD' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre d\’un projet de construction
                                                        d\’un entrepôt de biscuit de 5 000m² dans la zone
                                                        industrielle de Glo-Djigbé.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'HNRB' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre d’aménagement des berges
                                                        de bassins en matelas Reno.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation12.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation13.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'Groupement AZARA / CIEB' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Essais de laboratoire dans le cadre du projet d’extention
                                                            et de réhabilitation du centre d’enfouissement
                                                            technique de Ouessè Lot .' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'YATTASSAYE & COMPAGNY ENERGY BENIN SA' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre de la construction de
                                                        plusieurs stations-services à Cotonou.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation14.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation15.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AGTS Cote d’ivoire' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Essais de laboratoire et contrôle terrassement dans le
                                                        cadre de plusieurs projets dans tout le bénin.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AFRICAN CERAMICS SOLUTIONS ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol, contrôle, suivi béton et terrassement dans
                                                            le cadre du projet Glo-Djigbé Industrial Zone (GDIZ).' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation16.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation17.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'ARCHI CONSEILS' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre de la Construction du siège
                                                            de ASA à Cotonou et d\’un
                                                            bâtiment au sein de l\’UAC / Abomey-Calavi.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'DYJESCK ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle, suivi, béton et terrassement au sein de la GDIZ
                                                        pour le compte de DYJESCK dans le cadre de la
                                                        construction d’usine de provenderie et des clôtures BTEX et BTC.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation18.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation19.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'DYJESCK MAURI SERVICES' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle, suivi, béton et terrassement au sein de la GDIZ
                                                            dans le cadre de la construction des caniveaux linéaires.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'HNRB' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre de la construction des
                                                            collecteurs assainissement pluvial et aménagement de
                                                            voies connexes dans les bassins pa3 & y dans la ville de
                                                            Cotonou : lot papc-bm_t01.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation20.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation21.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'SIMG' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre de la construction d\’un Collège
                                                            d\’Enseignement Général dans la cité de GANVIE.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'COLAS GABON ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Ingénierie géotechnique
                                                            étude de stabilité du talu de la zi 12.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation22.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation23.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'SOCIETE AFRICAINE DE FONDATION SARL' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Travaux de fonçage des pieux de type bois pour la
                                                            construction des habitats lacustres a GANVIE.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'Groupement AZARA / CIEB' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle, suivi béton et terrassement dans le cadre de la
                                                            construction de centre d\'enfouissement de Takon.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation24.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation25.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AGTS' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude et analyse des sols dans le cadre du projet de
                                                            construction de 13 châteaux d’eau dans le zou, mono, couffo.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'YATTASSAYE & COMPAGNY ENERGY BENIN SA ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol dans le cadre de la construction d’une
                                                        station-service.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation26.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation27.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'SIPI-Bénin' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Réalisation d\'études de sol, analyse et préparation de
                                                            rapports pour la phase 2 (400Ha) du projet Glo-Djigbé
                                                            Industrial Zone (GDIZ).' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'Benin Soya' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude et analyse des sols et préparation de rapports
                                                            géotechnique pour 400 hectares dans le cadre du projet
                                                            de construction de l’usine de Provenderie dans la GDIZ.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation28.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation29.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AFRICAN CERAMICS SOLUTIONS' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol, contrôle, suivi béton et terrassement dans le
                                                            cadre du projet Glo-Djigbé Industrial Zone (GDIZ).' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'CONSTRUCTION & CONSULTING SERVICE INFRASTRUCTURE' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle, suivi béton et terrassement dans le cadre des
                                                            constructions des usines suivantes (dans la GDIZ) :
                                                            Cashew processing Unit 1, Furniture factory, 
                                                            PP bag factory, Conventional Soya Factory, 
                                                            Organic Soya Factory.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation30.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation31.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'Cnaf Ins. Taah. Tic. Ltd Sti' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol de fondation pour la construction d’une
                                                            école à Grand Popo.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'GML' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle, suivi, terrassement et béton dans le cadre des
                                                            constructions suivantes (dans la GDIZ) : Concrete solution Benin batching plant, 
                                                            Socket factory.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation32.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation33.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'Groupement AZARA / CIEB' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle du terrassement par essai de plaque dans le
                                                            cadre de la construction de centre
                                                            d\'enfouissement de Takon' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AMFREVILLE MECANIQUE LOCATION ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle du terrassement par essai de plaque au sein de
                                                            la GDIZ pour le compte de AML dans le cadre de la
                                                            construction des usines de textile (Unit 2 and 3).' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation34.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation35.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'GMT' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle, suivi, béton au sein de la GDIZ dans le
                                                        cadre de la construction de murs de clôture de
                                                        bâtiments administratifs et de toilettes de 5 unités
                                                        de transformation de noix d’anacardes (10 000 m²
                                                        /unité).' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'ARCHI CONSEILS ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Etude de sol de fondation pour la construction d\’un
                                                            bâtiment de type R+4.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation36.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation37.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'GLORY BTP' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle terrassement au sein de la GDIZ dans le
                                                        cadre de la construction de l\’usine de carreaux.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'BUSINESS & ENGINEERING ' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle béton et terrassement au sein de la GDIZ
                                                            dans le cadre de la construction de 2 sous-stations
                                                            d\’électricité.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation38.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
            </div> <br><br>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <figure class="about-image image-container">
                        <img src="{{ asset('frontend/assets/images/realisation39.png') }}" alt=""
                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                            {{ 'AFRIT TP' }}</h4>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            {!! 'Contrôle béton et terrassement au sein de la GDIZ
                                                            dans le cadre de la construction de l\’usine de
                                                            transformation de coques de noix d\’anacarde en huile.' !!}
                        </div>
                        <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">En savoir plus</span>
                            <span class="dir-part"></span>
                        </a>
                    </div>
                </div>

            </div> <br><br>
        </div>
    </section>
    <!-- Réalisations-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
