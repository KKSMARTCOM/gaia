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
                        <h4>Titre de la réalisation</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, quibusdam nostrum.
                            Aliquid impedit minima deleniti in libero, eligendi tenetur quasi?..</p>
                        <a href="{{ route('show.achievement') }}" class="button-blue-trans mouse-dir">En savoir plus
                            <span class="dir-part"></span></a>
                    </div>
                </div>

                <div data-wow-delay="0.3s" class="col-md-12 col-lg-6 wow fadeInRight filter-item">
                    <div class="single-portfolio achievement-image">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-block.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>

                <div data-wow-delay="0.5s" class="col-md-12 col-lg-6 wow fadeInLeft filter-item">
                    <div class="single-portfolio archievement-image">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-block.jpg') }}" alt="">
                        </figure>

                    </div>
                </div>

                <div data-wow-delay="0.5s" class="col-md-12 col-lg-6 wow fadeInRight filter-item">
                    <div class="single-portfolio achievement-text">
                        <h4>Titre de la réalisation</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, quibusdam nostrum.
                            Aliquid impedit minima deleniti in libero, eligendi tenetur quasi?..</p>
                        <a href="{{ route('show.achievement') }}" class="button-blue-trans mouse-dir">En savoir plus
                            <span class="dir-part"></span></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="text-center">
                    <button class="button-blue-trans mouse-dir">Afficher toutes les réalisations <span
                            class="dir-part"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>
