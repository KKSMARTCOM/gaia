@extends('admin.layouts.master')
@section('title', 'Utilisateurs')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Utilisateurs</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tous les utilisateurs</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-success">Ajouter un utilisateur <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Statut</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users->count() > 0)
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->status ? 'Actif' : 'Inactif' }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                                            class="btn btn-warning btn-icon"><span
                                                                class="fas fa-edit"></span></a>
                                                        <form action="{{ route('admin.users.destroy', $user->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-icon"
                                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')"><span
                                                                    class="fas fa-trash-alt"></span></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">Aucun utilisateur trouvé</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
