@extends('admin.layouts.master')
@section('title', 'Partenaires')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Partenaires</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tous les partenaires</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.partner.create') }}" class="btn btn-success">Ajouter <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($partners) && $partners->count() > 0)
                                            @foreach ($partners as $item)
                                                <tr class="item" item-id="{{ $item->id }}">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->nom }}</td> <!-- Correction ici -->
                                                    <td class="">
                                                        <div style="height: 50px; width:50px;">
                                                            <img style="height: 100%;width:100%; object-fit:cover;"
                                                                src="{{ asset($item->image) }}" alt="partner-image" />
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <form action="{{ route('admin.partner.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-danger btn-icon delete-item" data-id="{{ $item->id }}" onclick="confirmDelete({{ $item->id }})">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-center">Pas de partenaire disponible</td>
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
<script>
    function confirmDelete(id) {
        if(confirm('Êtes-vous sûr de vouloir supprimer ce partenaire ?')) {
            $.ajax({
                url: '/admin/partner/' + id,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function(response) {
                    if(response.status === 'success') {
                        alert('Partenaire supprimé avec succès.');
                        location.reload(); // Rafraîchir la page pour voir les changements
                    } else {
                        alert('Une erreur est survenue lors de la suppression.');
                    }
                },
                error: function() {
                    alert('Erreur serveur. Veuillez réessayer.');
                }
            });
        }
    }
</script>
@endpush


