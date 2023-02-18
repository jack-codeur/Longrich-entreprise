{{-- <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Les differents produits disponible</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i>Accueil</a></li>
                    <li><a href="javascript:void(0)">Boutique</a></li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">

                <div class="product-sidebar">

                    <div class="single-widget search">
                        <h3>Rechercher un produit</h3>
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>


                    <div class="single-widget">
                        <h3>Toutes les categories</h3>
                        <ul class="list">
                            <li>
                                <a href="{{ route('produit_sante.index')}}">Santé</a><span>(1138)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_soins')}}">Soins et beauté</a><span>(2356)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_hygiene')}}">Hygiéne et traitement</a><span>(420)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_bebe')}}">Spécial Bébé</a><span>(1239)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_ordis')}}">Ordinateurs</a><span>(874)</span>
                            </li>
                            <li>
                                <a href="{{ route('produit_autres')}}">Accessoires</a><span>(340)</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-9 col-12">
                <div class="product-grids-head">
                    <div class="product-grid-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="product-sorting">
                                    <h4>Les produits recents</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="lni lni-grid-alt"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="lni lni-list"></i></button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                            <div class="row">
                                @forelse ($products as $product)
                                    @if ($product->id_typeArticle == 1)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <img src="{{asset('storage/'.$product->image_1)}}" width="100px" height="200px">
                                                <div class="button">
                                                    <a href="{{ route('details_produit.index')}}" class="btn"><i class="lni lni-cart"></i>Ajouter panier</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <span class="category">{{$product->types->nomTypeArticle}}</span>
                                                <h4 class="title">
                                                    <a href="{{ route('details_produit.index')}}">{{$product->nom_produit}}</a>
                                                </h4>
                                                <ul class="review">
                                                    <li><i class="lni lni-star-filled"></i></li>
                                                    <li><i class="lni lni-star-filled"></i></li>
                                                    <li><i class="lni lni-star-filled"></i></li>
                                                    <li><i class="lni lni-star-filled"></i></li>
                                                    <li><i class="lni lni-star"></i></li>
                                                    <li><span>4.0 Review(s)</span></li>
                                                </ul>
                                                <div class="price d-flex justify-content-between">
                                                    <span class="text-danger"><s>{{$product->prix_reel}}fr cfa</s></span>
                                                    <span class="">{{$product->prix_promo}}fr cfa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @empty
                                        
                                @endforelse
                            </div>
                            <div class="float-end">
                                <div class="">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row">
                            @forelse ($products as $product)
                                @if ($product->id_typeArticle == 1)
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="{{asset('storage/' .$product->image_1)}}" alt="imqge du produit" width="300px" height="250px">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                                            Ajouter panier
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">{{$product->types->nomTypeArticle}}</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">{{$product->nom_produit}}</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price d-flex justify-content-between col-8 ">
                                                        <span class="text-danger"><s>{{$product->prix_reel}}fr cfa</s></span>
                                                        <span class="">{{$product->prix_promo}}fr cfa</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endif
                            @empty
                                
                            @endforelse
                            </div>
                            <div class="float-end">
                                <div class="">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}