@extends('frontend.layouts.master')
@section('title', 'A propos')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- About-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="mb-4">{{ $about->title ?? 'A propos de GAIA' }}</h1>
                </div>
            </div>
            <div class="achievement-image">
                <div style="width: 600px">
                    <figure class="image-container">
                        <img class="" style="height: 100%;width:100%;object-fit:cover;border-radius:10px"
                            src="{{ asset($about->image) }}" alt="About Image">
                    </figure>
                </div>
            </div>
            <div class="row about-description">
                {!! $about->description !!}
            </div>
        </div>
    </section>
    <!-- About-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
