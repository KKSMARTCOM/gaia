@php

@endphp
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAIA | @yield('title')</title>
    <!-- Include CSS Stylesheet -->
    @include('frontend.layouts.inc.style')
</head>

<body>
    {{-- Preloader --}}
    <div class="preloader">
        <img src="{{ asset('frontend/assets') }}/images/preloader.gif" alt="">
    </div>

    <!-- include Navbar -->
    <nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend/assets/images/logo-w.png') }}" alt="logo" class="logo1">
                <img src="{{ asset('frontend/assets/images/logo-b.png') }}" alt="logo" class="logo2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('/') ? 'active' : '' }}" aria-current="page"
                            href="/">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#services-page">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('realisations') ? 'active' : '' }}"
                            href="{{ route('realisations') }}">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('jobs') ? 'active' : '' }}"
                            href="{{ route('jobs') }}">Recrutement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="">
                        <a class="nav-button {{ request()->routeIs('choixcategorie') || request()->routeIs('essai') || request()->routeIs('devis')
                            ? 'active'
                            : '' }}"
                            href="{{ route('choixcategorie') }}">Demander un essai</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

        @yield('content')

        {{-- Whatsapp assistance --}}
        <a class="whatsappButton"
            href="https://wa.me/22960504656?text=Bonjour!%20Je%20souhaite%20plus%20d'informations."><i
                class="fab fa-whatsapp"></i></a>

        <!-- Include Footer -->
        @include('frontend.layouts.inc.footer')
    </div>

    <!-- Include JS script -->
    @include('frontend.layouts.inc.script')
</body>

</html>
