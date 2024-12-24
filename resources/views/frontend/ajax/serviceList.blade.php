@if ($services)
    @foreach ($services as $item)
        <div class="col-lg-4 mt-5">
            <div class="single-service">
                <div class="single-service-icon d-flex justify-content-center align-items-center">
                    <div style="height: 60px;width:60px;overflow:hidden;">
                        <img src="{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}"
                            style="height: 100%;width:100%;object-fit:cover;border-radius:100%" alt="{{ $item->title }}">
                    </div>
                </div>
                <div class="single-service-container">
                    <div>
                        <h4 class="wow fadeInRight title" data-wow-delay="0.3s">
                            {{ $item->title }}</h4>
                        <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                            {!! $item->description !!}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('essai', $item->id) }}" class="button-blue-trans mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">
                            <span class="text">Commander</span>
                            <span class="dir-part"></span>
                        </a>
                        {{-- <a href="{{ route('show.service', $item->id) }}" class="button-blue text-nowrap">En savoir
                            plus
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
