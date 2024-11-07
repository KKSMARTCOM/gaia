@extends('frontend.layouts.master')
@section('title', 'Acceuil')

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


    <!-- Achievement-Area-Start -->
    @include('frontend.pages.widgets.achievement')
    <!-- Achievement-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

    <!-- Contact-Area-Start -->
    @include('frontend.pages.widgets.contact')
    <!-- Contact-Area-End -->

@endsection
