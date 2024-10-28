@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero');
    {{-- Hero section --}}

    <!-- About-Area-Start -->
    <section class="section-padding">
        <div class="container">

        </div>
    </section>
    <!-- About-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
