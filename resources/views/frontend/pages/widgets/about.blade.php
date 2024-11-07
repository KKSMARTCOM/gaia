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
            {!! Str::limit($about->description, 243400, '...') !!}
            <div class="col-sm-6 mt-4">
                <a href="{{ route('show.about', $about->id) }}" class="button-blue-trans mouse-dir wow fadeInUp"
                    data-wow-delay="0.5s">
                    <span class="text">En savoir plus</span>
                    <span class="dir-part"></span>
                </a>
            </div>

        </div>
    </div>
</section>
