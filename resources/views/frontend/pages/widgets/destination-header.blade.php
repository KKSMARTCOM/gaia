<header class="site-head">
    @foreach ($slides as $item)
        <div class="head-area parallax-bg"
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
    {{-- <div class="head-area parallax-bg"
        style="background: url('{{ asset('frontend/assets/images/header1.jpg') }}') no-repeat scroll top center/cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-text">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="head-area parallax-bg"
        style="background: url('{{ asset('frontend/assets/images/header2.jpg') }}') no-repeat scroll top center/cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-text">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</header>
