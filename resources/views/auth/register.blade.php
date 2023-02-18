@extends('layouts.user.master_2')

@section('content')

{{-- <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h3 class="">{{ __('Enregistrement') }}</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h5 class="text-danger">Enregistrez vous pour recevoir nos meilleurs services</h5>
            </div>
        </div>
    </div>
</div> --}}

<div class="account-login section" style="background-color: #6c757d !important; padding: 30px 0 !important">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 card">
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
                    @if(Session::has('message'))
                        <div class="alert alert-danger">
                            {{ Session::get('message') }}
                            @php
                                Session::forget('message');
                            @endphp
                        </div>
                    @endif
                </div>
                <div class="d-flex justify-content-between modal-header">
                    <div class="">
                        <img src="{{asset('assets/images/hero/Longrich_Logo_3.webp')}}" width="100px"/>
                    </div>
                    <div  class="bg-danger rounded-3 p-1 mx-1 text-center">
                        <strong class="modal-title text-light text-uppercase pl-6">Création de compte, pour avoir accès à toutes les fonctionalités de Young Of Longrich. </strong>
                    </div>
                    <div class="">
                        <img class="" src="{{asset('assets/images/hero/Longrich_Logo_3.webp')}}" width="100px"/>
                    </div>
                </div>
                <form  method="POST" action="{{ route('creation') }}">
                    @csrf
                    <div class="card-body">
                        
                        <div class="form-group input-group">
                            <label for="reg-ln">{{ __('Nom') }}</label>
                            <input type="text" id="reg-ln" class="form-control @error('nom') 'is-invalid' @enderror" name="nom" autocomplete="nom" autofocus>
                            
                            @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-tel">{{ __('Téléphone') }}</label>
                            <input type="text" id="reg-tel" class="form-control @error('nmeroTel') 'is-invalid' @enderror" name="nmeroTel" autocomplete="nmeroTel" autofocus>
                            
                            @error('nmeroTel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-email">{{ __('E-mail') }}</label>
                            <input type="email" id="reg-email" class="form-control @error('email') 'is-invalid' @enderror" name="email" autocomplete="email" autofocus>
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group input-group">
                            <label for="reg-fn">{{ __('Mot de passe') }}</label>
                            <input type="password" id="reg-pass" class="form-control @error('password') 'is-invalid' @enderror" name="password"  autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small>Minimum 04 chiffres/caractères</small>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">VALIDER</button>
                        </div>
                        <p class="outer-link">Avez-vous un compte? <a href="{{route('login')}}">Connectez vous </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection