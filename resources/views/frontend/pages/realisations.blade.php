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

            @if ($achievements && $achievements->count() > 0)
                <div class="row">
                    @foreach ($achievements as $index => $item)
                        <div class="col-lg-6 mb-5">
                            <figure class="about-image image-container">
                                <img src="{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}"
                                    alt="{{ $item->title }}" class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                            </figure>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="about-text">
                                <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                                    {{ $item->title }}</h4>
                                <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                    {!! $item->description !!}
                                </div>
                                {{-- <a href="{{ route('show.achievement', $item->id) }}"
                                    class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                                    <span class="text">En savoir plus</span>
                                    <span class="dir-part"></span>
                                </a> --}}
                            </div>
                        </div>
                        {{-- @if ($index % 2 == 0)
                        @else
                            <div class="col-lg-6 mb-4">
                                <div class="about-text">
                                    <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                                        {{ $item->title }}</h4>
                                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                        {!! Str::limit($item->description, 100, '...') !!}
                                    </div>
                                    <a href="{{ route('show.achievement', $item->id) }}"
                                        class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="text">En savoir plus</span>
                                        <span class="dir-part"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <figure class="about-image image-container">
                                    <img src="{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}"
                                        alt="{{ $item->title }}" class="wow fadeInUp image-responsive"
                                        data-wow-delay="0.3s">
                                </figure>
                            </div>
                        @endif --}}
                    @endforeach
                </div>
            @endif
    </section>
    <!-- Réalisations-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
