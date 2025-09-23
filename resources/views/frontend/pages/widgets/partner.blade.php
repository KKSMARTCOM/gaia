<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ 'Ils nous font confiance' }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="testimonial-slider">
                    @foreach ($partners as $partner)
                        <div class="single-testimonial">
                            <div class="single-testimonial-image">
                                <img src="{{ asset($partner->image ?? 'frontend/assets/images/no-image.webp') }}"
                                    alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
