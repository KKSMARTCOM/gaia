@extends('admin.layouts.master')
@section('title', $user && $user->id ? 'Modifier l\'utilisateur' : 'Ajouter un utilisateur')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.users.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>{{ $user && $user->id ? 'Modifier' : 'Ajouter' }} un utilisateur</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Formulaire de {{ $user && $user->id ? 'modification' : 'création' }} de l'utilisateur</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ $user && $user->id ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($user && $user->id)
                                    @method('PUT')
                                @endif

                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" name="password" class="form-control">
                                    @if ($user)
                                        <small>Laissez vide si vous ne souhaitez pas modifier le mot de passe.</small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="status">Statut</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ old('status', $user->status ?? 1) == 1 ? 'selected' : '' }}>Actif</option>
                                        <option value="0" {{ old('status', $user->status ?? 1) == 0 ? 'selected' : '' }}>Inactif</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">{{ $user && $user->id ? 'Mettre à jour' : 'Enregistrer' }}</button>
                            </form>

                            @if ($user && $user->id)
                                <hr>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer cet utilisateur</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
