<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $feedbackTitle->title ?? '' }}</h3>
                    <div class="desc">
                        <p>{{ $feedbackTitle->sub_title ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="testimonial-slider">
                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h5 class="title">{{ $feedback->name ?? 'Boris' }}</h5>
                            <h6 class="position">{{ $feedback->position ?? 'PDG' }}</h6>
                        </div>
                        <div class="content">
                            {!! $feedback->description ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' !!}
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h5 class="title">{{ $feedback->name ?? 'Boris' }}</h5>
                            <h6 class="position">{{ $feedback->position ?? 'PDG' }}</h6>
                        </div>
                        <div class="content">
                            {!! $feedback->description ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' !!}
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h5 class="title">{{ $feedback->name ?? 'Boris' }}</h5>
                            <h6 class="position">{{ $feedback->position ?? 'PDG' }}</h6>
                        </div>
                        <div class="content">
                            {!! $feedback->description ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' !!}
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h5 class="title">{{ $feedback->name ?? 'Boris' }}</h5>
                            <h6 class="position">{{ $feedback->position ?? 'PDG' }}</h6>
                        </div>
                        <div class="content">
                            {!! $feedback->description ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' !!}
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h5 class="title">{{ $feedback->name ?? 'Boris' }}</h5>
                            <h6 class="position">{{ $feedback->position ?? 'PDG' }}</h6>
                        </div>
                        <div class="content">
                            {!! $feedback->description ?? 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' !!}
                        </div>
                    </div>
                    @foreach ($feedbacks as $feedback)
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
