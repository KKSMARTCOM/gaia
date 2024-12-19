@extends('frontend.layouts.master')
@section('title', 'Recrutement')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Finish-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="success-image">
                        <img src="{{ asset('frontend/assets/images/success.svg') }}" alt="Success">
                    </div>
                    <div class="desc text-center p-2">
                        <h4>Votre demande d'essai a été bien reçu !</h4>
                        {{-- <p>Votre commande vous sera livrée dans les plus brefs délais. En attendant, si vous avez besoin
                            de produits supplémentaires, vous pouvez consulter la liste des produits.</p> --}}
                        <div class="text-center">
                            <a href="{{ route('home') }}">Retour à l'acceuil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Finish-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
