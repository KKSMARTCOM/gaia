@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')
    {{-- Hero section --}}
    @include('frontend.pages.widgets.hero')
    {{-- Hero section --}}

    <!-- Contact-Area-Start -->
    <section class="contact-area section-padding" id="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-title">
                        <h3 class="title">{{ $contactTitle->title ?? 'Formulaire de contact' }}</h3>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Contact-Form -->
                    <form class="contact-form" id="contact-form" action="{{ route('contact.submit') }}" method="POST">
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

                            <!-- Société -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-societe" class="form-label">Société</label>
                                    <input type="text" name="societe" id="form-societe" class="input-box" placeholder="Ex : Jae & fils">
                                </div>
                            </div>

                            <!-- Fonction -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-fonction" class="form-label">Fonction</label>
                                    <input type="text" name="fonction" id="form-fonction" class="input-box" placeholder="Ex : DG">
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

                            <!-- Code Postal -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-code-postal" class="form-label">Code Postal</label>
                                    <input type="text" name="code_postal" id="form-code-postal" class="input-box" placeholder="Ex : +229">
                                </div>
                            </div>

                            <!-- Ville -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="form-ville" class="form-label">Ville</label>
                                    <input type="text" name="ville" id="form-ville" class="input-box" placeholder="Ex : Cotonou">
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-sm-12">
                                <div class="form-box">
                                    <label for="form-message" class="form-label">Message *</label>
                                    <textarea class="input-box" id="form-message" 
                                    placeholder="Ex : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum eu mi
                                    nec tristique. Aenean vel nulla tempus, tincidunt massa et, congueVestibuenim. Morbi 
                                    viverra luctusa et, congue enim. Fusce tincidunt tincidunt velit in feugiat" 
                                    cols="30" rows="6" name="message" required></textarea>
                                </div>
                            </div>

                            <!-- Bouton de soumission aligné à droite -->
                            <div class="col-sm-12 text-right">
                                <button class="button-blue-trans mouse-dir wow fadeInUp"
                                    data-wow-delay="0.5s" type="submit" id="submit_btn">
                                    <span class="text">Envoyer</span>
                                    <span class="dir-part"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Contact-Form / -->
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area-End -->

    <!-- Testimonial-Area-Start -->
    @include('frontend.pages.widgets.testimonial')
    <!-- Testimonial-Area-End -->

@endsection


