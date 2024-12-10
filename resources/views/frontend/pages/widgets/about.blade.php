<section class="about-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $about->title ?? 'Qui sommes nous ?' }}</h3>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 mb-4">
                <div class="about-text">
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! Str::limit($about->description, 500, '...') !!}
                    </div>
                    <a href="{{ route('show.about', $about->id) }}"
                        class="button-blue-trans mt-4 mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                        <span class="text">En savoir plus</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="about-image image-container">
                    <img src="{{ asset($about->image ?? 'frontend/assets/images/no-image.webp') }}"
                        alt="{{ $about->title }}" class="wow fadeInUp image-responsive" data-wow-delay="0.3s">
                </figure>
            </div>
        </div>
    </div>
</section>
