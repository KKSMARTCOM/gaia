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
                            <p> <span style="font-weight: 700">Id de la transaction :</span> {{ $order->transactionId }}</p>
                            <p> <span style="font-weight: 700">Nom du client :</span> {{ $order->lastname }}</p>
                            <p> <span style="font-weight: 700">Prénom du client :</span> {{ $order->firstname }}</p>
                            <p> <span style="font-weight: 700">Adresse du client :</span> {{ $order->address }}</p>
                            <p> <span style="font-weight: 700">Email du client :</span> {{ $order->email }}</p>
                            <p> <span style="font-weight: 700">Numéro téléphonique du client :</span> {{ $order->phone }}
                            </p>
                            <p> <span style="font-weight: 700">Service :</span> {{ $order->service->title }}</p>
                            <p> <span style="font-weight: 700">Commune :</span> {{ $order->commune->name }}</p>
                            <p> <span style="font-weight: 700">Type de batiment :</span> {{ $order->building_type }}</p>
                            <p> <span style="font-weight: 700">Prix total :</span> {{ $order->price }} cfa</p>
                            @if ($order->topographic_survey)
                                <a href="{{ route('admin.sheet.download', $order->id) }}"
                                    class="btn btn-primary">Télécharger levée topographique</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
