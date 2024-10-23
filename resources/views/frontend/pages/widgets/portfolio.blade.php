<section class="portfolio-area section-padding-top" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $portfolioTitle->title ?? 'Nos réalisations' }}</h3>
                    <div class="desc">
                        {!! $portfolioTitle->sub_title ??
                            'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur unde, optio omnis laboriosam aliquam numquam. Blanditiis, voluptatem voluptatibus.' !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    <li data-filter=".{{ $category->slug ?? 'batiment' }}">{{ $category->name ?? 'Batiment' }}</li>
                    <li data-filter=".{{ $category->slug ?? 'batiment' }}">{{ $category->name ?? 'Génie civil' }}</li>
                    <li data-filter=".{{ $category->slug ?? 'batiment' }}">{{ $category->name ?? 'Essais' }}</li>
                    <li data-filter=".{{ $category->slug ?? 'batiment' }}">{{ $category->name ?? 'Eau' }}</li>
                    <li data-filter=".{{ $category->slug ?? 'batiment' }}">{{ $category->name ?? 'Levé topo' }}</li>
                    {{-- @foreach ($portfolioCategories as $category)
                    @endforeach --}}

                </ul>
            </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row portfolios">
                <div data-wow-delay="0.3s"
                    class="col-md-6 col-lg-4 filter-item {{ $item->category->slug ?? 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset($item->image ?? 'frontend/assets/images/portfolio-block.jpg') }}"
                                alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset($item->image ?? 'frontend/assets/images/portfolio-1.jpg') }}" data-lity
                                class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a
                                    href="{{ route('show.portfolio', $item->id ?? 1) }}">{{ $item->title ?? 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    strip_tags($item->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
                                    100,
                                ) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wow-delay="0.3s"
                    class="col-md-6 col-lg-4 filter-item {{ $item->category->slug ?? 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset($item->image ?? 'frontend/assets/images/portfolio-block.jpg') }}"
                                alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset($item->image ?? 'frontend/assets/images/portfolio-2.jpg') }}" data-lity
                                class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a
                                    href="{{ route('show.portfolio', $item->id ?? 1) }}">{{ $item->title ?? 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    strip_tags($item->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
                                    100,
                                ) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wow-delay="0.3s"
                    class="col-md-6 col-lg-4 filter-item {{ $item->category->slug ?? 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset($item->image ?? 'frontend/assets/images/portfolio-block.jpg') }}"
                                alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset($item->image ?? 'frontend/assets/images/portfolio-3.jpg') }}" data-lity
                                class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a
                                    href="{{ route('show.portfolio', $item->id ?? 1) }}">{{ $item->title ?? 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    strip_tags($item->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
                                    100,
                                ) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-wow-delay="0.3s"
                    class="col-md-6 col-lg-4 filter-item {{ $item->category->slug ?? 'batiment' }}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset($item->image ?? 'frontend/assets/images/portfolio-block.jpg') }}"
                                alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{ asset($item->image ?? 'frontend/assets/images/portfolio-4.jpg') }}" data-lity
                                class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a
                                    href="{{ route('show.portfolio', $item->id ?? 1) }}">{{ $item->title ?? 'Batiment' }}</a>
                            </h4>
                            <div class="desc">
                                <p>{!! Str::limit(
                                    strip_tags($item->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
                                    100,
                                ) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($portfolioItems as $item)
                @endforeach

            </div>
        </div>
    </div>
</section>
