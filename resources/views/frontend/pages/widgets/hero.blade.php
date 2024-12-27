<!-- Header-Area-Start -->
<header class="header-slider">
    @foreach ($slides as $item)
        <div class="header-area "
            style="background: url('{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}') no-repeat scroll center center/cover">
            <div class="header-text">
                <h4>{{ $item->texte }}</h4>
            </div>
        </div>
    @endforeach
</header>


<!-- Header-Area-End -->
