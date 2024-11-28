@extends('admin.layouts.master')
@section('title', 'Demande d\'essais')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Demande d'essais</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Liste des demandes</h4>
                            {{-- div class="card-header-action">
                                <a href="{{ route('admin.orders.create') }}" class="btn btn-success">Ajouter <i
                                        class="fas fa-plus"></i></a>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Nom et prénom du client</th>
                                            <th>Service</th>
                                            <th>Commune</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($orders) && $orders->count() > 0)
                                            @foreach ($orders as $item)
                                                <tr class="item" item-id="{{ $item->id }}">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->lastname }} {{ $item->firstname }}</td>
                                                    <td>{{ $item->service->title }}</td>
                                                    <td>{{ $item->commune->name }}</td>
                                                    <td class="d-flex align-items-center">
                                                        <!-- Lien pour modifier avec une icône de crayon -->
                                                        <a href="{{ route('admin.order-tests.show', $item->id) }}"
                                                            class="btn btn-primary btn-icon mr-2">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <!-- Bouton pour supprimer avec une icône de corbeille -->
                                                        <a href="{{ route('admin.order-tests.destroy', $item->id) }}"
                                                            class="btn btn-danger btn-icon delete-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">Pas de commandes disponibles</td>
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
