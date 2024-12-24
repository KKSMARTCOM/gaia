<section class="service-area section-padding-top" id="services-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h3 class="title">{{ 'Nos services' }}</h3>
                    <div class="desc mobile-text">
                        {!! 'Notre laboratoire se spécialise dans divers domaines d\'intervention, garantissant des solutions adaptées aux besoins de chaque projet. Voici nos principaux services.' !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="serviceList">
            @include('frontend.ajax.serviceList', ['services' => $services])
        </div>
        <div class="row mt-2">
            @if ($remaining)
                <div class="col-sm-12 text-center">
                    <a href="{{ route('home') }}" class="button-blue-trans mouse-dir" id="load-more">Voir plus <span
                            class="dir-part"></span>
                    </a>
                </div>
            @endif
        </div>
</section>
