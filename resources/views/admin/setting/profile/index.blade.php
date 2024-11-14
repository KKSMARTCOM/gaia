@extends('admin.layouts.master')
@section('title', 'Profile')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Salut, {{ $user->name }} !</h2>
            <p class="section-lead">
                Modifiez les informations vous concernant sur cette page.
            </p>

            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>Informations du profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="">
                                                <div id="image-preview" class="image-preview">
                                                    <label for="image-upload" id="image-label">Choisir</label>
                                                    <input type="file" name="avatar" id="image-upload" />
                                                </div>
                                            </div>
                                            <label class="col-form-label mt-2">Photo de profile</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <div>
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $user->name ?? old('name') }}" required="">
                                            @if ($errors->has('name'))
                                                <code>{{ $errors->first('name') }}</code>
                                            @endif
                                        </div>
                                        <div class="mt-4">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $user->email ?? old('email') }}" required="">
                                            @if ($errors->has('email'))
                                                <code>{{ $errors->first('email') }}</code>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Enrégistrer</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="card">

                        <div class="card-header">
                            <h4>Modifier votre mot de passe</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('password.auth.update') }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="form-group  col-12">
                                        <label>Mot de passe actuel</label>
                                        <input type="password" class="form-control" name="old_password">
                                        @error('old_password')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group  col-12">
                                        <label>Nouveau mot de passe</label>
                                        <input type="password" class="form-control" name="password">
                                        @error('password')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Confirmer le nouveau mot de passe</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                        @error('password_confirmation')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Enrégistrer</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
