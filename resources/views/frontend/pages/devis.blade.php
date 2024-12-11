@extends('frontend.layouts.master')
@section('title', 'Demande de devis')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.destination-header')
    {{-- Hero section --}}

    <!-- Devis-Area-Start -->
    <section class="section-padding-gaia">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">Demande de devis</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p>Pour répondre aux besoins des entreprises, GAIA propose un processus clair et structuré de demande de
                        devis. Remplissez le formulaire de demande en indiquant les informations essentielles suivantes :
                    </p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Devis-Form -->
                    <form class="devis-form" id="devis-form" action="{{ route('devis.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Société -->
                            <div class="col-md-6 mb-3">
                                <label for="form-societe" class="form-label">Société</label>
                                <input type="text" name="societe" id="form-societe" class="input-box"
                                    placeholder="Ex : Jae & fils">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="form-email" class="form-label">Email <span class="text-danger"> *</span></label>
                                <input type="email" name="email" id="form-email" class="input-box"
                                    placeholder="Ex : john@gmail.com" required>
                            </div>

                            <!-- Nom -->
                            <div class="col-md-6 mb-3">
                                <label for="form-nom" class="form-label">Nom <span class="text-danger"> *</span></label>
                                <input type="text" name="nom" id="form-nom" class="input-box" placeholder="Ex : Jae"
                                    required>
                            </div>

                            <!-- Prénoms -->
                            <div class="col-md-6 mb-3">
                                <label for="form-prenoms" class="form-label">Prénoms <span class="text-danger">
                                        *</span></label>
                                <input type="text" name="prenoms" id="form-prenoms" class="input-box"
                                    placeholder="Ex : John" required>
                            </div>

                            <!-- Adresse d'intervention -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-adresse" class="form-label">Adresse d'intervention <span
                                        class="text-danger"> *</span></label>
                                <input type="text" name="adresseintervention" id="form-adresse" class="input-box"
                                    placeholder="Ex : Von panthère Rue 387" required>
                            </div>

                            <!-- Description du projet -->
                            <div class="col-sm-12 mb-2">
                                <label for="form-message" class="form-label">Description du projet <span
                                        class="text-danger"> *</span></label>
                                <textarea class="input-box" id="form-description"
                                    placeholder="Donnez-nous plus de précision, Ex: Type de prestation souhaitée, superficie de projet, etc ..."
                                    rows="4" name="message" required></textarea>
                            </div>

                            <!-- Plan topographique -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-plan-topographique" class="form-label">Plan topographique (Max : 10
                                    MB)</label>
                                <div class="form-box">
                                    <input type="file" name="plan_topographique" id="form-plan-topographique"
                                        accept=".pdf,.dwg"
                                        onchange="updatePlaceholder(this, 'custom-file-input-topographique')"
                                        style="opacity: 0; position: absolute; z-index: -1;">
                                    <input type="text" class="input-box" id="custom-file-input-topographique"
                                        placeholder="Ex : ancienne étude de sol, diagnostic etc."
                                        onclick="document.getElementById('form-plan-topographique').click();" readonly>
                                    <i class="fa fa-download" aria-hidden="true"
                                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                        onclick="document.getElementById('form-plan-topographique').click();"></i>
                                </div>
                            </div>

                            <!-- Tout autre document technique à votre disposition -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-autre-document" class="form-label">Tout autre document technique à votre
                                    disposition (Max: 10MB)</label>
                                <div class="form-box">
                                    <input type="file" name="autre_document" id="form-autre-document" accept=".pdf,.dwg"
                                        onchange="updatePlaceholder(this, 'custom-file-input-autre-document')"
                                        style="opacity: 0; position: absolute; z-index: -1;">
                                    <input type="text" class="input-box" id="custom-file-input-autre-document"
                                        placeholder="Ex : Plan topographique .pdf"
                                        onclick="document.getElementById('form-autre-document').click();" readonly>
                                    <i class="fa fa-download" aria-hidden="true"
                                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                        onclick="document.getElementById('form-autre-document').click();"></i>
                                </div>
                            </div>

                            <!-- Bouton de soumission aligné à droite -->
                            <div class="col-sm-12 text-center">
                                <button class="button-blue-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s"
                                    type="submit" id="submit_btn">
                                    <span class="text">Envoyer</span>
                                    <span class="dir-part"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Devis-Form / -->
                </div>
            </div>
        </div>
    </section>
    <!-- Devis-Area-End -->

    <!-- Partner-Area-Start -->
    @include('frontend.pages.widgets.partner')
    <!-- Partner-Area-End -->

@endsection
