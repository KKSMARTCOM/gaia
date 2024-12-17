<header class="site-head">
    @foreach ($slides as $item)
        <div class="head-area"
            style="background: url('{{ asset($item->image ?? 'frontend/assets/images/no-image.webp') }}') no-repeat scroll center center/cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</header>
