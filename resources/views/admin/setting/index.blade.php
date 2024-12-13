@extends('admin.layouts.master')
@section('title', 'Paramètres')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Paramètres</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Paramètres</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Présentation générale</h2>
            <p class="section-lead">
                Organiser et ajuster tous les paramètres du site.
            </p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-large-icons">
                        <div class="card-icon bg-primary text-white">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-body">
                            <h4>Profil</h4>
                            <p>Informations de votre profile comme votre nom d'utilisateur, mot de passe, etc..
                            </p>
                            <a href="{{ route('profile.edit') }}" class="card-cta">Modifier <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-large-icons">
                        <div class="card-icon bg-primary text-white">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="card-body">
                            <h4>Paramètres généraux</h4>
                            <p>Paramètres généraux tels que l'image de la bannière, la section à propos, etc...</p>
                            <a href="{{ route('admin.general-setting.index') }}" class="card-cta">Modifier <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
