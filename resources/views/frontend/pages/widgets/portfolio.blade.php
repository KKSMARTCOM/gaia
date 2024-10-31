<section class="portfolio-area section-padding-top" id="achievements-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ 'Nos réalisations' }}</h3>
                    <div class="desc">
                        {!! 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur unde, optio omnis laboriosam aliquam numquam. Blanditiis, voluptatem voluptatibus.' !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="row">
                <div data-wow-delay="0.3s" class="col-md-12 col-lg-6 wow fadeInLeft filter-item">
                    <div class="single-portfolio achievement-text">
                        <h4>EIFFAGE GC MARINE BENIN</h4>
                        <p>Évaluation Géotechnique pré-compactage du remblai
                            dans le cadre du projet de réhabilitation de
                            l'ancien quai du Port Autonome de Cotonou...</p>
                        <a href="{{ route('show.achievement') }}" class="button-blue-trans mouse-dir">En savoir plus
                            <span class="dir-part"></span></a>
                    </div>
                </div>

                <div data-wow-delay="0.3s" class="col-md-12 col-lg-6 wow fadeInRight filter-item">
                    <div class="single-portfolio achievement-image">
                        <figure class="about-image image-container">
                            <img src="{{ asset('frontend/assets/images/realisation1.png') }}" alt="">
                        </figure>
                    </div>
                </div>

                <div data-wow-delay="0.5s" class="col-md-12 col-lg-6 wow fadeInLeft filter-item">
                    <div class="single-portfolio archievement-image">
                        <figure class="about-image image-container">
                            <img src="{{ asset('frontend/assets/images/realisation2.png') }}" alt="">
                        </figure>

                    </div>
                </div>

                <div data-wow-delay="0.5s" class="col-md-12 col-lg-6 wow fadeInRight filter-item">
                    <div class="single-portfolio achievement-text">
                        <h4>ARYA</h4>
                        <p>Mission d'ingénierie géotechnique G2 AVP dans le cadre
                            du projet de rénovation du temple des Pythons à Ouidah...</p>
                        <a href="{{ route('show.achievement') }}" class="button-blue-trans mouse-dir">En savoir plus
                            <span class="dir-part"></span></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="text-center">
                    <a href="{{ route('realisations') }}" class="button-blue-trans mouse-dir">Afficher toutes les
                        réalisations <span class="dir-part"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
