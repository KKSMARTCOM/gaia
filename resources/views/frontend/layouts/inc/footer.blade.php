@php

@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                    </figure>
                    <p>{{ 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium adipisci blanditiis totam minus dolorum odit consequatur similique autem quam voluptatibus!' }}
                    </p>
                    <ul class="d-flex flex-wrap">
                        <li><a href="{{-- {{ $icon->url }} --}}"><i class="{{ 'fa-facebook' }}"></i></a></li>
                        <li><a href="{{-- {{ $icon->url }} --}}"><i class="{{ 'fa-facebook' }}"></i></a></li>
                        <li><a href="{{-- {{ $icon->url }} --}}"><i class="{{ 'fa-facebook' }}"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Lien utiles</h3>
                <ul class="nav-menu">
                    <li><a href="">{{ 'Politiques de confidentialité' }}</a>
                    </li>
                    <li><a href="">{{ 'Politiques de confidentialité' }}</a>
                    </li>
                    <li><a href="">{{ 'Politiques de confidentialité' }}</a>
                    </li>
                    <li><a href="">{{ 'Politiques de confidentialité' }}</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>{{ 'Cotonou' }}</li>
                    <li><a href="#">{{ '22996541234' }}</a></li>
                    <li><a href="#">{{ 'gaia@gmail.com' }}</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Besoin d'aides ?</h3>
                <ul class="nav-menu">
                    <li><a href="">{{ 'Demander un essaie' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{{ 'Copyright' }}</p>
                        <p>{{ 'KKSMARTCOM c 2024' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
