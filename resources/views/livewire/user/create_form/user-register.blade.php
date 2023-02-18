<div>
    <div class="account-login section" style="background-color: #6c757d !important; padding: 30px 0 !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12 card">
                    <div>
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
                    <form role="form" wire:submit.prevent='createUser()'>
                        @csrf
                        <div class="card-body">
                            
                            <div class="form-group input-group">
                                <label for="reg-ln">{{ __('Nom') }}</label>
                                <input type="text" wire:model='addUser.nom' id="reg-ln" class="form-control @error('addUser.nom') is-invalid @enderror" autocomplete="addUser.nom" autofocus>
                                @error('addUser.nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group input-group">
                                <label for="reg-tel">{{ __('Téléphone') }}</label>
                                <input type="text" wire:model='addUser.nmeroTel' id="reg-tel" class="form-control @error('addUser.nmeroTel') is-invalid @enderror" autocomplete="addUser.nmeroTel" autofocus>
                                @error('addUser.nmeroTel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group">
                                <label for="reg-email">{{ __('E-mail') }}</label>
                                <input type="email" wire:model='addUser.email' id="reg-email" class="form-control @error('addUser.email') is-invalid @enderror" autocomplete="email" autofocus>
                                
                                @error('addUser.email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="text-danger">Le e-mail n'est pas obligatoire!</small>
                            </div>
                            
                            <div class="form-group input-group">
                                <label for="reg-fn">{{ __('Mot de passe') }}</label>
                                <input type="password" wire:model='addUser.password' id="reg-pass" class="form-control @error('addUser.password') is-invalid @enderror"  autocomplete="addUser.password">
                                @error('addUser.password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="text-danger">Minimum 04 chiffres/caractères</small>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">VALIDER</button>
                            </div>
                            <p class="outer-link">Avez-vous un compte? <a href="{{route('login.index')}}">Connectez vous </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
