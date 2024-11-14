@extends('admin.layouts.master')
@section('title', 'Bannières')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Bannières</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Toutes les bannières</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.banner.create') }}" class="btn btn-success">Ajouter <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($banners) && $banners->count() > 0)
                                            @foreach ($banners as $item)
                                                <tr class="item" item-id="{{ $item->id }}">
                                                    <td>{{ $item->id }}</td>
                                                    <td class="">
                                                        <div style="height: 50px; width:50px;">

                                                            <img style="height: 100%;width:100%; object-fit:cover;"
                                                                src="{{ asset($item->image) }}" alt="banner-image" />
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <!-- Bouton pour supprimer avec une icône de corbeille -->
                                                        <a href="{{ route('admin.banner.destroy', $item->id) }}"
                                                            class="btn btn-danger btn-icon delete-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3" class="text-center">Pas de bannière disponible</td>
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
