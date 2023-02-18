@extends('layouts.user.master')
@section('view_produit')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Les details du produit <u class="text-danger">
                        @if ($products->nomTypeArticle == 5 || $products->nomTypeArticle == 6)
                            {{$products->model_produit}}
                        @else
                            {{$products->nom_produit}}
                        @endif
                    </u></h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('accueil')}}"><i class="lni lni-home"></i>Accueil</a></li>
                    <li>Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="item-details section">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                <img src="{{asset('storage/'.$products->image_1)}}" id="current" alt="image de {{$products->nom_produit}}" width="" height="400px">
                            </div>
                            <div class="images">
                                <img src="{{asset('storage/'.$products->image_1)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_2)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_3)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_4)}}" class="img" alt="image de {{$products->nom_produit}}">
                                <img src="{{asset('storage/'.$products->image_1)}}" class="img" alt="#">
                            </div>
                        </main>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    
                    <div class="product-info">
                        <h2 class="title">
                            Aller pour la promo du {{$products->nom_produit}}
                        </h2>
                        <p class="category"><i class="lni lni-tag"></i>
                            {{$products->nom_produit}} :
                        <a href="javascript:void(0)" class="text-primary">
                            {{$products->types->nomTypeArticle}}
                        </a>
                        </p>
                        <h3 class="price">{{$products->prix_promo}} Frcfa<span class="text-danger">{{$products->prix_reel}} Frcfa</span></h3>
                        <p class="info-text">
                            Ce produit, {{$products->nom_produit}} fait des merveilles concernant sa capacité de résoudre tous problémes maladifs dans lequel il intervient.
                        </p>
                        <form method="POST" action="{{route('cart_add', ['id'=>$products->id])}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">Quantité</label>
                                        <input type="number" name="quantity" value='1' class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-5">
                                    <div class="button cart-button">
                                        <button type="submit" class="btn" style="width: 100%;">Ajouter panier</button>
                                    </div>
                                </div>
                                <p class="col-lg-4 col-md-4 col-12"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-info">
            <div class="single-block">
                <div class="row">
                    @if ($products->types->nomTypeArticle == "Accessoirs" || $products->types->nomTypeArticle == "Ordinateurs")
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Caracteristique</h4>
                                <p>
                                    {{$products->caracteristique}}
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="col-md-8 col-lg-8 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Description</h4>
                                <p>
                                    {{$products->description_produit}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-12">
                            <div class="info-body">
                                <h4>Mode d'utilisation</h4>
                                <p class="normal-list">
                                    {{$products->mode_utilisation}}
                                </p>
                            </div>
                        </div>
                    @endif
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single-block">
                        <div class="reviews">
                            <h3 class="title text-uppercase">D'autres produits disponible</h3>

                            <div class="row">
                                @foreach ($all_product as $product)
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
                                                <h4 class="title fs-6">
                                                    <a href="{{route('produit_sante.show', $product->id)}}">{{$product->nom_produit}}</a>
                                                </h4>
                                                <div class="d-flex justify-content-between" style="font-size: 15px !important">
                                                    <span>{{$product->prix_promo}} frcfa</span>
                                                    <span class="text-danger"><s>{{$product->prix_reel}}frcfa</s></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    const current = document.getElementById("current");
    const opacity = 0.6;
    const imgs = document.querySelectorAll(".img");
    imgs.forEach(img => {
        img.addEventListener("click", (e) => {
            //reset opacity
            imgs.forEach(img => {
                img.style.opacity = 1;
            });
            current.src = e.target.src;
            //adding class 
            //current.classList.add("fade-in");
            //opacity
            e.target.style.opacity = opacity;
        });
    });
</script>
@endsection