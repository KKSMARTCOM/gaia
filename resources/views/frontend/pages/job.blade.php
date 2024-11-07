@extends('frontend.layouts.master')
@section('title', 'Recrutement')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Job-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h1>Recrutement</h1>
                    <p>Rejoignez les équipes de GAIA LAB !</p>
                </div>
            </div>
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-sm-12 job-container">
                        <h4>{{ $job->title }}</h4>
                        <div>
                            {!! $job->description !!}
                        </div>
                        <div class="mt-4">
                            <a href="mailto:{{ $job->email }}">Postuler</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Job-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
