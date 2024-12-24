@php

@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <ul class="footer-menu">
                    <li class="">
                        <a class="" aria-current="page" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('home') }}#services-page">Services</a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('realisations') }}">Réalisations</a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('jobs') }}">Recrutement</a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('choixcategorie') }}">Demander un essai</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="footer-icon mb-4">
                    {{-- <a href="">
                        <i class="fab fa-instagram"></i>
                    </a> --}}

                    <a href="https://web.facebook.com/profile.php?id=61568337231314" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/laboratoires-gaia/" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
                <div class="contact-gaia">
                    <div class="footer-contact">
                        <i class="fas fa-map-pin"></i>
                        <p>Glo Djigbé en face de la Zone Economique et Spéciale GDIZ</p>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-phone"></i>
                        <p>+229 60 50 46 56</p>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-envelope"></i>
                        <p>contact@gaialab-bj.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <img style="object-fit: cover;height:100%;width:100%;border-radius:10px"
                    src="{{ asset('frontend/assets/images/localisation.png') }}" alt="">
            </div>
        </div>
    </div>
</footer>
