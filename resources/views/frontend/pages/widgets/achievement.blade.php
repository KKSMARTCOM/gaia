<section class="portfolio-area section-padding-top" id="achievements-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h3 class="title">{{ 'Nos réalisations' }}</h3>
                    <div class="desc">
                        {!! 'Que ce soit pour des bâtiments, des routes, des ponts, le Laboratoire GAIA met à profit son savoir-faire et ses technologies avancées pour garantir la sécurité, la durabilité et la réussite des réalisations. Découvrez nos projets qui reflètent notre engagement envers l\'excellence et la fiabilité.' !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            @if ($achievements && $achievements->count() > 0)
                <div class="row">
                    @foreach ($achievements as $index => $item)
                        <div class="col-lg-6 mb-4">
                            <div class="single-portfolio achievement-image">
                                <figure class="about-image image-container">
                                    <img src="{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}"
                                        alt="{{ $item->title }}" class="wow fadeInUp image-responsive"
                                        data-wow-delay="0.3s">
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
                        {{-- @if ($index % 2 == 0)
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
                                        <img src="{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}"
                                            alt="{{ $item->title }}" class="wow fadeInUp image-responsive"
                                            data-wow-delay="0.3s">
                                    </figure>
                                </div>
                            </div>
                        @endif --}}
                    @endforeach
                </div>

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
