<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">
                    <span class="nav-icon">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                        </svg>
                    </span>Les devis
                </h1>
            </div>
            <div class="col-auto">
                    <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="app-search-box col">
                            <form class="app-search-form">   
                                <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button> 
                            </form>
                        </div>
                        <div class="col-auto">		
                             <!-- Button trigger modal -->
                            <button type="button" class="btn btn-color_add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Créer un devis
                            </button>				    
                        </div>
                    </div><!--//row-->
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div><!--//row-->

        <nav id="orders-table-tab" class="bg-pprimary orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Les produits</a>
            <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Les articles électroniques</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Les accessoires</a>
        </nav>
				
        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead style="background-color: rgb(59, 85, 202);">
                                    <tr>
                                        <th style="color: white;" class="cell">N°Devis</th>
                                        <th style="color: white;" class="cell">Nom client</th>
                                        <th style="color: white;" class="cell">Catégories du produit</th>
                                        <th style="color: white;" class="cell">Nom du produit</th>
                                        <th style="color: white;" class="cell">Quatité du produit</th>
                                        <th style="color: white;" class="cell">Prix</th>
                                        <th style="color: white;" class="cell">Durée de création</th>
                                        <th style="color: white;" class="cell">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cell">#15346</td>
                                        <th class="cell">Jacques</th>
                                        <td class="cell"><span class="truncate">Promo</span></td>
                                        <td class="cell">La promotion de chemise</td>
                                        <td class="cell">05</td>
                                        <td class="cell">25.000</td>
                                        <td class="cell"><span class="note">19/10/2021</span></td>
                                        <td class="cell">
                                            <button class="btn-sm border-0">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
												</a>
											</button>
                                            <button class="btn-sm border-0">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="btn-sm border-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                            </button>
                                        </td>				
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                    </div><!--//app-card-body-->		
                </div><!--//app-card-->
            </div> 
            <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            
                            <table class="table mb-0 text-left">
                                <thead style="background-color: rgb(59, 85, 202);">
                                    <tr>
                                        <th style="color: white;" class="cell">N°Devis</th>
                                        <th style="color: white;" class="cell">Nom client</th>
                                        <th style="color: white;" class="cell">Catégories du produit</th>
                                        <th style="color: white;" class="cell">Modèl</th>
                                        <th style="color: white;" class="cell">Quatité du produit</th>
                                        <th style="color: white;" class="cell">Prix</th>
                                        <th style="color: white;" class="cell">Durée de création</th>
                                        <th style="color: white;" class="cell">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cell">#15346</td>
                                        <th class="cell">Jacques</th>
                                        <td class="cell"><span class="truncate">Promo</span></td>
                                        <td class="cell">La promotion de chemise</td>
                                        <td class="cell">05</td>
                                        <td class="cell">25.000</td>
                                        <td class="cell"><span class="note">19/10/2021</span></td>
                                        <td class="cell">
                                            <button class="btn-sm border-0">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
												</a>
											</button>
                                            <button class="btn-sm border-0">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="btn-sm border-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                            </button>
                                        </td>				
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                    </div><!--//app-card-body-->		
                </div><!--//app-card-->
            </div><!--//tab-pane--> 
            <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            
                            <table class="table mb-0 text-left">
                                <thead style="background-color: rgb(59, 85, 202);">
                                    <tr>
                                        <th style="color: white;" class="cell">N°Devis</th>
                                        <th style="color: white;" class="cell">Nom client</th>
                                        <th style="color: white;" class="cell">Catégories du produit</th>
                                        <th style="color: white;" class="cell">Modèl</th>
                                        <th style="color: white;" class="cell">Quatité du produit</th>
                                        <th style="color: white;" class="cell">Prix</th>
                                        <th style="color: white;" class="cell">Durée de création</th>
                                        <th style="color: white;" class="cell">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cell">#15346</td>
                                        <th class="cell">Jacques</th>
                                        <td class="cell"><span class="truncate">Promo</span></td>
                                        <td class="cell">La promotion de chemise</td>
                                        <td class="cell">05</td>
                                        <td class="cell">25.000</td>
                                        <td class="cell"><span class="note">19/10/2021</span></td>
                                        <td class="cell">
                                            <button class="btn-sm border-0">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
												</a>
											</button>
                                            <button class="btn-sm border-0">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="btn-sm border-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                            </button>
                                        </td>				
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                    </div><!--//app-card-body-->		
                </div><!--//app-card-->
            </div><!--//tab-pane-->  
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Création du devis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <form class="settings-form">
                                <div class="app-card-body">
                                    <div class="row mb-3">
                                        <label for="setting-input-1" class="form-label">Le nom du client</label>
                                        <input type="text" class="form-control" id="setting-input-1" placeholder="Le nom du client" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">La cotégorie</label>
                                            <select type="text" class="form-control" id="setting-input-1" value="" required>
                                                <option value="0">--Aucun--</option>
                                                <option value="1">Produit de santé</option>
                                                <option value="2">Prix de vente</option>
                                                <option value="3">Prix en gros</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Le modèl</label>
                                            <input type="text" class="form-control" id="setting-input-1" placeholder="Le modèl du produit" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Nom du produit</label>
                                            <input type="text" class="form-control" id="setting-input-3" placeholder="Le nom du produit" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Nombre total</label>
                                            <input type="text" class="form-control" id="setting-input-4" placeholder="Le nombre total du produit" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="setting-input-1" class="form-label">Prix total</label>
                                        <input type="text" class="form-control" id="setting-input-4" placeholder="Le prix total" required>
                                    </div>                                    
                                    <div class="row mb-3 text-center">
                                        <div class="mb-3 col-12">
                                            <button type="submit" class="col-12 py-2 btn btn-color fs-6 text-uppercase">Valider</button>
                                        </div>
                                    </div>
                                </div><!--//app-card-body-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--//container-fluid-->
</div><!--//app-content-->
