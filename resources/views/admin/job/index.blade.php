@extends('admin.layouts.master')
@section('title', 'Bannières')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Section Recrutement</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toutes les offres</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.job.create') }}" class="btn btn-success">Ajouter <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Poste</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($jobs) && $jobs->count() > 0)
                                            @foreach ($jobs as $item)
                                                <tr class="item" item-id="{{ $item->id }}">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td class="d-flex align-items-center">
                                                        <!-- Lien pour modifier avec une icône de crayon -->
                                                        <a href="{{ route('admin.job.edit', $item->id) }}"
                                                            class="btn btn-primary btn-icon mr-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <!-- Bouton pour supprimer avec une icône de corbeille -->
                                                        <a href="{{ route('admin.job.destroy', $item->id) }}"
                                                            class="btn btn-danger btn-icon delete-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3" class="text-center">Pas d'offres disponibles</td>
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
