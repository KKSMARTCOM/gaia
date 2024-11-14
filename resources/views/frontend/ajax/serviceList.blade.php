@if ($services)
    @foreach ($services as $item)
        <div class="col-lg-4 mt-5">
            <div class="single-service">
                <div class="single-service-icon d-flex justify-content-center align-items-center">
                    <div style="height: 60px;width:60px;overflow:hidden;">
                        <img src="{{ asset($item->image) }}"
                            style="height: 100%;width:100%;object-fit:cover;border-radius:100%" alt="{{ $item->title }}">
                    </div>
                </div>
                <div class="single-service-container">
                    <h4 class="mb-2 wow fadeInRight" data-wow-delay="0.3s">
                        {{ $item->title }}</h4>
                    <div class="desc wow fadeInRight mb-4" data-wow-delay="0.4s">
                        {!! Str::limit($item->description, 50, '...') !!}
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('essai', $item->id) }}" class="button-blue">Commander</a>
                        <a href="{{ route('show.service', $item->id) }}" class="button-blue text-nowrap">En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
