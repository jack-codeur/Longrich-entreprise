<div class="container mt-4">
    <div class="text-center">
        <h3>Details de la commande</h3>
        <strong>Passer votre commande en choisissant la date à laquelle vous souhaitez avoir votre coli.</strong><br/>
        <strong class="text-danger">La fidélité et la confiance est au coeur de Young OF Longrich!</strong>
        <div class='bg-light col-12'>
            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 alert alert-success rounded">
                    <p class="text-green-800 fs-5">{{ $message }}</p>
                </div>
            @endif
        </div>
    </div>
    @php
        $content = Cart::getContent();
        $contentAll = $content->sum(function($content){
            return $content->quantity * $content->price;
        });
    @endphp
    <div class="app-card app-card-settings shadow-sm py-4">
        <form role="form" wire:submit.prevent='Commande()'>
            @csrf
            <div class="row card-body">
                <div class="col-md-4 col-lg-4 col-12">
                    <div class="form-group mb-4">
                        <label>VOTRE NOM</label>
                        <input type="text" wire:model="cmmande.username" class="form-control @error('cmmande.username') is-invalid @enderror"/>
                        @error('cmmande.username')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label>NUMERO TELEPHONE</label>
                        <input type="text" wire:model="cmmande.nmeroTel" class="form-control @error('cmmande.nmeroTel') is-invalid @enderror"/>
                        @error('cmmande.nmeroTel')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                                            
                    <div class="form-group mb-4">
                        <label for="country">PAYS</label>
                        <select wire:model="cmmande.country" id="country" class="form-control @error('cmmande.country') is-invalid @enderror">
                            <option value="">Selectionner votre pays</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        @error('cmmande.country')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for='state'>Ville</label>
                        <input wire:model="cmmande.state" id='state' class="form-control @error('cmmande.state') is-invalid @enderror"/>
                        @error('cmmande.state')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label>DATE DE LA LIVRAISON</label>
                        <input type="date" wire:model="cmmande.date_livraison" class="form-control @error('cmmande.date_livraison') is-invalid @enderror"/>
                        @error('cmmande.date_livraison')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-12 table-responsive">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead style="background-color: #606162;">
                                <tr class="fs-5 text-bold text-light">
                                    <td>image(s)</td>
                                    <td>Nom du produit</td>
                                    <td>Quantité</td>
                                    <td>Prix</td>
                                    <td class="text-center">Prix total</td>
                                </tr>
                            </thead>
                            <div class='bg-light col-12'>
                                @if ($errorMessage = Session::get('message'))
                                    <div class="p-4 mb-3 alert alert-danger rounded">
                                        <p class="text-green-800 fs-5">{{ $errorMessage }}</p>
                                    </div>
                                @endif
                            </div>
                            <tbody>
                                
                                @foreach ($cmmd_details as $cmmd_detail)
                                    <tr class="fs-6">
                                        <td>
                                            <img src="{{asset('storage/'. $cmmd_detail->attributes->image_1)}}" width="100px" height="100px"/>
                                        </td>
                                        <td>
                                            {{$cmmd_detail->name}}
                                        </td>
                                        <td>
                                            {{$cmmd_detail->quantity}}
                                        </td>
                                        <td>
                                            {{$cmmd_detail->price}}
                                            frcfa
                                        </td>
                                @endforeach
                                    </tr>
                                    <tr class="text-bold fs-5" style="font-weight: bold">
                                        <td colspan="4">Prix Total</td>
                                        <td class="text-center text-danger">
                                            {{$contentAll}} frcfa
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-between flex-wrap mx-3">
                <div class="">
                    <button class="btn btn-danger text-uppercase" type="submit" title="Passer votre commande" >Je passe ma commande</button>
                </div>
                <div class="mx-col-sm-0 mx-col-md-4">
                    <a href="{{route('boutique')}}" class="btn btn-warning text-uppercase" title="Je continue mes achats" >Continuer mes achats</a>
                </div>
            </div>
        </form>
    </div>
</div>
