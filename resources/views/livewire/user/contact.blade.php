<section id="contact-us" class="contact-us section pt-4">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h1>Contactez-nous</h1>
                        <p class="fs-5">Pour toutes vos préocupations et vos demandes nous vous prions de nous contacter à partir de ses coordonnées ou ce formulaire.</p>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="single-info-head">


                            <div class="single-info">
                                <i class="lni lni-phone"></i>
                                <h3>Appel téléphonique</h3>
                                <ul>
                                    <li><a href="tel:+2250748548680">+225 07 48 548 680</a></li>
                                    <li><a href="tel:+2250757603375">+225 07 57 603 375</a></li>
                                </ul>
                            </div>


                            <div class="single-info">
                                <i class="lni lni-envelope"></i>
                                <h3>E-mail</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"><span >jacqueskonan418@gmail.com</span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class='bg-light col-12'>
                            @if ($message = Session::get('message'))
                                <div class="p-4 mb-3 alert alert-success rounded">
                                    <p class="text-green-800 fs-5">{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="contact-form-head">
                            <div class="form-main">
                                <form class="form" role="form" wire:submit.prevent="createContact()">
                                    @if (auth()->user())
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input wire:model="addContact.nom" value="{{auth()->user()->nom}}" type="text" class="form-control @error('addContact.nom') is-invalid @enderror">
                                                    @error('addContact.nom')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input wire:model="addContact.numero" type="text" value="{{auth()->user()->nmeroTel}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group message">
                                                    <textarea wire:model="addContact.message" placeholder="Votre messages..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn ">Envoyer le message</button>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input wire:model="addContact.nom" type="text" placeholder="Votre nom" class="form-control @error('addContact.nom') is-invalid @enderror">
                                                    @error('addContact.nom')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input wire:model="addContact.numero" type="text" placeholder="Votre numéro téléphone" class="form-control @error('addContact.numero') is-invalid @enderror">
                                                    @error('addContact.numero')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group message">
                                                    <textarea wire:model="addContact.message" placeholder="Votre messages..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn ">Envoyer le message</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
