@extends('admin.layouts.master')
@section('title', 'Partenaires')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.partner.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Création de Partenaire</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ajouter un Partenaire</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Nom du Partenaire -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom du
                                        partenaire</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nom" class="form-control" required>
                                        @error('nom')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Image du Partenaire -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ajouter une
                                        Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choisir une image</label>
                                            <input type="file" name="image" id="image-upload" required />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Bouton Ajouter -->
                                <div class="form-group row mb-4 text-center">
                                    <div class="col-sm-12 col-md-7 offset-md-3">
                                        <button class="btn btn-primary">Ajouter</button>
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
