<!-- Modal -->
<div class="modal fade" id="modalEdit"  tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modifier un produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <form role="form" wire:submit.prevent="updateProduct()">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Catégorie</label>
                                    <select type="text" wire:model="editProduct.id_typeArticle" class="form-control @error('editProduct.id_typeArticle') is-invalid @enderror">
                                        <option value="">---Aucune valeur---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->nomTypeArticle}}</option>
                                        @endforeach
                                    </select>
                                    @error('editProduct.id_typeArticle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex-grow-1">
                                    <label>Nom du produit</label>
                                    <input type="text" wire:model="editProduct.nom_produit" class="form-control @error('editProduct.nom_produit') is-invalid @enderror">
                                    @error('editProduct.nom_produit')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>La disponibilité</label>
                                <select type="text" wire:model="editProduct.EstDisponible" class="form-control @error('editProduct.EstDisponible') is-invalid @enderror">
                                    <option value="">---Aucune valeur---</option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                                @error('editProduct.EstDisponible')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Prix de vente</label>
                                    <input type="number" class="form-control" wire:model="editProduct.prix_reel" class="form-control @error('editProduct.prix_reel') is-invalid @enderror">
                                    @error('editProduct.prix_reel')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>Prix promotionnel</label>
                                    <input type="number" wire:model="editProduct.prix_promo" class="form-control @error('editProduct.prix_promo') is-invalid @enderror">
                                    @error('editProduct.prix_promo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" rows="3" wire:model="editProduct.description_produit"  class="form-control @error('editProduct.description_produit') is-invalid @enderror"></textarea>
                                @error('editProduct.description_produit')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Mode d'utilisantion</label>
                                <textarea type="text" rows="3" wire:model="editProduct.mode_utilisation"  class="form-control @error('editProduct.mode_utilisation') is-invalid @enderror"></textarea>
                                @error('editProduct.mode_utilisation')
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
            'show': true,
            'backdrop': 'static'
        })
    })
    window.addEventListener('closeEditModal', event =>{
        $('#modalEdit').modal('hide')
    })
</script>