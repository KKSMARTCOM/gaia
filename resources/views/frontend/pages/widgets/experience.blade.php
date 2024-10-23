<section class="experience-area section-padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <figure class="single-image wow fadeInLeft">
                    <img src="{{ asset($experience->image ?? 'frontend/assets/images/exper.jpg') }}" alt="">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="experience-text">
                    <h3 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $experience->title ?? 'Expérience' }}</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! $experience->description ??
                            'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet saepe recusandae totam?' !!}
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="icon-info wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon"><i class="fas fa-mobile-android-alt"></i></div>
                                <h6><a href="javascript:void(0)"
                                        class="text">{{ $experience->phone ?? '22998564712' }}</a></h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="icon-info wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <h6><a href="javascript:void(0)"
                                        class="text">{{ $experience->email ?? 'expe@gmail.com' }}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
