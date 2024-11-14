<section class="about-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $about->title ?? 'Qui sommes nous ?' }}</h3>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 mb-4">
                <div class="about-text">
                    <h4 class="title wow fadeInUp" data-wow-delay="0.2s">
                        {{ $about->title }}</h4>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! Str::limit($about->description, 100, '...') !!}
                    </div>
                    <a href="{{ route('show.about', $about->id) }}" class="button-blue-trans mouse-dir wow fadeInUp"
                        data-wow-delay="0.5s">
                        <span class="text">En savoir plus</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <figure class="about-image image-container">
                    <img src="{{ asset($about->image) }}" alt="{{ $about->title }}"
                        class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                </figure>
            </div>

        </div>
    </div>
</section>
