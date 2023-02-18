<div>
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 custom-padding-right">
                    <div class="slider-head">
                        <div class="hero-slider">
                            <div class="single-slider" style="background-image: url(assets/images/hero/slider-bg3.jpg);">
                            </div>
                            <div class="single-slider" style="background-image: url(assets/images/hero/designlongrich_1.png);">
                            </div>
                            <div class="single-slider" style="background-image: url(assets/images/hero/Longrich-griotys-tv.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Les produits par catégorie --}}
    <section class="featured-categories section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Articles Par Catégories</h2>
                        <p>Trouvez ici tous les produits et les articles que vous utilisez au quotidien à un prix très bas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading fs-5">Santé</h3>
                        <ul class="nom-maladie">
                            <li>Fibrome</li>
                            <li>Cancère</li>
                            <li>Infection</li>
                            <li>Tension ...</li>
                            <div class="button">
                                <a href="{{route('produit_sante')}}" class="btn">VOIR PLUS</a>
                            </div>
                        </ul>
                        <div class="images">
                            <img src="assets/images/featured-categories/calcium.png" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading fs-5">Soins et beauté</h3>
                        <ul class="">
                            <li>Vieillissement</li>
                            <li>Corps sèc</li>
                            <li>Tâche et Bouton</li>
                            <li>Vergeture ...</li>
                            <div class="button">
                                <a href="{{route('produit_sante')}}" class="btn">VOIR PLUS</a>
                            </div>                        
                        </ul>
                        <div class="images">
                            <img src="assets/images/featured-categories/lait-corporel.png" alt="#">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading fs-5">Hygiène et entretien</h3>
                        <ul class="">
                            <li>Infection</li>
                            <li>Cancère</li>
                            <li>Fibrome</li>
                            <li>mauvaise odeur ...</li>
                            <div class="button">
                                <a href="{{route('produit_hygiene')}}" class="btn">VOIR PLUS</a>
                            </div>
                        </ul>
                        <div class="images">
                            <img src="assets/images/featured-categories/serviette-hygienique-magnetiques.png" alt="#">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading">Spécial Bébé</h3>
                        <ul class="">
                            <li>La peau sèche</li>
                            <li>Les boutons</li>
                            <li>Les tâches</li>
                            <li>Tous types de produits Bébé</li>
                            <div class="button">
                                <a href="{{route('produit_bebe')}}" class="btn">VOIR PLUS</a>
                            </div>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('assets/images/soins/collection_Bebe_360x.jpg')}}" alt="#">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading">Ordinateurs Portable</h3>
                        <ul class="">
                            <li>Model HP</li>
                            <li>Lenevo</li>
                            <li>MacBook</li>
                            <li>Acces ...</li>
                            <div class="button">
                                <a href="{{route('produit_ordis')}}" class="btn">VOIR PLUS</a>
                            </div>
                        </ul>
                        <div class="images">
                            <img src="assets/images/ordis/ideapad-ordinateur.png" alt="#">
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading">Autres</h3>
                        <ul class="">
                            <li>Disque dure</li>
                            <li>Clé USB</li>
                            <li>Chargeur</li>
                            <li>Ecouteur ...</li>
                            <div class="button">
                                <a href="{{route('produit_autres')}}" class="btn">VOIR PLUS</a>
                            </div>
                        </ul>
                        <div class="images">
                            <img src="assets/images/featured-categories/fetured-item-6.png" alt="#">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Les produits disponible --}}
    <section class="trending-product section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Produits disponibles</h2>
                        <p>VOUS TROUVEREZ DANS NOTRE BOUTIQUE TOUS LES PRODUITS DE SANTE, DE SOINS ET TRAITEMENT, ET D'HYGIENNE..</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->types->nomTypeArticle == "Santé")
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('storage/'. $product->image_1)}}" alt="#" width="100%">
                                    <div class="button">
                                        <a href="{{route('produit_sante.show', $product->id)}}" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">{{$product->types->nomTypeArticle}}</span>
                                    <h4 class="title">
                                        <a href="{{route('produit_sante.show', $product->id)}}">{{$product->nom_produit}}</a>
                                    </h4>
                                    <div class="price d-flex justify-content-between">
                                        <span>{{$product->prix_promo}} frcfa</span>
                                        <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                    @if ($product->types->nomTypeArticle == "Soins et beauté")
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('storage/'. $product->image_1)}}" alt="#" width="100%">
                                    <div class="button">
                                        <a href="{{route('produit_soins.show', $product->id)}}" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">{{$product->types->nomTypeArticle}}</span>
                                    <h4 class="title">
                                        <a href="{{route('produit_soins.show', $product->id)}}">{{$product->nom_produit}}</a>
                                    </h4>
                                    <div class="price d-flex justify-content-between">
                                        <span>{{$product->prix_promo}} frcfa</span>
                                        <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                    @if ($product->types->nomTypeArticle == "Hygiéne et traitement")
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('storage/'. $product->image_1)}}" alt="#" width="100%">
                                    <div class="button">
                                        <a href="{{route('produit_hygiene.show', $product->id)}}" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">{{$product->types->nomTypeArticle}}</span>
                                    <h4 class="title">
                                        <a href="{{route('produit_hygiene.show', $product->id)}}">{{$product->nom_produit}}</a>
                                    </h4>
                                    <div class="price d-flex justify-content-between">
                                        <span>{{$product->prix_promo}} frcfa</span>
                                        <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                    @if ($product->types->nomTypeArticle == "Spécial Bébé")
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('storage/'. $product->image_1)}}" alt="#" width="100%">
                                    <div class="button">
                                        <a href="{{route('produit_bebe.show', $product->id)}}" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">{{$product->types->nomTypeArticle}}</span>
                                    <h4 class="title">
                                        <a href="{{route('produit_bebe.show', $product->id)}}">{{$product->nom_produit}}</a>
                                    </h4>
                                    <div class="price d-flex justify-content-between">
                                        <span>{{$product->prix_promo}} frcfa</span>
                                        <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Les secrets des produits Longrich --}}
    {{-- <section class="banner section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Les secrets de Longrich</h2>
                    </div>
                    <div class="button section-title">
                        <a {{route('product.secret')}} type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ajouter un produit
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">

                    <div class="single-blog">
                        <div class="card-header">
                            <img src="{{ asset('assets/images/sante/secret_femme.jpg') }}" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4>
                                <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="{{route('product.secret')}}" class="btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">

                    <div class=" single-blog">
                        <div class="card-header">
                            <img src="{{ asset('assets/images/sante/femme_t.jpg') }}" alt="#">
                        </div>
                        <div class="blog-content">
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">

                    <div class="single-blog">
                        <div class="card-header">
                            <img src="{{ asset('assets/images/sante/alcalin.jpg') }}" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4>
                                <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Les offres spéciale --}}
    <section class="special-offer section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Offre spéciale electronique</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->types->nomTypeArticle == "Accessoirs")
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset('storage/'. $product->image_1)}}" alt="#" width="99%">
                                            <div class="button">
                                                <a href="{{route('produit_sante.show', $product->id)}}" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">{{$product->types->nomTypeArticle}}</span>
                                            <h4 class="title">
                                                <a href="{{route('produit_sante.show', $product->id)}}">{{$product->nom_produit}}</a>
                                            </h4>
                                            <div class="price d-flex justify-content-between">
                                                <span>{{$product->prix_promo}} frcfa</span>
                                                <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                        @foreach ($products as $product)
                            @if ($product->types->nomTypeArticle == "Ordinateurs")
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset('storage/'. $product->image_1)}}" alt="#" width="100%">
                                            <div class="button">
                                                <a href="{{route('produit_sante.show', $product->id)}}" class="btn"><i class="lni lni-cart"></i>Ajoutez panier</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">{{$product->types->nomTypeArticle}}</span>
                                            <h4 class="title">
                                                <a href="{{route('produit_sante.show', $product->id)}}">{{$product->nom_produit}}</a>
                                            </h4>
                                            <div class="price d-flex justify-content-between">
                                                <span>{{$product->prix_promo}} frcfa</span>
                                                <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="single-banner right" style="background-image:url('{{ asset('assets/images/ordis/banner-3-bg.jpg')}}');margin-top: 30px;">
                        <div class="content">
                            <h2>Tous les marques d'ordinateur sont disponible</h2>
                            <h6 class="text-danger">Ici, vous aurez les ordinateurs à des prix que vous n'aurez pas ailleur sur le marché.</h6>
                            <div class="price">
                                <span>450.000 frcfa</span>
                            </div>
                            <div class="button">
                                <a href="{{route('produit_ordis')}}" class="btn">VOIR PLUS</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="offer-content">
                        <div class="image">
                            <img src="{{ asset('assets/images/ordis/ordis-1.jpg')}}" alt="#">
                            <span class="sale-tag">-10%</span>
                        </div>
                        <div class="text">
                            <h2><a href="{{route('produit_ordis')}}">HP ProBoock 450 G7 CORE i5 10ème génération</a></h2>
                            
                            <div class="price">
                                <span>455.600 frcfa</span>
                                <span class="text-danger"><s>500.600 frcfa</s></span>
                            </div>
                            <p>
                                Avec nous vous aurez les ordinateurs neuf et quasiment-neuf de votre choix, à un prix trés réduite.
                            </p>
                        </div>
                        {{-- <div class="box-head">
                            <div class="box">
                                <h1 id="days">000</h1>
                                <h2 id="daystxt">Days</h2>
                            </div>
                            <div class="box">
                                <h1 id="hours">00</h1>
                                <h2 id="hourstxt">Hours</h2>
                            </div>
                            <div class="box">
                                <h1 id="minutes">00</h1>
                                <h2 id="minutestxt">Minutes</h2>
                            </div>
                            <div class="box">
                                <h1 id="seconds">00</h1>
                                <h2 id="secondstxt">Secondes</h2>
                            </div>
                        </div> --}}
                        <div style="background: rgb(204, 24, 24);" class="alert">
                            <h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Formulaire secret --}}
    {{-- <div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Création</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent='SecretInscription()'>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review-titre">Titre</label>
                                    <input wire:model='secret.titre' class="form-control" type="text" id="review-titre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review-stitre">Sous-titre</label>
                                    <input wire:model="secret.s-titre" class="form-control" type="text" id="review-stitre">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="review-img">Image</label>
                                    <input wire:model="secret.image" class="form-control fs-6" type="file" id="review-img">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="review-message">Description</label>
                            <textarea wire:mode='secret.description' class="form-control" id="review-message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="review-message">Mode utilisation</label>
                            <textarea wire:model='secret.m-utilisation' class="form-control" id="review-message" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer button">
                        <button type="button" class="btn">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <script>

        const date = document.querySelector('box-head').style.display = 'none';
        //date = new Date()
        
        console.log(date);

    </script>
</div>