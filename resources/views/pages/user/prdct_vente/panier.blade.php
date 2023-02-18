@extends("layouts.user.master")
@section("panier")
<div class="container my-5">
    <div class='bg-light col-4'>
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 alert alert-success rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('message'))
            <div class="p-4 mb-3 alert alert-success rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
    </div>

	<h3>Mon panier</h3>
	<div class="table-responsive shadow my-3">
		<table class="table table-bordered table-hover bg-white mb-0">
			<thead class="thead-dark" >
				<tr>
					<th>#</th>
					<th>Produit</th>
					<th>Prix</th>
					<th>Quantité</th>
					<th>Total</th>
					<th>Opérations</th>
				</tr>
			</thead>
			<tbody>
                @forelse ($products as $product)
                    
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td><img src="{{asset('storage/'. $product->attributes->image)}}" width="60px" height="60px"/></td>
                        <td>
                            <strong><a href="" title="Afficher le produit" >{{$product->name}}</a></strong>
                        </td>
                        <td class="text-center fw-bolder">{{$product->price}} frcfa</td>
                        <td>
                            <!-- Le formulaire de mise à jour de la quantité -->
                            <form action="{{route('cart_update', $product->id)}}" method="POST" class="form-inline d-inline-block d-flex flex-wrap" >
                            {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$product->id}}" />
                                <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control mr-4" style="width: 100px" >
                                <button type="submit" class="btn btn-primary ml-3" >Actualiser</button>
                            </form>
                        </td>
                        <!--Le prix total de chaque en fonction de sa quantité-->
                        @php
                            $sommePrixParQuantite = Cart::get($product->id)->getPriceSum();
                        @endphp
                        <td class="text-center text-danger fw-bolder">{{$sommePrixParQuantite}} frcfa</td>
                        
                        <td class="d-flex flex-wrap">
                            <form action="{{route('cart_remove', $product->id)}}" method="POST" class="mb-4">
                             @csrf
                                <!-- Le Lien pour retirer un produit du panier -->
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <button class="btn btn-outline-danger" title="Retirer le produit du panier" >Retirer</button>
                            </form>
                        </td>
                    </tr>
                    
                @empty
                    {{-- @else --}}
                    <div class="alert alert-info">Aucun produit au panier</div>
                    {{-- @endif --}}
                @endforelse ()
				
                <tr colspan="2" >
                    <td colspan="4" class="fs-5 fw-bold">Prix Total</td>
                    <td colspan="2" class="text-end fs-6">
                        <!-- On affiche total général -->
                        @php
                            $sommeTotalPrixProduit = Cart::getSubTotal();
                        @endphp

                        <strong class="" style="color:red">{{$sommeTotalPrixProduit}} frcfa</strong>
                    </td>
                </tr>
			</tbody>

		</table>
	</div>
    <div class="d-flex justify-content-between flex-wrap">
        <!-- Lien pour vider le panier -->
        <form action="{{route('cart_clear')}}" method="POST" class="flex-wrap">
            @csrf
            <!-- Le Lien pour retirer un produit du panier -->
            <button class="btn btn-danger text-uppercase" title="Retirer tous les produits du panier" >Vider le panier</button>
            <a href="{{route('boutique')}}" class="btn btn-warning text-uppercase" title="Basculer vers la boutique" >Continuer mes achats</a>
        </form>
        <div class="mx-col-sm-0 mx-col-md-4">
            <a href="{{route('commande.index')}}" class="btn btn-success fs-6 text-uppercase" title="Voir les details de la commande" >Details de la commande</a>
        </div>
    </div>
	

</div>
@endsection