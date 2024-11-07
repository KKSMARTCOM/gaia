@extends('frontend.layouts.master')
@section('title', 'Réalisations')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Achievement-Details-Area-Start -->
    <section class="blog-details section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title">{{ $achievement->title }}</h2>
                    <div class="blog-meta">
                        <div class="single-meta">
                            <div class="meta-title">Réalisé le</div>
                            <h4 class="meta-value"><a href="javascript:void(0)">{{ $achievement->created_at }}</a></h4>
                        </div>
                    </div>
                    <div class="achievement-image">
                        <div style="width: 600px">
                            <figure class="image-container">
                                <img class="" style="height: 100%;width:100%;object-fit:cover;border-radius:10px"
                                    src="{{ asset($achievement->image) }}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="description">{!! $achievement->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Achievement-Details-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
