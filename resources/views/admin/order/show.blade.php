@extends('admin.layouts.master')
@section('title', 'About')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.order-tests.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Demande d'essai numero {{ $order->id }} </h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Informations sur la demande</h4>
                        </div>
                        <div class="card-body">
                            <p>Nom du client : {{ $order->lastname }}</p>
                            <p>Prénom du client : {{ $order->firstname }}</p>
                            <p>Adresse du client : {{ $order->address }}</p>
                            <p>Email du client : {{ $order->email }}</p>
                            <p>Numéro téléphonique du client : {{ $order->phone }}</p>
                            <p>Service : {{ $order->service->title }}</p>
                            <p>Commune : {{ $order->commune->name }}</p>
                            <p>Type de batiment : {{ $order->building_type }}</p>
                            <p>Prix total : {{ $order->price }} cfa</p>
                            @if ($order->topographic_survey)
                                <p>Cliquez <a href="{{ asset('storage/' . $order->topographic_survey) }}"
                                        target="_blank">ici</a> pour
                                    télécharger la levée topographique</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
