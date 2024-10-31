@extends('frontend.layouts.master')
@section('title', 'Essai')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero')
    {{-- Hero section --}}

    <!-- Essai-Area-Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ $essaiTitle->title ?? 'Demande d\'essai' }}</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p>{{ $devisTitle->sub_title ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum eu mi nec tristique. Aenean vel nulla
                    tempus, tincidunt massa et, congue enim. Fusce tincidunt tincidunt velit in feugiat. Vestibuenim. Morbi viverra
                    luctus. In rhoncus viverra ligula vel aliquam. Phasellus vestibulum maximus arcu a sollicitudin. ' }}</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Essai-Form -->
                    <form class="essai-form" id="essai-form" action="{{ route('essai') }}" method="POST">
                        @csrf
                        <div class="row">

                            <!-- Nom -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-nom" class="form-label">Nom *</label>
                                    <input type="text" name="nom" id="form-nom" class="input-box" placeholder="Ex : Jae" required>
                                </div>
                            </div>

                            <!-- Prénoms -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-prenoms" class="form-label">Prénoms *</label>
                                    <input type="text" name="prenoms" id="form-prenoms" class="input-box" placeholder="Ex : John" required>
                                </div>
                            </div>

                            <!-- Téléphone -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-telephone" class="form-label">Téléphone</label>
                                    <input type="text" name="telephone" id="form-telephone" class="input-box" placeholder="Ex : +229 75102365">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-email" class="form-label">Email *</label>
                                    <input type="email" name="email" id="form-email" class="input-box" placeholder="Ex : john@gmail.com" required>
                                </div>
                            </div>

                            <!-- Adresse -->
                            <div class="col-sm-12">
                                <div class="form-box">
                                    <label for="form-adresse" class="form-label">Adresse</label>
                                    <input type="text" name="adresse" id="form-adresse" class="input-box" placeholder="Ex : Pavillon bleu Rue 190">
                                </div>
                            </div>

                            <!-- Type de bâtiments  -->
                            <div class="col-sm-12">
                                <div class="form-box">
                                    <label for="form-adresse" class="form-label">Type de bâtiments  *</label>
                                    <select name="batiments" id="form-batiments" class="input-box" required>
                                        <option value="" disabled selected>Ex : R+3</option>
                                        <option value="Banikoara">R + 2</option>
                                        <option value="Gogounou">R + 3</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Commune -->
                            <div class="col-sm-12">
                                <div class="form-box">
                                    <label for="form-adresse" class="form-label">Commune *</label>
                                    <select name="commune" id="form-commune" class="input-box" required>
                                        <option value="" disabled selected>Choisissez une commune</option>
                                        <option value="Banikoara">Banikoara</option>
                                        <option value="Gogounou">Gogounou</option>
                                        <option value="Kandi (chef-lieu)">Kandi (chef-lieu)</option>
                                        <option value="Karimama">Karimama</option>
                                        <option value="Malanville">Malanville</option>
                                        <option value="Segbana">Segbana</option>
                                        <option value="Boukoumbé">Boukoumbé</option>
                                        <option value="Cobly">Cobly</option>
                                        <option value="Kérou">Kérou</option>
                                        <option value="Kouandé">Kouandé</option>
                                        <option value="Matéri">Matéri</option>
                                        <option value="Natitingou (chef-lieu)">Natitingou (chef-lieu)</option>
                                        <option value="Péhunco">Péhunco</option>
                                        <option value="Tanguiéta">Tanguiéta</option>
                                        <option value="Toucountouna">Toucountouna</option>
                                        <option value="Abomey-Calavi">Abomey-Calavi</option>
                                        <option value="Allada (chef-lieu)">Allada (chef-lieu)</option>
                                        <option value="Kpomassè">Kpomassè</option>
                                        <option value="Ouidah">Ouidah</option>
                                        <option value="Sô-Ava">Sô-Ava</option>
                                        <option value="Toffo">Toffo</option>
                                        <option value="Tori-Bossito">Tori-Bossito</option>
                                        <option value="Zè">Zè</option>
                                        <option value="Bembéréké">Bembéréké</option>
                                        <option value="Kalalé">Kalalé</option>
                                        <option value="N'Dali">N'Dali</option>
                                        <option value="Nikki">Nikki</option>
                                        <option value="Parakou (chef-lieu)">Parakou (chef-lieu)</option>
                                        <option value="Pèrèrè">Pèrèrè</option>
                                        <option value="Sinendé">Sinendé</option>
                                        <option value="Tchaourou">Tchaourou</option>
                                        <option value="Bantè">Bantè</option>
                                        <option value="Dassa-Zoumé (chef-lieu)">Dassa-Zoumé (chef-lieu)</option>
                                        <option value="Glazoué">Glazoué</option>
                                        <option value="Ouèssè">Ouèssè</option>
                                        <option value="Savalou">Savalou</option>
                                        <option value="Savè">Savè</option>
                                        <option value="Aplahoué (chef-lieu)">Aplahoué (chef-lieu)</option>
                                        <option value="Djakotomey">Djakotomey</option>
                                        <option value="Dogbo">Dogbo</option>
                                        <option value="Klouékanmè">Klouékanmè</option>
                                        <option value="Lalo">Lalo</option>
                                        <option value="Toviklin">Toviklin</option>
                                        <option value="Bassila">Bassila</option>
                                        <option value="Copargo">Copargo</option>
                                        <option value="Djougou (chef-lieu)">Djougou (chef-lieu)</option>
                                        <option value="Ouaké">Ouaké</option>
                                        <option value="Cotonou (chef-lieu)">Cotonou (chef-lieu)</option>
                                        <option value="Athiémé">Athiémé</option>
                                        <option value="Bopa">Bopa</option>
                                        <option value="Comè">Comè</option>
                                        <option value="Grand-Popo">Grand-Popo</option>
                                        <option value="Houéyogbé">Houéyogbé</option>
                                        <option value="Lokossa (chef-lieu)">Lokossa (chef-lieu)</option>
                                        <option value="Adjarra">Adjarra</option>
                                        <option value="Adjohoun">Adjohoun</option>
                                        <option value="Aguégués">Aguégués</option>
                                        <option value="Akpro-Missérété">Akpro-Missérété</option>
                                        <option value="Avrankou">Avrankou</option>
                                        <option value="Bonou">Bonou</option>
                                        <option value="Dangbo">Dangbo</option>
                                        <option value="Porto-Novo (chef-lieu)">Porto-Novo (chef-lieu)</option>
                                        <option value="Sèmè-Kpodji">Sèmè-Kpodji</option>
                                        <option value="Adja-Ouèrè">Adja-Ouèrè</option>
                                        <option value="Ifangni">Ifangni</option>
                                        <option value="Kétou">Kétou</option>
                                        <option value="Pobè (chef-lieu)">Pobè (chef-lieu)</option>
                                        <option value="Sakété">Sakété</option>
                                        <option value="Abomey (chef-lieu)">Abomey (chef-lieu)</option>
                                        <option value="Agbangnizoun">Agbangnizoun</option>
                                        <option value="Bohicon">Bohicon</option>
                                        <option value="Covè">Covè</option>
                                        <option value="Djidja">Djidja</option>
                                        <option value="Ouinhi">Ouinhi</option>
                                        <option value="Za-Kpota">Za-Kpota</option>
                                        <option value="Zagnanado">Zagnanado</option>
                                        <option value="Zogbodomey">Zogbodomey</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Levé topographique du site -->
                            <div class="col-sm-12">
                                <div class="form-box" style="position: relative;">
                                    <label for="form-plan" class="form-label">Levé topographique du site</label>
                                    <input type="file" name="plan_topographique" id="form-plan" accept=".pdf,.dwg" required 
                                        onchange="updatePlaceholder(this)" style="opacity: 0; position: absolute; z-index: -1;">
                                    <input type="text" class="input-box" id="custom-file-input" 
                                        placeholder="Ex : levé topographique .pdf" 
                                        onclick="document.getElementById('form-plan').click();" readonly>
                                    <i class="fa fa-download" aria-hidden="true" 
                                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" 
                                    onclick="document.getElementById('form-plan').click();"></i>
                                </div>
                            </div>

                            <!-- Bouton de soumission aligné à droite -->
                            <div class="col-sm-12 text-right">
                                <button class="button-blue-trans mouse-dir wow fadeInUp"
                                    data-wow-delay="0.5s" type="submit" id="submit_btn">
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

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection


