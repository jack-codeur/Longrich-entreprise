<div class="app-content p-md-3 p-lg-4 py-3">

        @include('livewire.admin.create_form.create_product_all')
        @include('livewire.admin.edit_form.edit_product_all')
        
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="m-0">Accueil</h6>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Produits soins</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 pt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-blue d-flex flex-wrap align-items-center">
                        <h3 class="card-title flex-grow-1 mb-2">Liste des produits de soins et beauté</h3>
                        <div class="card-tools d-flex flex-wrap align-items-center">

                            <button class="btn text-white mb-2 mr-4 d-block" wire:click="showAddprdtSoins" style="background-color: rgb(59, 85, 202);">Créer un produit</button>

                            <div class="input-group input-group-md" style="width: 250px;">
                                <input type="text" wire:model.debounce.500ms="search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end mr-2">
                        <div class="form-group">
                            <label for="filterByEtat">Filtre par etat</label>
                            <select type="text" wire:model="filterEtat" id="filterByEtat" class="form-control">
                                <option value="">---Aucun---</option>
                                <option value="oui">Disponible</option>
                                <option value="non">Non disponible</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap table-striped">
                            <thead>
                                <tr>
                                    <th style="width:5%" class="text-center">N°produit</th>
                                    <th style="width:25%" class="text-center">Nom du produit</th>
                                    <th style="width:25%" class="text-center">Disponible</th>
                                    <th style="width:20%" class="text-center">Prix réel</th>
                                    <th style="width:20%" class="text-center">Prix promo</th>
                                    <th style="width:20%" class="text-center">Publié</th>
                                    <th style="width:30%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($_soins as $soins )
                                {{-- @if ($soins->id_typeArticle == 2) --}}
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{asset('storage/'.$soins->image_1)}}" width="60px" height="60px"/>
                                        </td>
                                        <td class="text-center">{{$soins->nom_produit}}</td>
                                        <td class="text-center">
                                            @if((string)$soins->EstDisponible === 'oui')
                                                <span class="badge badge-success">Oui</span>
                                            @else
                                                <span class="badge badge-danger">Non</span>
                                            @endif
                                        </td>
                                        <td class="text-center text-uppercase text-danger">{{$soins->prix_reel}}fcfa</td>
                                        <td class="text-center text-uppercase text-success">{{$soins->prix_promo}}fcfa</td>
                                        <td class="text-center">{{$soins->created_at->diffForHumans()}}</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" wire:click="showEditProduct({{$soins->id}})"><i class="far fa-edit fa-1x"></i></button>
                                            <button class="btn btn-success" wire:click="confirmDelete('{{$soins->nom_produit}}', {{$soins->id}})"><i class="far fa-trash-alt fa-1x"></i></button>
                                        </td>
                                    </tr>
                                {{-- @endif --}}
                                @empty
                                    <tr>
                                        <td colspan="7">
                                            <div class="alert alert-danger">
                                                <h5><i class="icon fas fa-ban fa-1x">Aucune information ne corresponde au donnée de rechreche</i></h5>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer flot-right">
                        <div class="float-right">
                            {{ $_soins->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>

            window.addEventListener("showConfirmMessage", event =>{
                
                Swal.fire({
                    title: event.detail.message.title,
                    text: event.detail.message.text,
                    icon: event.detail.message.icon,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirmer',
                    cancelButtonText: 'Annuler'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        @this.deleteProduct(event.detail.message.data.product_id);
                    }
                });

                window.addEventListener("showSuccesMessage", event =>{
                
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    toast: true,
                    title: event.detail.message,
                    showConfirmButton: false,
                    timer: 3000,
                })
            });

            });

        </script>
    
</div><!--//app-content-->
