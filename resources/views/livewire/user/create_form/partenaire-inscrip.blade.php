<div class="d-flex flex-wrap-reverse">
    <div class="col-lg-8 col-md-8 col-12">
        <div class="">
            <div class="modal-dialog">
                <div class="modal-content col-12">
                    <div class="d-flex justify-content-between modal-header">
                        <div class="">
                            <img src="{{asset('assets/images/hero/Longrich_Logo_3.webp')}}" width="80px"/>
                        </div>
                        <div  class="bg-danger rounded-3 p-1 mx-1 text-center">
                            <strong class="modal-title text-light text-uppercase">Je m'inscris en tant que partenaire à Longrich</strong>
                        </div>
                        <div class="">
                            <img class="" src="{{asset('assets/images/hero/Longrich_Logo_3.webp')}}" width="80px"/>
                        </div>
                    </div>
                    <div class="modal-body p-0">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <form role="form" wire:submit.prevent='InscriPartenaire()'>
                                @csrf
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label>VOTRE NOM</label>
                                        <input type="text" wire:model="InscriPart.nom" class="form-control @error('InscriPart.nom') is-invalid @enderror">
                                        @error('InscriPart.nom')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label>NUMERO TELEPHONE</label>
                                        <input type="text" wire:model="InscriPart.nmeroTel" class="form-control @error('InscriPart.nmeroTel') is-invalid @enderror">
                                        @error('InscriPart.nmeroTel')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label for="country">PAYS</label>
                                        <select wire:model="InscriPart.pays" id="country" class="form-control @error('InscriPart.pays') is-invalid @enderror">
                                            <option value="">Selectionner votre pays</option>
                                            @foreach ($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('InscriPart.pays')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Ville</label>
                                        <input type="text" wire:model="InscriPart.ville" class="form-control @error('InscriPart.ville') is-invalid @enderror">
                                        @error('InscriPart.ville')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>NIVEAU D'ADHESION</label>
                                        <select wire:model="InscriPart.niveau_adhesion" class="form-control @error('InscriPart.niveau_adhesion') is-invalid @enderror">
                                            <option value="">Selectionner un niveau d'adhésion</option>
                                            <option value="Silver promo">Silver promo avec 60PV</option>
                                            <option value="Silver Millionnaire">Silver Millionnaire avec 120PV</option>
                                            <option value="Gold Millionnaire">Gold Millionnaire avec 240PV</option>
                                            <option value="Platinium">Platinium avec 720PV</option>
                                            <option value="VIP">VIP avec 1680PV</option>
                                        </select>
                                        @error('InscriPart.niveau_adhesion')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="card-footer d-flex just px-0">
                                        <button type="submit" class="btn btn-primary flex-grow-1">Enregistrer</button>
                                        <a href="{{route('partenaire')}}" class="btn btn-danger flex-grow-1 ml-2">Fermer</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                window.addEventListener('showModal', event =>{
                    $('#modalInsc').modal({
                        "show": true,
                        "backdrop": "static"
                    });
                });

                window.addEventListener('closeModal', event =>{
                    $('#modalInsc').modal('hide');
                });
                window.addEventListener('showSuccessMessage', event =>{
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        toast: true,
                        title: event.detail.message,
                        showConfirmButton: false,
                        timer: 3000
                    })

                });
                
            </script>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">

        <div class="text-form">
            <div class="text-uppercase text-blue">
                <h4>Choisissez votre kit de demarage en toute confiance avec nous.</h4>
            </div>
            <div class="blog-content">
                <h5 class="mt-4">
                    <b class="text-danger">KIT DE DEMARAGE</b>
                </h5>
                <p class="text-dark fs-5 mt-3">
                    Nous sommes une équipe et nous accompagnons sur tous les plant toutes personnes qui décident et qui deviennet partenaire à devèlopper sons business.
                </p>
                <div class="button mt-3">
                    <a href="javascript:void(0)" class="btn">30 minutes pour suivre la présentation</a>
                </div>
            </div>
        </div>
    </div>
</div>


