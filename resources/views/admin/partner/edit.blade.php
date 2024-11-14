@extends('admin.layouts.master')
@section('title', 'Modifier le Partenaire')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.partner.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Modifier le Partenaire</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Formulaire de modification du partenaire</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            
                                <!-- Champ Nom du partenaire -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom du partenaire</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nom" class="form-control" value="{{ old('nom', $partner->nom) }}" required>
                                        @error('nom')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            
                                <!-- Champ Image du partenaire -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Changer l'image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            @if($partner->image)
                                                <img src="{{ asset('/' . $partner->image) }}" alt="Image actuelle" style="max-width: 150px; max-height: 150px; margin-bottom: 10px;">
                                            @else
                                                <span>Aucune image actuelle</span>
                                            @endif
                                            <label for="image-upload" id="image-label" style="cursor: pointer;">Choisir une nouvelle image</label>
                                            <input type="file" name="image" id="image-upload" style="display: none;" />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Boutons -->
                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7 offset-md-3 d-flex justify-content-between">
                                        <button type="submit" class="btn btn-success">Mettre à jour</button>
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
