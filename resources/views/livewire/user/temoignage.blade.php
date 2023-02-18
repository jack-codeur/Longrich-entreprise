<div>
    @if ($businessPresent)
        @include('livewire.user.presentation')
    @else
    <section class="section blog-section blog-list ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="single-blog">
                                <div class="blog-content mb-5">
                                    <h4 class="text-danger border text-uppercase text-center">
                                        Témoignages des partenaires à Longrich ?
                                    </h4>
                                    <p class="fs-5 text-dark">
                                        Ces témognages que nous vous présentons ne sont pas pour vous intimider, mais juste pour vous montrer la fiabilité, la faisabilité et la rentabilité du business avec l'entreprise Longrich. <br/>
                                        Rejoignez-nous pour que nous vous aiderons pour développer votre business avec cette entreprise. 
                                    </p>
                                    <div class="row mt-5">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="card single-blog text-center">
                                                <div class="card-header">
                                                    <h4>Témoignage du Leader RAOUL</h4>
                                                </div>
                                                <div class="blog-content">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('assets/videos/Temoignage_1_ricardo.mp4')}}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la balise vidéo.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">

                                            <div class="card single-blog text-center">
                                                <div class="card-header">
                                                    <h4>Témoignage du Leader Adwige</h4>
                                                </div>
                                                <div class="blog-content">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('assets/videos/Temoignage_2_leader_edwige.mp4')}}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la balise vidéo.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">

                                            <div class="card single-blog text-center">
                                                <div class="card-header">
                                                    <h4>Témoignage du Leader Koné</h4>
                                                </div>
                                                <div class="blog-content">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('assets/videos/Temoignage_produit.mp4')}}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la balise vidéo.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">

                                            <div class="card single-blog text-center">
                                                <div class="card-header">
                                                    <h4>Exhortation du Leader Julien</h4>
                                                </div>
                                                <div class="blog-content">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('assets/videos/Temoignage_julien.mp4')}}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la balise vidéo.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">

                                            <div class="card single-blog">
                                                <div class="card-header text-center">
                                                    <h4>Témoignage du Leader Kossonou</h4>
                                                </div>
                                                <div class="blog-content">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('assets/videos/Temoignage_5_kossonou.mp4')}}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la balise vidéo.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">

                                            <div class="card single-blog">
                                                <div class="card-header text-center">
                                                    <h4>Témoignage de l'entrepreneur</h4>
                                                </div>
                                                <div class="blog-content">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('assets/videos/Temoignage__.mp4')}}" type="video/mp4">
                                                        Votre navigateur ne supporte pas la balise vidéo.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    <div>
                                    <div>
                                        <div class="row">
                                            <p class="text-center" style="color: black; font-size: 20px; padding: 20px"><strong>Rejoignez-nous et nous serons à votre aide pour construire votre business en toute confiance.</strong></p>
                                            <div class="d-flex justify-content-center justify-content-md-around flex-wrap">
                                                <div class="button pt-3">
                                                    <a href="{{route('contact')}}" class="btn">Contactez-nous pour plus d'information</a>
                                                </div>
                                                <div class="button text-center pb-1">
                                                    <button wire:click.prevent='Presentation()'  class="btn">Présentation de Longrich</button>
                                                </div>
                                                <div class="button pt-3">
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
                <div class="container">
                    <div class="row">
                        <h3 class="text-danger text-bold m-4">GALERIE</h3>
                        <h5 class="m-4">Les images que vous verez dans cette galérie sont des images de quelques cérémonies récompense faites en Côte d'Ivoire. Il y en a pour d'autres pays à travers le monde. </h5>
                        <div class="d-flex justify-content-around flex-wrap">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive43.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive45.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive46.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive47.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive48.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive49.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive50.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive51.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive52.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive53.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive54.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive55.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive56.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive57.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive58.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive59.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive60.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive61.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive62.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive63.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive64.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive65.JPG')}}" alt="#" width="40%">
                            <img class="mb-3" src="{{ asset('assets/images/temoignages/Diapositive66.JPG')}}" alt="#" width="40%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
