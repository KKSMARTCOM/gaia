<section class="about-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ 'Qui sommes nous ?' }}</h3>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-text">
                    {{-- <h3 class="title wow fadeInUp" data-wow-delay="0.3s">
                        {{ 'De la construction à la finition' }}</h3> --}}
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! 'Fondé en 2022, le Laboratoire GAIA est un établissement géotechnique novateur basé au Bénin, dédié à l’analyse approfondie des sols et des matériaux de construction. Notre mission est de fournir des services de qualité qui garantissent la sécurité et la durabilité des projets d\'infrastructure dans notre pays et au-delà. <br/> GAIA se distingue par son engagement envers l’excellence et l’innovation. Notre équipe d\'experts, formée aux dernières techniques d\'analyse, réalise une vaste gamme d\'essais géotechniques, allant des études...' !!}
                    </div>
                    <a href="{{ route('about') }}" class="button-blue-trans mouse-dir wow fadeInUp"
                        data-wow-delay="0.5s">
                        <span class="text">En savoir plus</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="about-image">
                    <img src="{{ asset('frontend/assets/images/realisation15.png') }}" alt=""
                        class="wow fadeInUp" data-wow-delay="0.3s">
                </figure>
            </div>
        </div>
    </div>
</section>
