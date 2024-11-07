@extends('admin.layouts.master')
@section('title', 'About')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.service.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Services</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (!empty($service->id))
                                <h4>Mise à jour</h4>
                            @else
                                <h4>Création</h4>
                            @endif
                        </div>
                        <div class="card-body">

                            @if (!empty($service->id))
                                @php
                                    $routeLink = route('admin.service.update', $service->id);
                                @endphp
                            @else
                                @php
                                    $routeLink = route('admin.service.store');
                                @endphp
                            @endif

                            @if (!empty($service->id))
                                <div class="mb-4 d-flex justify-content-center">
                                    <div style="height: 200px; width:300px; overflow:hidden">
                                        <img style="height: 100%;width:100%;object-fit:cover;"
                                            src="{{ asset($service->image) }}" alt="">
                                    </div>
                                </div>
                            @endif

                            <form action="{{ $routeLink }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if (!empty($service->id))
                                    @method('PUT')
                                @endif

                                <div class="form-group row mb-4">

                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre du
                                        service</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $service->title ?? old('title') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">

                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prix de
                                        base</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="base_price" class="form-control"
                                            value="{{ $service->base_price ?? old('base_price') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" class="summernote">{!! $service->description ?? '' !!}</textarea>
                                    </div>
                                </div>
                                @if ($communes && $communes->count() > 0)
                                    <div class="form-group row mb-4">
                                        <label class="col-sm-12" for="">Prix additionnel pour chaque commune</label>
                                        @foreach ($communes as $item)
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <label class="col-form-label col-6 mb-4">{{ $item->name }}</label>
                                                    <div class="col-6 mb-4">

                                                        <input type="number" name="additionnal_price[{{ $item->id }}]"
                                                            class="form-control"
                                                            value="{{ old('additionnal_price.' . $item->id, isset($service) ? $service->communes->where('id', $item->id)->first()->pivot->additional_price ?? 0 : '') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choisir une image</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        @if (!empty($service->id))
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
