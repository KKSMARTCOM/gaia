<section class="blog-area section-padding-top" id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $blogTitle->title ?? 'Blog' }}</h3>
                    <div class="desc">
                        {{ $blogTitle->sub_title ?? 'Des articles qui pourraient interesser.' }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-slider">
                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{ asset($blog->image ?? 'frontend/assets/images/blog-1.jpg') }}" alt="">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a
                                    href="{{ route('show.blog', $blog->id ?? 1) }}">{{ $blog->title ?? 'Révolution dans le BTP' }}</a>
                            </h3>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    $blog->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odit saepe exercitationem.',
                                    150,
                                    '...',
                                ) !!}</p>
                            </div>
                            <a href="{{ route('show.blog', $blog->id ?? 1) }}"
                                class="button-primary-trans mouse-dir">Lire
                                plus <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{ asset($blog->image ?? 'frontend/assets/images/blog-2.jpg') }}" alt="">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a
                                    href="{{ route('show.blog', $blog->id ?? 1) }}">{{ $blog->title ?? 'Révolution dans le BTP' }}</a>
                            </h3>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    $blog->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odit saepe exercitationem.',
                                    150,
                                    '...',
                                ) !!}</p>
                            </div>
                            <a href="{{ route('show.blog', $blog->id ?? 1) }}"
                                class="button-primary-trans mouse-dir">Lire
                                plus <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{ asset($blog->image ?? 'frontend/assets/images/blog-3.jpg') }}" alt="">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a
                                    href="{{ route('show.blog', $blog->id ?? 1) }}">{{ $blog->title ?? 'Révolution dans le BTP' }}</a>
                            </h3>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    $blog->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odit saepe exercitationem.',
                                    150,
                                    '...',
                                ) !!}</p>
                            </div>
                            <a href="{{ route('show.blog', $blog->id ?? 1) }}"
                                class="button-primary-trans mouse-dir">Lire
                                plus <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{ asset($blog->image ?? 'frontend/assets/images/blog-4.jpg') }}" alt="">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a
                                    href="{{ route('show.blog', $blog->id ?? 1) }}">{{ $blog->title ?? 'Révolution dans le BTP' }}</a>
                            </h3>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    $blog->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odit saepe exercitationem.',
                                    150,
                                    '...',
                                ) !!}</p>
                            </div>
                            <a href="{{ route('show.blog', $blog->id ?? 1) }}"
                                class="button-primary-trans mouse-dir">Lire
                                plus <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{ asset($blog->image ?? 'frontend/assets/images/blog-5.jpg') }}" alt="">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a
                                    href="{{ route('show.blog', $blog->id ?? 1) }}">{{ $blog->title ?? 'Révolution dans le BTP' }}</a>
                            </h3>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    $blog->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odit saepe exercitationem.',
                                    150,
                                    '...',
                                ) !!}</p>
                            </div>
                            <a href="{{ route('show.blog', $blog->id ?? 1) }}"
                                class="button-primary-trans mouse-dir">Lire
                                plus <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @foreach ($blogs as $blog)
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
