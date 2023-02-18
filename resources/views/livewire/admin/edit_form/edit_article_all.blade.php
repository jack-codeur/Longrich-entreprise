<!-- Modal -->
<div class="modal fade" id="modalEdit"  tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modifier un article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <form role="form" wire:submit.prevent='updateArticle()'>
                        @csrf
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Catégorie</label>
                                    <select type="text"  wire:model="editArticle.id_typeArticle" class="form-control @error('editArticle.id_typeArticle') is-invalid @enderror">
                                        <option value="">---Aucune---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->nomTypeArticle}}</option>
                                        @endforeach
                                    </select>
                                    @error('editArticle.id_typeArticle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex-grow-1">
                                    <label>Model</label>
                                    <input type="text" wire:model="editArticle.nom_produit" class="form-control @error('editArticle.nom_produit') is-invalid @enderror">
                                    @error('editArticle.nom_produit')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-4">
                                <label>La disponibilité</label>
                                <select type="text" wire:model="editArticle.EstDisponible" class="form-control @error('editArticle.EstDisponible') is-invalid @enderror">
                                    <option value="">---Aucune valeur---</option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                                @error('editArticle.EstDisponible')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Prix réel</label>
                                    <input type="number" class="form-control" wire:model="editArticle.prix_reel" class="form-control @error('editArticle.prix_reel') is-invalid @enderror">
                                    @error('editArticle.prix_reel')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>Prix promotionnel</label>
                                    <input type="number" wire:model="editArticle.prix_promo" class="form-control @error('editArticle.prix_promo') is-invalid @enderror">
                                    @error('editArticle.prix_promo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Caracteristique</label>
                                <textarea type="text" wire:model="editArticle.caracteristique" rows="4" class="form-control @error('editArticle.caracteristique') is-invalid @enderror" placeholder="Caracteristiques ..."></textarea>
                                @error('editArticle.caracteristique')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-primary flex-grow-1">Enregistrer</button>
                            <button type="button" wire:click="closeEditModal()" class="btn btn-danger flex-grow-1 ml-2">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    window.addEventListener('showEditModal', event =>{
        $('#modalEdit').modal({
            "show": true,
            "backdrop": "static"
        });
    });
    window.addEventListener('closeEditModal', event =>{
        $('#modalEdit').modal('hide');
    });
</script>