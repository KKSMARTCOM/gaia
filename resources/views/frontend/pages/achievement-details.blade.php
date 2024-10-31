@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero');
    {{-- Hero section --}}

    <!-- Achievement-Details-Area-Start -->
    <section class="blog-details section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title">Titre de la réalisation</h2>
                    <div class="blog-meta">
                        <div class="single-meta">
                            <div class="meta-title">Réalisé le</div>
                            <h4 class="meta-value"><a href="javascript:void(0)">11/02/2024</a></h4>
                        </div>
                    </div>
                    <div class="achievement-image">
                        <figure class="image-block">
                            <img class="img-fix" src="{{ asset('frontend/assets/images/realisation39.png') }}"
                                alt="">
                        </figure>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam similique nemo
                        delectus. Recusandae odio atque rerum porro dicta! Impedit illo quo ab praesentium tempore debitis
                        obcaecati enim molestiae beatae temporibus? Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quos reprehenderit praesentium error esse, ipsa accusantium maxime eaque rerum. Eius laborum
                        asperiores ipsam consectetur enim. Quasi cupiditate perspiciatis et beatae aliquid? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eligendi repudiandae natus voluptatibus harum officia
                        placeat aut ea ipsam quos, quidem aliquid eius doloribus maiores impedit quis sapiente autem debitis
                        explicabo. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi doloremque, earum
                        quibusdam nobis maiores quidem optio expedita! Vel molestias eos sint dignissimos tenetur labore
                        eligendi, cupiditate magnam temporibus, maxime enim.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Achievement-Details-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
