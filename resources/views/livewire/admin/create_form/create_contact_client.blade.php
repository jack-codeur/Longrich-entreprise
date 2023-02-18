<!-- Modal -->
<div class="modal fade" id="modalAdd"  tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <form role="form" wire:submit.prevent='createProduitSoins()'>
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Nom</label>
                                    <input type="text"  wire:model="addUser.nom" class="form-control @error('addUser.nom') is-invalid @enderror"/>
                                    @error('addUser.nom')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex-grow-1">
                                    <label>Prenom</label>
                                    <input type="text" wire:model="addUser.prenom" class="form-control @error('addUser.prenom') is-invalid @enderror">
                                    @error('addUser.prenom')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Pays</label>
                                    <input type="text" wire:model="addUser.pays" class="form-control @error('addUser.pays') is-invalid @enderror">
                                    @error('addUser.pays')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            
                                <div class="form-group flex-grow-1">
                                    <label>Ville</label>
                                    <input type="text" wire:model="addUser.ville" class="form-control @error('addUser.ville') is-invalid @enderror">
                                    @error('addUser.ville')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Commune</label>
                                <input type="text" wire:model="addUser.commune" class="form-control @error('addUser.commune') is-invalid @enderror">
                                @error('addUser.commune')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-around">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Sexe</label>
                                    <select type="text" wire:model="addUser.sexe" class="form-control @error('addUser.sexe') is-invalid @enderror">
                                        <option value="">---Aucune---</option>
                                        <option value="H">Homme</option>
                                        <option value="F">Femme</option>
                                    </select>
                                    @error('addUser.sexe')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>N° téléphone</label>
                                    <input type="text" wire:model="addUser.numeroTel" class="form-control @error('addUser.numeroTel') is-invalid @enderror">
                                    @error('addUser.numeroTel')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>E-mail</label>
                                    <input type="text" wire:model="addUser.email" class="form-control @error('addUser.email') is-invalid @enderror">
                                    @error('addUser.email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>Mot de passe</label>
                                    <input type="text" wire:model="addUser.password" class="form-control @error('addUser.password') is-invalid @enderror">
                                    @error('addUser.password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-primary flex-grow-1">Enregistrer</button>
                            <button type="button" wire:click="closeModal()" class="btn btn-danger flex-grow-1 ml-2">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    window.addEventListener('showModal', event =>{
        $('#modalAdd').modal({
            "show": true,
            "backdrop": "static"
        });
    });
    window.addEventListener('closeModal', event =>{
        $('#modalAdd').modal('hide');
    });
</script>