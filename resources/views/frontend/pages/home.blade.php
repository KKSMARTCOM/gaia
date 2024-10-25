@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
    <!-- Banner-Area-Start -->
    <!-- include header -->
    @include('frontend.pages.widgets.hero')

    <!-- About-Area-Start -->
    @include('frontend.pages.widgets.about')
    <!-- About-Area-End -->

    <!-- Service-Area-Start -->
    @include('frontend.pages.widgets.service')
    <!-- Service-Area-End -->


    <!-- Portfolio-Area-Start -->
    @include('frontend.pages.widgets.portfolio')
    <!-- Portfolio-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

    <!-- Contact-Area-Start -->
    @include('frontend.pages.widgets.contact')
    <!-- Contact-Area-End -->

@endsection
