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
                                <a href="{{ route('admin.partner.create') }}" class="btn btn-success">Ajouter <i
                                        class="fas fa-plus"></i></a>
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
                                                        <a href="{{ route('admin.partner.edit', $item->id) }}"
                                                            class="btn btn-warning btn-icon"><span
                                                                class="fas fa-edit"></span></a>

                                                        <a href="{{ route('admin.partner.destroy', $item->id) }}"
                                                            class="btn btn-danger btn-icon delete-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
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
