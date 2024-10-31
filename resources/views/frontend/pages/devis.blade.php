@extends('frontend.layouts.master')
@section('title', 'Devis')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero')
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum eu mi nec tristique.
                        Aenean vel nulla
                        tempus, tincidunt massa et, congue enim. Fusce tincidunt tincidunt velit in feugiat. Vestibuenim.
                        Morbi viverra
                        luctus. In rhoncus viverra ligula vel aliquam. Phasellus vestibulum maximus arcu a sollicitudin.
                    </p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Devis-Form -->
                    <form class="devis-form" id="devis-form" action="{{ route('devis') }}" method="POST">
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
                                <label for="form-email" class="form-label">Email *</label>
                                <input type="email" name="email" id="form-email" class="input-box"
                                    placeholder="Ex : john@gmail.com" required>
                            </div>

                            <!-- Nom -->
                            <div class="col-md-6 mb-3">
                                <label for="form-nom" class="form-label">Nom *</label>
                                <input type="text" name="nom" id="form-nom" class="input-box" placeholder="Ex : Jae"
                                    required>
                            </div>

                            <!-- Prénoms -->
                            <div class="col-md-6 mb-3">
                                <label for="form-prenoms" class="form-label">Prénoms *</label>
                                <input type="text" name="prenoms" id="form-prenoms" class="input-box"
                                    placeholder="Ex : John" required>
                            </div>

                            <!-- Adresse d'intervention -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-adresse" class="form-label">Adresse d'intervention *</label>
                                <input type="text" name="adresseintervention" id="form-adresse" class="input-box"
                                    placeholder="Ex : Von panthère Rue 387" required>
                            </div>

                            <!-- Description du projet -->
                            <div class="col-sm-12 mb-2">
                                <label for="form-message" class="form-label">Description du projet *</label>
                                <textarea class="input-box" id="form-description"
                                    placeholder="Donnez-nous plus de précision, Ex: Type de prestation souhaitée, superficie de projet, etc ..."
                                    rows="4" name="message" required></textarea>
                            </div>

                            <!-- Plan topographique -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-plan" class="form-label">Plan topographique</label>
                                <div class="form-box">
                                    <input type="file" name="plan_topographique" id="form-plan" accept=".pdf,.dwg"
                                        required onchange="updatePlaceholder(this)"
                                        style="opacity: 0; position: absolute; z-index: -1;">
                                    <input type="text" class="input-box" id="custom-file-input"
                                        placeholder="Ex : ancienne étude de sol, diagnostic etc."
                                        onclick="document.getElementById('form-plan').click();" readonly>
                                    <i class="fa fa-download" aria-hidden="true"
                                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                        onclick="document.getElementById('form-plan').click();"></i>
                                </div>
                            </div>

                            <!-- Tout autre document technique à votre disposition -->
                            <div class="col-sm-12 mb-3">
                                <label for="form-plan" class="form-label">Tout autre document technique à votre
                                    disposition</label>
                                <div class="form-box">
                                    <input type="file" name="plan_topographique" id="form-plan" accept=".pdf,.dwg"
                                        required onchange="updatePlaceholder(this)"
                                        style="opacity: 0; position: absolute; z-index: -1;">
                                    <input type="text" class="input-box" id="custom-file-input"
                                        placeholder="Ex : Plan topographique .pdf"
                                        onclick="document.getElementById('form-plan').click();" readonly>
                                    <i class="fa fa-download" aria-hidden="true"
                                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                        onclick="document.getElementById('form-plan').click();"></i>
                                </div>
                            </div>

                            <!-- Bouton de soumission aligné à droite -->
                            <div class="col-sm-12 text-right">
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

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection
