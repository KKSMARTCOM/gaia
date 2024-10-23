@php
    $footerInfo = \App\Models\FooterInfo::first();
    $footerIcons = \App\Models\FooterSocialLink::all();
    $footerUsefulLinks = \App\Models\FooterUsefulLink::all();
    $footerContact = \App\Models\FooterContactInfo::first();
    $footerHelpLinks = \App\Models\FooterHelpLink::all();
@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{ asset($generalSetting->footer_logo ?? 'frontend/assets/images/logo.png') }}"
                            alt="">
                    </figure>
                    <p>{{ $footerInfo->info ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium adipisci blanditiis totam minus dolorum odit consequatur similique autem quam voluptatibus!' }}
                    </p>
                    <ul class="d-flex flex-wrap">
                        <li><a href="{{-- {{ $icon->url }} --}}"><i class="{{ $icon->icon ?? 'fa-facebook' }}"></i></a></li>
                        <li><a href="{{-- {{ $icon->url }} --}}"><i class="{{ $icon->icon ?? 'fa-facebook' }}"></i></a></li>
                        <li><a href="{{-- {{ $icon->url }} --}}"><i class="{{ $icon->icon ?? 'fa-facebook' }}"></i></a></li>
                        @foreach ($footerIcons as $icon)
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Lien utiles</h3>
                <ul class="nav-menu">
                    <li><a href="{{-- {{ $usefulLink->url }} --}}">{{ $usefulLink->name ?? 'Politiques de confidentialité' }}</a>
                    </li>
                    <li><a href="{{-- {{ $usefulLink->url }} --}}">{{ $usefulLink->name ?? 'Politiques de confidentialité' }}</a>
                    </li>
                    <li><a href="{{-- {{ $usefulLink->url }} --}}">{{ $usefulLink->name ?? 'Politiques de confidentialité' }}</a>
                    </li>
                    <li><a href="{{-- {{ $usefulLink->url }} --}}">{{ $usefulLink->name ?? 'Politiques de confidentialité' }}</a>
                    </li>
                    @foreach ($footerUsefulLinks as $usefulLink)
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>{{ $footerContact->address ?? 'Cotonou' }}</li>
                    <li><a href="#">{{ $footerContact->phone ?? '22996541234' }}</a></li>
                    <li><a href="#">{{ $footerContact->email ?? 'gaia@gmail.com' }}</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Besoin d'aides ?</h3>
                <ul class="nav-menu">
                    <li><a href="{{-- {{ $footerHelpLink->url }} --}}">{{ $footerHelpLink->name ?? 'Demander un essaie' }}</a></li>
                    @foreach ($footerHelpLinks as $footerHelpLink)
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{{ $footerInfo->copy_right ?? 'Copyright' }}</p>
                        <p>{{ $footerInfo->powered_by ?? 'KKSMARTCOM c 2024' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
