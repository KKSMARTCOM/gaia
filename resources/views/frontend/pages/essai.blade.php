@extends('frontend.layouts.master')
@section('title', "Demande d'essai")
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Essai-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ $essaiTitle->title ?? 'Demande d\'essai' }}</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p>{{ $devisTitle->sub_title ??
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum eu mi nec tristique. Aenean vel nulla tempus, tincidunt massa et, congue enim. Fusce tincidunt tincidunt velit in feugiat. Vestibuenim. Morbi viverra luctus. In rhoncus viverra ligula vel aliquam. Phasellus vestibulum maximus arcu a sollicitudin. ' }}
                    </p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Essai-Form -->
                    <form class="essai-form" id="essai-form" action="{{ route('essai.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Nom -->
                            <div class="col-md-6 mb-3">
                                <label for="form-lastname" class="form-label">Nom <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <input type="text" name="lastname" id="form-lastname" class="input-box"
                                        placeholder="Ex : Jae" required>
                                </div>
                            </div>

                            <!-- Prénoms -->
                            <div class="col-md-6 mb-3">
                                <label for="form-firstname" class="form-label">Prénoms <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <input type="text" name="firstname" id="form-firstname" class="input-box"
                                        placeholder="Ex : John" required>
                                </div>
                            </div>

                            <!-- Téléphone -->
                            <div class="col-md-6 mb-3">
                                <label for="form-phone" class="form-label">Téléphone</label>
                                <div class="form-box">
                                    <input type="text" name="phone" id="form-phone" class="input-box"
                                        placeholder="Ex : +229 75102365">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="form-email" class="form-label">Email <span class="text-danger"> *</span></label>
                                <div class="form-box">
                                    <input type="email" name="email" id="form-email" class="input-box"
                                        placeholder="Ex : john@gmail.com" required>
                                </div>
                            </div>

                            <!-- Adresse -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-address" class="form-label">Adresse</label>
                                <div class="form-box">
                                    <input type="text" name="address" id="form-address" class="input-box"
                                        placeholder="Ex : Pavillon bleu Rue 190">
                                </div>
                            </div>

                            <!-- Service -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-adresse" class="form-label">Service <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    @if ($allServices && $allServices->count() > 0)
                                        <select name="service_id" id="form-services" class="input-box select2" required>
                                            @foreach ($allServices as $item)
                                                <option
                                                    {{ isset($service->id) && $service->id == $item->id ? 'selected' : '' }}
                                                    value="{{ $item->id }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>

                            <!-- Type de bâtiments  -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-building_type" class="form-label">Type de bâtiments <span
                                        class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <select name="building_type" id="form-building_type" class="input-box" required>
                                        <option value="">Veuillez choisir le type de votre bâtiment</option>
                                        <option value="R+2">R + 2</option>
                                        <option value="R+3">R + 3</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Commune -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-adresse" class="form-label">Commune <span class="text-danger">
                                        *</span></label>
                                <div class="form-box">
                                    <select name="commune_id" id="form-commune" class="input-box" required>
                                        <option value="" disabled selected>Choisissez une commune</option>
                                        @if (isset($service))
                                            @foreach ($service->communes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @elseif ($allServices)
                                            @foreach ($allServices[0]->communes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!-- Levé topographique du site -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-plan" class="form-label">Levé topographique du site</label>
                                <div class="form-box" style="position: relative;">
                                    <input type="file" name="topographic_survey" id="form-plan" accept=".pdf,.dwg"
                                        required onchange="updatePlaceholderessai(this)"
                                        style="opacity: 0; position: absolute; z-index: -1;">
                                    <input type="text" class="input-box" id="custom-file-input"
                                        placeholder="Ex : levé topographique .pdf"
                                        onclick="document.getElementById('form-plan').click();" readonly>
                                    <i class="fa fa-download" aria-hidden="true"
                                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                        onclick="document.getElementById('form-plan').click();"></i>
                                </div>
                            </div>

                            <!-- Tableau de services -->
                            <div class="col-sm-12 mt-4">
                                <div class="table-responsive">
                                    <table id="service-table" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Libellé du service</th>
                                                <th>Description</th>
                                                <th>Prix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $service->title ?? $allServices[0]->title }}</td>
                                                <td>
                                                    {!! $service->description ?? $allServices[0]->description !!}
                                                </td>
                                                <td class="price-column d-flex align-items-center"
                                                    style="text-align: center;">
                                                    <input type="text" readonly name="price"
                                                        style="border: none; width:80px;"
                                                        value="{{ $service->base_price ?? $allServices[0]->base_price }}">
                                                    FCFA HT
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Bouton de soumission aligné à droite -->
                            <div class="col-sm-12 text-center">
                                <button class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s"
                                    type="submit" id="submit_btn">
                                    <span class="text">Procéder au paiement</span>
                                    <span class="dir-part"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Essai-Form / -->
                </div>
            </div>
        </div>
    </section>
    <!-- Essai-Area-End -->

    <!-- Autre service-Area-End -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ 'Autres services' }}</h3>
                    </div><br>
                </div>
            </div>
            <div class="row" id="serviceList">
                @include('frontend.ajax.serviceList', ['services' => $services])
            </div>
            <div class="row mt-2">
                @if ($remaining)
                    <div class="col-sm-12 text-center">
                        <a href="{{ route('home') }}" class="button-blue-trans mouse-dir" id="load-more">Voir plus <span
                                class="dir-part"></span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Autre service-Area-Begin -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
