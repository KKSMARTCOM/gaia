<section class="portfolio-area section-padding-top" id="portfolio-page">
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

        <div class="portfolio-wrapper">
            <div class="row portfolios">
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-block.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" data-lity class="icon"><i
                                    class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="{{ route('show.portfolio', 1) }}">{{ 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(strip_tags('Lorem ipsum dolor sit amet consectetur adipisicing elit.'), 100) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-block.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" data-lity class="icon"><i
                                    class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="{{ route('show.portfolio', 1) }}">{{ 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(strip_tags('Lorem ipsum dolor sit amet consectetur adipisicing elit.'), 100) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-block.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" data-lity class="icon"><i
                                    class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="{{ route('show.portfolio', 1) }}">{{ 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(strip_tags('Lorem ipsum dolor sit amet consectetur adipisicing elit.'), 100) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-block.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" data-lity class="icon"><i
                                    class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="{{ route('show.portfolio', 1) }}">{{ 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(strip_tags('Lorem ipsum dolor sit amet consectetur adipisicing elit.'), 100) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
