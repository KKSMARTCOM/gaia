<!-- Header-Area-Start -->
<header class="header-area parallax-bg" id="home-page"
    style="background: url('{{ asset('frontend/assets/images/home-slider-2.jpg') }}') no-repeat scroll top center/cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="header-text">
                    <h1 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $hero->title ?? 'Les meilleurs' }}</h1>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        <p>{{ $hero->sub_title ?? 'En terme de géotechnologie' }}</p>
                    </div>
                    <a href="{{ $hero->btn_url ?? '' }}" class="button-dark mouse-dir wow w-[100px] fadeInUp"
                        data-wow-delay="0.5s">{{ $hero->btn_text ?? 'Demander un essai' }}<span
                            class="dir-part"></span></a>
                    {{-- @if ($hero->btn_text)
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</header>
@push('scripts')
    <script>
        @php
            $titles = [];
            foreach ($typerTitles as $title) {
                $titles[] = $title->title;
            }
            $titles = json_encode($titles);
        @endphp
        $('.header-area .typer-title').typer({!! $titles !!});
    </script>
@endpush
<!-- Header-Area-End -->
