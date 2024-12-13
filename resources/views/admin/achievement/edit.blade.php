@extends('admin.layouts.master')
@section('title', 'About')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.achievement.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Réalisations</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (!empty($achievement->id))
                                <h4>Mise à jour</h4>
                            @else
                                <h4>Création</h4>
                            @endif
                        </div>
                        <div class="card-body">

                            @if (!empty($achievement->id))
                                @php
                                    $routeLink = route('admin.achievement.update', $achievement->id);
                                @endphp
                            @else
                                @php
                                    $routeLink = route('admin.achievement.store');
                                @endphp
                            @endif

                            @if (!empty($achievement->id))
                                <div class="mb-4 d-flex justify-content-center">
                                    <div style="height: 200px; width:300px; overflow:hidden">
                                        <img style="height: 100%;width:100%;object-fit:cover;"
                                            src="{{ asset($achievement->image) }}" alt="">
                                    </div>
                                </div>
                            @endif

                            <form action="{{ $routeLink }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if (!empty($achievement->id))
                                    @method('PUT')
                                @endif

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre de la
                                        réalisation</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $achievement->title ?? old('title') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" class="summernote">{!! $achievement->description ?? '' !!}</textarea>
                                    </div>
                                </div>

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
                                        @if (!empty($achievement->id))
                                            <button class="btn btn-primary">Enregistrer</button>
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
    <!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.getElementById('customFile');
        
        fileInput.addEventListener('change', function (event) {
            const fileName = event.target.files[0]?.name || "Aucun fichier choisi";
            this.nextElementSibling.textContent = fileName; // Met à jour le texte du label
        });
    });
</script>
@endsection
