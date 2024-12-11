@extends('admin.layouts.master')
@section('title', 'Modifier le Partenaire')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.partner.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Partenaire</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Mise à jour</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Champ Nom du partenaire -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom du
                                        partenaire</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nom" class="form-control"
                                            value="{{ old('nom', $partner->nom) }}" required>
                                        @error('nom')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Aperçu de l'image actuelle -->
                                @if ($partner->image)
                                    <div class="mb-4 d-flex justify-content-center">
                                        <div style="height: 200px; width:300px; overflow:hidden">
                                            <img style="height: 100%;width:100%;object-fit:cover;"
                                                src="{{ asset('/' . $partner->image) }}" alt="Image actuelle">
                                        </div>
                                    </div>
                                @endif

                                <!-- Champ Image du partenaire -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Changer
                                        l'image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choisir une nouvelle
                                                image</label>
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
    <!-- JavaScript pour mettre à jour le nom du fichier -->
    <script>
        document.getElementById('customFile').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || "Aucun fichier choisi";
            this.nextElementSibling.textContent = fileName; // Met à jour le texte du label
        });
    </script>
@endsection
