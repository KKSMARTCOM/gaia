<!-- Header-Area-Start -->
<header class="header-slider">
    @foreach ($slides as $item)
        <div class="header-area "
            style="background: url('{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}') no-repeat scroll center center/cover">
        </div>
    @endforeach
</header>

{{-- <div class="header-text">
    <div class="header-button">
        <a href="{{ route('choixcategorie') }}">Demander un essai</a>
        <a href="{{ route('contact') }}">Contactez-nous</a>
    </div>
</div> --}}

<!-- Header-Area-End -->
