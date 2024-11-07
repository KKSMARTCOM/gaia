<!-- Header-Area-Start -->
<header class="header-slider">
    @foreach ($slides as $item)
        <div class="header-area parallax-bg"
            style="background: url('{{ asset($item->image) }}') no-repeat scroll top center/cover">
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
<!-- Header-Area-End -->
