@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero');
    {{-- Hero section --}}

    <!-- Service-Details-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h1>Étude de sol pour les bâtiments RDC à RDC+ 2 étages</h1>
                </div>
            </div>
            <div class="row">
                <h6>A réaliser :</h6>
                <ul>
                    <li>4 Sondages pénétromètres dynamiques a 10 m de profondeur </li>
                    <li>1 sondage pénétromètre statique à pointe mécanique à 10 m ou au refus</li>
                    <li>1 sondage à la tarière de 3 à 5 m et essais de laboratoire sur les matériaux prélevés</li>
                </ul>
                <h6>Prix : 250 000 FCFA (HT)</h6>
                <div>
                    <button class="button-blue">Commander maintenant</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Service-Details-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
