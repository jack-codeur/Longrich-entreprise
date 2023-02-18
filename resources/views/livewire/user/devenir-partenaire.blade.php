<div id="lord-page">
@if ($businessPresent)
    @include('livewire.user.presentation')
@else
    <div>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Avantages partenariat à Longrich</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="{{ route('accueil')}}"><i class="lni lni-home"></i>Accueil</a></li>
                            <li>Partenaire Longrich</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="section blog-section blog-list ">
            <div class="container-fluid">
                <div class="row">
                    {{-- <p class="col-lg-1 col-md-1"></p> --}}
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-12">

                                <div class="single-blog">
                                    <div class="blog-content">
                                        <h4 class="text-danger text-uppercase">
                                            Pouquoi être partenaire à Longrich ?
                                        </h4>
                                        <p class="fs-5 text-dark">Etre partenaire à Longrich donne droit à plusieurs avantages :</p>
                                        <div>
                                            <p class="fs-5 text-dark"><b>1</b>/ Partenarial gagnant gagnant avec la multinationale Longrich.</P>
                                            <p class="fs-5 text-dark"><b>2</b>/ Création de votre propre entreprise.</p>
                                            <p class="fs-5 text-dark"><b>3</b>/ Pas de pression ni d'obligation, vous avancez à votre ryhtme.</p>
                                            <p class="fs-5 text-dark"><b>4</b>/ Les point (PV) sont accumulés, aucune perte de point, peu importe votre niveau de travail.</p>
                                            <p class="fs-5 text-dark"><b>5</b>/ Réalisation d'une épagne sûre pour la famille, héritage assuré.</p>
                                            <p class="fs-5 text-dark"><b>6</b>/ Six bonus hebdomadaires et mensuels en espèce (payé selon votre monney).</p>
                                            <p class="fs-5 text-dark"><b>7</b>/ Quarte bonus de récompenses en nature.</p>
                                        </div>
                                    </div>

                                    <div class="blog-content">
                                        <p class="fs-5 text-danger">Et lorsque vous être partenaire vous obtenez une réduction sur les prix des produits, soit <strong>20%</strong> de réduction sur chaque produit. Dont vous obtenez les produits à un prix partenariat.</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="single-blog">
                                    <div class="blog-content">
                                        <h5 class="text-danger text-uppercase">
                                            à Longrich vous gérez votre propre entreprise
                                        </h5>
                                        <p class="fs-6 text-dark">
                                            Lorsque vous devenez partenaire à Longrich, vous etes immediatement reconnu par l'entreprise comme un chef d'entreprise au sein de l'entreprise Longrich elle même.
                                            Donc par notre encadrement vous dévelopez votre entreprise selon votre rythme de travail.
                                        </p>
                                        <div class="button d-flex align-items-center flex-wrap">
                                            <div class="flex-grow-1 pb-1">
                                                <a href="{{ route('contact') }}" class="btn text-uppercase">Contactez nous pour plus de details</a>
                                            </div>
                                        </div>
                                        <div class="button mt-3">
                                            <a wire:click="Presentation" class="btn text-uppercase">30 minutes pour suivre la présentation</a>
                                        </div>
                                        <div class="btn-tmg col-12 text-center pt-3">
                                            <a href="{{route('temoignage')}}" class="btn-temoignage">Témoignages des partenaires</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-blog">
                                        <div class="blog-content">
                                            <h4 class="text-danger text-uppercase">
                                                Comment gagner de l'argent à longrich?.
                                            </h4>
                                            <p class="fs-5 text-dark mb-3">
                                                La partie la plus importante, je vous invite à suvre avec attention.
                                            </p>
                                            <video poster="{{asset('assets/images/hero/maxresdefault.jpg')}}" width="100%" height="auto" controls>
                                                <source src="{{ asset('assets/videos/comment-se-faire-de-argent-chez-longrich.mp4')}}" type="video/mp4">
                                                Votre navigateur ne supporte pas la balise vidéo.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">

                                <div class="single-blog">
                                    <div class="blog-content mb-5">
                                        <h4 class="text-danger text-uppercase">
                                            Comment devenir partenaire Longrich ?
                                        </h4>
                                        <p class="fs-5 text-dark">
                                            Très important à savoir! Devenir partenaire à Longrich est très simple, il suffit de faire un achat dans l'un des niveaux d'ahdésion de l'entreprise : <b>Silver, Gold, Platinum et Platinum VIP</b>
                                        </p>
                                        <div class="row mt-5">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="card single-blog">
                                                    <div class="card-header">
                                                        <h4>Silver (Pré-diamant avec 120PV)</h4>
                                                    </div>
                                                    <div class="blog-content">
                                                        <P class="category_p">KIT DE 160.000 ou 220.000 frcfa</p>
                                                        <h5 class="mt-4">
                                                            <b class="text-danger">LES AVANTAGES DU KIT DE DEMARAGE</b>
                                                        </h5>
                                                        <p class="text-dark fs-5">
                                                            <span>Valeur des produits : <b>160.000 ou 220.000 FCFA</b></span>
                                                            <span>Bonus de performance hebdomadaire avec <b>8%</b></span>
                                                            <span>Montant max du bonus de performance: <b>900.000 FCFA</b></span>
                                                            <span>Bonus de parrainage : <b>30.000 FCFA</b> par inscrit</span>
                                                        </p>
                                                        <div class="button">
                                                            <a href="{{route('inscription.partenaire')}}" class="btn">JE M'INSCRIS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">

                                                <div class="card single-blog">
                                                    <div class="card-header">
                                                        <h4>Gold (Pré-diamant avec 240PV)</h4>
                                                    </div>
                                                    <div class="blog-content">
                                                        <P class="category_p">Kit de 300.000 ou 360.000 frcfa</p>
                                                        <h5 class="mt-4">
                                                            <b class="text-danger">lES AVANTAGES DU KIT DE DEMARAGE</b>
                                                        </h5>
                                                        <p class="text-dark fs-5">
                                                            <span>Valeur des produits : <b>300.000 ou 360.000 FCFA</b></span>
                                                            <span>Bonus de performance hebdomadaire avec <b>10%</b></span>
                                                            <span>Montant max du bonus de performance: <b>900.000 FCFA</b></span>
                                                            <span>Bonus de parrainage : <b>30.000 FCFA</b> par inscrit</span>
                                                        </p>
                                                        <div class="button">
                                                            <a href="{{route('inscription.partenaire')}}" class="btn">JE M'INSCRIS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">

                                                <div class="card single-blog">
                                                    <div class="card-header">
                                                        <h4>Platinum (Diamant 1 avec 720PV)</h4>
                                                    </div>
                                                    <div class="blog-content">
                                                        <P class="category_p">Kit de 780.000 ou 840 000 frcfa</p>
                                                        <h5 class="mt-4">
                                                            <b class="text-danger">LES AVANTAGES DU KIT DE DEMARAGE</b>
                                                        </h5>
                                                        <p class="text-dark fs-5">
                                                            <span>Valeur des produits : <b>780.000 ou 840.000 FCFA</b></span>
                                                            <span>Bonus de performance hebdomadaire avec <b>12%</b></span>
                                                            <span>Montant max du bonus de performance: <b>900.000 FCFA</b></span>
                                                            <span>Bonus de parrainage : <b>30.000 FCFA</b> par inscrit</span>
                                                        </p>
                                                        <div class="button">
                                                            <a href="{{route('inscription.partenaire')}}" class="btn">JE M'INSCRIS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">

                                                <div class="card single-blog">
                                                    <div class="card-header">
                                                        <h4>Platinum VIP (Diamant 2 avec 1680PV)</h4>
                                                    </div>
                                                    <div class="blog-content">
                                                        <P class="category_p">Kit de 1.800.000 ou 1.860 000 frcfa</p>
                                                        <h5 class="mt-4">
                                                            <b class="text-danger">LES AVANTAGES DU KIT DE DEMARAGE</b>
                                                        </h5>
                                                        <p class="text-dark fs-5">
                                                            <span>Valeur des produits : <b>1.800.000 ou 1.860.000 FCFA</b></span>
                                                            <span>Bonus de performance hebdomadaire avec <b>12%</b></span>
                                                            <span>Montant max du bonus de performance: <b>900.000 FCFA</b></span>
                                                            <span>Bonus de parrainage : <b>30.000 FCFA</b> par inscrit</span>
                                                        </p>
                                                        <div class="button">
                                                            <a href="{{route('inscription.partenaire')}}" class="btn">JE M'INSCRIS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div>
                                        <div class="row">
                                            <h4 class="text-uppercase text-center mb-4">
                                                <p class="fs-5 text-danger">Pas de panique!! Tous le monde sans exeption peut faire Longrich!</p>
                                            </h4>
                                            <div class="col-lg-6 col-md-6 col-12">

                                                <div class="card single-blog">
                                                    <div class="row justify-center">
                                                        <div class="card-header">
                                                            <h4>Silver (Pré-diamant avec 80PV)</h4>
                                                        </div>
                                                        <span class="sale-tag bg-danger fixed text-light text-center fs-4">Promo exceptionnelle</span>
                                                    </div>
                                                    <div class="blog-content">
                                                        <P class="category_p">Kit de 85 000 frcfa</p>
                                                        <h5 class="mt-4">
                                                            <b class="text-danger">LES AVANTAGES DU KIT DE DEMARAGE</b>
                                                        </h5>
                                                        <p class="text-dark fs-5">
                                                            <span>Valeur des produits : <b>85.000 FCFA</b></span>
                                                            <span>Bonus de performance hebdomadaire avec <b>8%</b></span>
                                                            <span>Montant max du bonus de performance: <b>900.000 FCFA</b></span>
                                                            <span>Bonus de parrainage : <b>20.000 FCFA</b> par inscrit</span>
                                                        </p>
                                                        <div class="button">
                                                            <a href="{{route('inscription.partenaire')}}" class="btn">JE M'INSCRIS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <p class="col-lg-1 col-md-1"></p> --}}
                </div>
            </div>
        </section>
    </div>
@endif
</div>