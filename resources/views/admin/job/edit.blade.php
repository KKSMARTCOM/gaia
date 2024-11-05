@extends('admin.layouts.master')
@section('title', 'About')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.job.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Recrutement</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (!empty($job->id))
                                <h4>Mise à jour</h4>
                            @else
                                <h4>Création</h4>
                            @endif
                        </div>
                        <div class="card-body">

                            @if (!empty($job->id))
                                @php
                                    $routeLink = route('admin.job.update', $job->id);
                                @endphp
                            @else
                                @php
                                    $routeLink = route('admin.job.store');
                                @endphp
                            @endif

                            <form action="{{ $routeLink }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if (!empty($job->id))
                                    @method('PUT')
                                @endif

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre du
                                        poste</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $job->title ?? old('title') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" class="summernote">{!! $job->description ?? '' !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email pour
                                        postuler</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $job->email ?? old('email') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        @if (!empty($job->id))
                                            <button class="btn btn-primary">Editer</button>
                                        @else
                                            <button class="btn btn-primary">Ajouter</button>
                                        @endif
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
