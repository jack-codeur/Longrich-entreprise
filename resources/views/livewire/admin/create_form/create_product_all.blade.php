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
                    <form role="form" wire:submit.prevent="createProduct()">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Catégorie</label>
                                    <select type="text" wire:model="addProduct.id_typeArticle" class="form-control @error('addProduct.id_typeArticle') is-invalid @enderror">
                                        <option value="">---Aucune valeur---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->nomTypeArticle}}</option>
                                        @endforeach
                                    </select>
                                    @error('addProduct.id_typeArticle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex-grow-1">
                                    <label>Nom du produit</label>
                                    <input type="text" wire:model="addProduct.nom_produit" class="form-control @error('addProduct.nom_produit') is-invalid @enderror">
                                    @error('addProduct.nom_produit')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>La disponibilité</label>
                                <select type="text" wire:model="addProduct.EstDisponible" class="form-control @error('addProduct.EstDisponible') is-invalid @enderror">
                                    <option value="">---Aucune valeur---</option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                                @error('addProduct.EstDisponible')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="row my-4 ml-1"  style="border: 1px solid black; border-radius: 10px !important ; width: 100%; height: 27vh">
                                <div class="col-8">
                                    <div  class="form-group">
                                        <label>Ajouter des images</label>
                                        <input type="file" wire:model='image_1' class=" bg-yellow">
                                        <input type="file" wire:model='image_2' class=" bg-yellow">
                                        <input type="file" wire:model='image_3' class=" bg-yellow">
                                        <input type="file" wire:model='image_4' class=" bg-yellow">
                                        @error('images')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Prix de vente</label>
                                    <input type="number" class="form-control" wire:model="addProduct.prix_reel" class="form-control @error('addProduct.prix_reel') is-invalid @enderror">
                                    @error('addProduct.prix_reel')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>Prix promotionnel</label>
                                    <input type="number" wire:model="addProduct.prix_promo" class="form-control @error('addProduct.prix_promo') is-invalid @enderror">
                                    @error('addProduct.prix_promo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" rows="3" wire:model="addProduct.description_produit"  class="form-control @error('addProduct.description_produit') is-invalid @enderror"></textarea>
                                @error('addProduct.description_produit')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Mode d'utilisantion</label>
                                <textarea type="text" rows="3" wire:model="addProduct.mode_utilisation"  class="form-control @error('addProduct.mode_utilisation') is-invalid @enderror"></textarea>
                                @error('addProduct.mode_utilisation')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
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