@extends('frontend.layouts.master')
@section('title', 'Services')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Service-Details-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h1>{{ $service->title }}</h1>
                </div>
            </div>
            <div class="row">
                <h6>Prix : {{ $service->base_price }} FCFA (HT)</h6>
                <h6>A réaliser :</h6>
                <div>
                    {!! $service->description !!}
                </div>
                <div>
                    <button class="button-blue">Commander maintenant</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Service-Details-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
