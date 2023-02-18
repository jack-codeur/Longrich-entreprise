@extends('layouts.auth')

@section('login')

<div class="account-login section" style="padding: 40px; background-color: #6c757d !important">
    <div class="container">
        <div class="row" style="padding: 40px; background-color: #6c757d !important">
            <div>
                @if ($errors->any())
                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 card">
                <div class="d-flex justify-content-between modal-header">
                    <div class="">
                        <img src="{{asset('assets/images/hero/Longrich_Logo_3.webp')}}" width="120px"/>
                    </div>
                    <div  class="bg-danger rounded-3 p-1 mx-1 text-center">
                        <strong class="modal-title text-light text-uppercase pl-6">Connectez-vous à votre compte, pour avoir accès à toutes les fonctionalités de Young Of Longrich. </strong>
                    </div>
                    <div class="">
                        <img class="" src="{{asset('assets/images/hero/Longrich_Logo_3.webp')}}" width="120px"/>
                    </div>
                </div>
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body">

                        <div class="form-group input-group">
                            <label for="reg-tel">{{ __('Téléphone') }}</label>
                            <input type="text" id="reg-tel" class="form-control @error('nmeroTel') 'is-invalid' @enderror" name="nmeroTel" value="{{ old('nmeroTel') }}" required autocomplete="nmeroTel" autofocus>
                            @error('nmeroTel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">{{ __('Mot de passe') }}</label>
                            <input type="password" id="reg-pass" class="form-control @error('password') 'is-invalid' @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Connexion</button>
                        </div>
                        <p class="outer-link">Vous n'avez de compte?<a href="{{ route('creation.index') }}">Créer un compte </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection