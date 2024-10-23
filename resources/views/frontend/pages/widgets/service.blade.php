<section class="service-area section-padding-top" id="about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 {{ /* $loop->index > 2 ? */ 'mt-4' }}">
                <div class="single-service">
                    <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->name ?? 'Etude de sol' }}</h3>
                    <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                        <p>{{ $service->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi recusandae tenetur fugit.' }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 {{ /* $loop->index > 2 ? */ 'mt-4' }}">
                <div class="single-service">
                    <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->name ?? 'Etude de sol' }}</h3>
                    <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                        <p>{{ $service->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi recusandae tenetur fugit.' }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 {{ /* $loop->index > 2 ? */ 'mt-4' }}">
                <div class="single-service">
                    <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->name ?? 'Etude de sol' }}</h3>
                    <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                        <p>{{ $service->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi recusandae tenetur fugit.' }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 {{ /* $loop->index > 2 ? */ 'mt-4' }}">
                <div class="single-service">
                    <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->name ?? 'Etude de sol' }}</h3>
                    <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                        <p>{{ $service->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi recusandae tenetur fugit.' }}
                        </p>
                    </div>
                </div>
            </div>


            @foreach ($services as $service)
            @endforeach
        </div>
    </div>
</section>
