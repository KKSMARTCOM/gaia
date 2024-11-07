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
            @if ($achievements && $achievements->count() > 0)
                @foreach ($achievements as $index => $item)
                    <div class="row align-items-center">
                        @if ($index % 2 == 0)
                            <div class="col-lg-6 mb-4">
                                <div class="single-portfolio achievement-image">
                                    <figure class="about-image image-container">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="about-text">
                                    <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                                        {{ $item->title }}</h4>
                                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                        {!! Str::limit($item->description, 100, '...') !!}
                                    </div>
                                    <a href="{{ route('show.achievement', $item->id) }}"
                                        class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="text">En savoir plus</span>
                                        <span class="dir-part"></span>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-6 mb-4">
                                <div class="about-text">
                                    <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                                        {{ $item->title }}</h4>
                                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                        {!! Str::limit($item->description, 100, '...') !!}
                                    </div>
                                    <a href="{{ route('show.achievement', $item->id) }}"
                                        class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="text">En savoir plus</span>
                                        <span class="dir-part"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="single-portfolio achievement-image">
                                    <figure class="about-image image-container">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                            class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                                    </figure>
                                </div>
                            </div>
                        @endif
                @endforeach
                <div class="row">
                    <div class="text-center">
                        <a href="{{ route('realisations') }}" class="button-blue-trans mouse-dir text-nowrap">Afficher
                            toutes les
                            réalisations <span class="dir-part"></span>
                        </a>
                    </div>

                </div>
            @endif

        </div>
    </div>
</section>
