<!-- Modal -->
<div class="modal fade" id="modalAdd"  tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <form role="form" wire:submit.prevent='createArticle()'>
                        @csrf
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Catégorie</label>
                                    <select type="text"  wire:model="addArticle.id_typeArticle" class="form-control @error('addArticle.id_typeArticle') is-invalid @enderror">
                                        <option value="">---Aucune---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->nomTypeArticle}}</option>
                                        @endforeach
                                    </select>
                                    @error('addArticle.id_typeArticle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex-grow-1">
                                    <label>Model</label>
                                    <input type="text" wire:model="addArticle.nom_produit" class="form-control @error('addArticle.nom_produit') is-invalid @enderror">
                                    @error('addArticle.nom_produit')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-wrap my-4">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>La disponibilité</label>
                                    <select type="text" wire:model="addArticle.EstDisponible" class="form-control @error('addArticle.EstDisponible') is-invalid @enderror">
                                        <option value="">---Aucune valeur---</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    @error('addArticle.EstDisponible')
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
                                                @error('image_1', 'image_2', 'image_3', 'image_4')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="d-flex flex-wrap">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Prix réel</label>
                                    <input type="number" class="form-control" wire:model="addArticle.prix_reel" class="form-control @error('addArticle.prix_reel') is-invalid @enderror">
                                    @error('addArticle.prix_reel')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>Prix promotionnel</label>
                                    <input type="number" wire:model="addArticle.prix_promo" class="form-control @error('addArticle.prix_promo') is-invalid @enderror">
                                    @error('addArticle.prix_promo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Caracteristique</label>
                                <textarea type="text" wire:model="addArticle.caracteristique" rows="4" class="form-control @error('addArticle.caracteristique') is-invalid @enderror" placeholder="Caracteristiques ..."></textarea>
                                @error('addArticle.caracteristique')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-primary flex-grow-1">Enregistrer</button>
                            <button type="button" wire:click="closeModal" class="btn btn-danger flex-grow-1 ml-2">Fermer</button>
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