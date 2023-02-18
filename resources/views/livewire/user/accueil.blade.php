<div>

    @if ($businessPresent)
        @include('livewire.user.presentation')
    @else

    <div class="m-5 text-center">
        <div class="">
            <img src="{{asset('assets/images/hero/designlongrich_2.png')}}" alt="#">
        </div>
    </div>
    
    <section class="team section p-0">
        <div class="container">
            <div class="row">

                <div class="single-blog row">
                    <div class="blog-content">
                        <p style="color: black; font-size: 18px; background-color: rgba(0, 255, 204, 0.88)">
                            <strong>Longrich</strong> est le centre le plus important et le plus avancé pour la recherche, le
                            développement, la fabrication et la vente de produits cosmétiques et de soins de santé en Chine, avec des
                            produits répartis dans plus de 100 pays du monde. Elle est classée dans Forbes comme la meilleure
                            entreprise de la Chine..
                        </p>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="maladies" class="blog-section section pb-2 pt-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Que traite au juste les produits de Longrich ?</h2>
                    </div>
                </div>
                <div class="button text-center pb-1">
                    <a type="button" wire:click.prevent='Presentation()'  class="button_animate">Présentation de Longrich</a>
                </div>
            </div>
            <div class="row">
                <div class="mt-5">
                    <p class="text-center" style="font-size: 18px; font-weight: bold; color: red;">VOICI LA LISTE DES MALADIES QUE TRAITE LES PRODUITS LONGRICH</p>
                    <p class="text-center">Quelques maladies seulement citées ici, il y en a plus qui n'ont pas été mentionné!</p>
                </div>
            </div>

            <div class="row pt-5">

                <div class="row" style="color: black; font-size: 18px; background-color: rgba(0, 255, 204, 0.88); padding: 10px;">
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="title">1. POUR GUERIR CATARACTE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Nutrivrich Rose riche en nutriments</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="title">2. POUR GUERIR CANCER DU COL DE L'UTÉRUS :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <li>• Superbklean serviette hygiénique</li>
                                <li>• Protège slip</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Vitamine C</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="title">2. POUR GUERIR MALADIE CARDIO-VASCULAIRE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Vitamine C </li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="title">4. POUR GUERIR DIABÉTE DU TYPE 1 :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Nutrivrich Rose</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="title">5. POUR GUERIR DIABÉTE DU TYPE 2 :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <li>• Thé Minceur</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Berry oil</li>
                                <li>• Thé Marron</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span class="title">6. POUR GUERIR FIBROME :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Rose</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Protège-slips</li>
                                <li>• Serviette hygiénique</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <span class="title">7. POUR GUERIR INFECTION DE L'OREILLE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <span class="title">8. POUR GUERIR GLAUCOME :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich bleu</li>
                                <li>• Protège-slips</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <span class="title">9. POUR GUERIR GONOCOCIE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseNine" class="accordion-collapse collapse show" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Protège-slips</li>
                                <li>• Serviette hygiénique</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <span class="title">10. POUR GUERIR HYPERTENSION :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Rose</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Berry oilet</li>
                                <li>• Calcium</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingEleveen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleveen" aria-expanded="false" aria-controls="collapseEleveen">
                                    <span class="title">11. POUR GUERIR LEUCÉMIE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseEleveen" class="accordion-collapse collapse show" aria-labelledby="headingEleveen" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Libao</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <span class="title">12. POUR GUERIR IMPUISSANCE SEXUELLE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwelve" class="accordion-collapse collapse show" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <li>• Libao</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreeteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeteen" aria-expanded="false" aria-controls="collapseThreeteen">
                                    <span class="title">13. POUR GUERIR FAIBLE TAUX DE SUCRE DANS LE SANG :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreeteen" class="accordion-collapse collapse show" aria-labelledby="headingThreeteen" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Artho SupReviver</li>
                                <li>• Bone-M</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFourteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    <span class="title">14. POUR GUERIR MALADIE DE REINS :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFourteen" class="accordion-collapse collapse show" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFifteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                    <span class="title">15. POUR GUERIR PROBLÈME DE MÉNOPAUSE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFifteen" class="accordion-collapse collapse show" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingSixteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                    <span class="title">16. POUR GUERIR HÉPATITE (FOIE) :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseSixteen" class="accordion-collapse collapse show" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Cordyceps militaris</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingSeventeen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                    <span class="title">17. POUR GUERIR FAIBLE TAUX D'IMMUNITÉ :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseSeventeen" class="accordion-collapse collapse show" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingEighteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                    <span class="title">18. POUR GUERIR ULCÈRE DE LA BOUCHE / SAIGNEMENT :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseEighteen" class="accordion-collapse collapse show" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Pâte dentifrice</li>
                                <li>• Calcium</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingNineteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                    <span class="title">19. POUR GUERIR PALUDISME :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseNineteen" class="accordion-collapse collapse show" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                                <li>• Nutrivrich Rose</li>
                                <li>• Thé vert</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwenty">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                    <span class="title">20. POUR GUERIR MIGRAINE, MAUX DE TÊTE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwenty" class="accordion-collapse collapse show" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                                    <span class="title">21. POUR GUERIR TUMEUR OVARIENNE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyOne" class="accordion-collapse collapse show" aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
                                <li>• Protège-slip</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Nutrivrich bleu</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                    <span class="title">22. POUR GUERIR PERSONNE SOUFFRANT HEMACIE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
                                <li>• Arthro SupReviver</li>
                                <li>• Nutrivrich Rose</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Gobelet alcalin</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                                    <span class="title">23. POUR GUERIR DOULEUR ARTICULAIRE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyThree" class="accordion-collapse collapse show" aria-labelledby="headingTwentyThree" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Thé vert</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Arthro SupReviver.</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">
                                    <span class="title">24. POUR GUERIR SYPHILIS :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyFour" class="accordion-collapse collapse show" aria-labelledby="headingTwentyFour" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Nutrivrich bleu</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFive" aria-expanded="false" aria-controls="collapseTwentyFive">
                                    <span class="title">25. POUR GUERIR CANCER DE LA PROSTATE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyFive" class="accordion-collapse collapse show" aria-labelledby="headingTwentyFive" data-bs-parent="#accordionExample">
                                <li>• Thé marron</li>
                                <li>• Nutrivrich Bleu</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Protège-slips</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentySix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentySix" aria-expanded="false" aria-controls="collapseTwentySix">
                                    <span class="title">26. POUR GUERIR ULCÈRE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentySix" class="accordion-collapse collapse show" aria-labelledby="headingTwentySix" data-bs-parent="#accordionExample">
                                <li>• Thé marron</li>
                                <li>• Berry oil</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Nutrivrich Bleu.</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentySeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentySeven" aria-expanded="false" aria-controls="collapseTwentySeven">
                                    <span class="title">27. POUR GUERIR INFECTIONS VAGINALES AVEC PERTE BLANCHE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentySeven" class="accordion-collapse collapse show" aria-labelledby="headingTwentySeven" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Protège-slips</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyEigth">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyEigth" aria-expanded="false" aria-controls="collapseTwentyEigth">
                                    <span class="title">28. POUR GUERIR PEAU MALSAINE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyEigth" class="accordion-collapse collapse show" aria-labelledby="headingTwentyEigth" data-bs-parent="#accordionExample">
                                <li>• Lait corporel</li>
                                <li>• Savon pour bébé</li>
                                <li>• Gel de douche</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingTwentyNine">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyNine" aria-expanded="false" aria-controls="collapseTwentyNine">
                                    <span class="title">29. POUR GUERIR STAPHYLOCOQUE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseTwentyNine" class="accordion-collapse collapse show" aria-labelledby="headingTwentyNine" data-bs-parent="#accordionExample">
                                <li>• Thé marron</li>
                                <li>• Protège-slips</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Nutrivrich Rose.</li>
                                <li>• Cordyceps militaris</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreety">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreety" aria-expanded="false" aria-controls="collapseThreety">
                                    <span class="title">30. POUR GUERIR MAUX DE DENTS :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreety" class="accordion-collapse collapse show" aria-labelledby="headingThreety" data-bs-parent="#accordionExample">
                                <li>• Calcium</li>
                                <li>• Pate Dentifrice</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyOne" aria-expanded="false" aria-controls="collapseThreetyOne">
                                    <span class="title">31. POUR GUERIR RHUMATISMES :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyOne" class="accordion-collapse collapse show" aria-labelledby="headingThreetyOne" data-bs-parent="#accordionExample">
                                <li>• Protege slips</li>
                                <li>• Calcium</li>
                                <li>• Arthro SupReviver</li>
                                <li>• Nutrivrich Bleu.</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyTwo" aria-expanded="false" aria-controls="collapseThreetyTwo">
                                    <span class="title">32. POUR GUERIR INFECTION DES VOIES URINAIRES :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyTwo" class="accordion-collapse collapse show" aria-labelledby="headingThreetyTwo" data-bs-parent="#accordionExample">
                                <li>• Thé marron</li>
                                <li>• Berry oil</li>
                                <li>• Nutrivrich Rose.</li>
                                <li>• Cordyceps militaris</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyThree" aria-expanded="false" aria-controls="collapseThreetyThree">
                                    <span class="title">33. POUR GUERIR INFERTILITÉ MASCULINE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyThree" class="accordion-collapse collapse show" aria-labelledby="headingThreetyThree" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                                <li>• Libao</li>
                                <li>• Nutrivrich Rose ou Bleu</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyFour" aria-expanded="false" aria-controls="collapseThreetyFour">
                                    <span class="title">34. POUR GUERIR TAUX DE CHOLESTÉROL ÉLEVÉ :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyFour" class="accordion-collapse collapse show" aria-labelledby="headingThreetyFour" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Rose</li>
                                <li>• Thé marron</li>
                                <li>• Gobelet alcalin</li>
                                <li>• Thé minceur</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyFive" aria-expanded="false" aria-controls="collapseThreetyFive">
                                    <span class="title">35. POUR GUERIR CHUTE DES CHEVEUX :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyFive" class="accordion-collapse collapse show" aria-labelledby="headingThreetyFive" data-bs-parent="#accordionExample">
                                <li>• Shampooing anti-pelliculaire </li>
                                <li>• shampoing pour bébé</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetySix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetySix" aria-expanded="false" aria-controls="collapseThreetySix">
                                    <span class="title">36. POUR GUERIR INFLAMMATION DU COLON :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetySix" class="accordion-collapse collapse show" aria-labelledby="headingThreetySix" data-bs-parent="#accordionExample">
                                <li>• Berry oil</li>
                                <li>• Cordyceps militaris</li>
                                <li>• Nutrivrich Bleu</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetySeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetySeven" aria-expanded="false" aria-controls="collapseThreetySeven">
                                    <span class="title">37. POUR GUERIR MALADIE DE LA VÉSICULE BILIAIRE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetySeven" class="accordion-collapse collapse show" aria-labelledby="headingThreetySeven" data-bs-parent="#accordionExample">
                                <li>• Nutrivrich Bleu</li>
                                <li>• Berry oil</li>
                                <li>• Cordyceps militaris</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyEight">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyEight" aria-expanded="false" aria-controls="collapseThreetyEight">
                                    <span class="title">38. POUR GUERIR DYSENTERIE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyEight" class="accordion-collapse collapse show" aria-labelledby="headingThreetyEight" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Berry oil</li>
                                <li>• Thé marron</li>
                                <li>• Gobelet alcalin</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingThreetyNine">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreetyNine" aria-expanded="false" aria-controls="collapseThreetyNine">
                                    <span class="title">39. POUR GUERIR ARTHRITE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseThreetyNine" class="accordion-collapse collapse show" aria-labelledby="headingThreetyNine" data-bs-parent="#accordionExample">
                                <li>• Calcium</li>
                                <li>• Arthro SupReviver</li>
                                <li>• Protège-slips</li>
                                <li>• Bone-M</li>
                                <li>• Chaussure énergétique</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingForty">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseForty" aria-expanded="false" aria-controls="collapseForty">
                                    <span class="title">40. POUR GUERIR MAUVAISE HALEINE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseForty" class="accordion-collapse collapse show" aria-labelledby="headingForty" data-bs-parent="#accordionExample">
                                <li>• Senteur de bouche</li>
                                <li>• Pâte dentifrice</li>
                                <li>• Thé vert</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyOne" aria-expanded="false" aria-controls="collapseFortyOne">
                                    <span class="title">41. POUR GUERIR ASTHME :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyOne" class="accordion-collapse collapse show" aria-labelledby="headingFortyOne" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Nutrivrich Rose</li>
                                <li>• Senteur de bouche</li>
                                <li>• Gobelet alcalin</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyTwo" aria-expanded="false" aria-controls="collapseFortyTwo">
                                    <span class="title">42. POUR GUERIR MAUX DE POITRINES :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyTwo" class="accordion-collapse collapse show" aria-labelledby="headingFortyTwo" data-bs-parent="#accordionExample">
                                <li>• Gobelet alcalin</li>
                                <li>• Berry oil</li>
                                <li>• Cordyceps militaris</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyThree" aria-expanded="false" aria-controls="collapseFortyThree">
                                    <span class="title">43. POUR GUERIR ODEUR CORPORELLE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyThree" class="accordion-collapse collapse show" aria-labelledby="headingFortyThree" data-bs-parent="#accordionExample">
                                <li>• Savon à base de charbon de bambou</li>
                                <li>• Déodorant </li>
                                <li>• Gel de douche</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyFour" aria-expanded="false" aria-controls="collapseFortyFour">
                                    <span class="title">44. POUR GUERIR ECZÉMA :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyFour" class="accordion-collapse collapse show" aria-labelledby="headingFortyFour" data-bs-parent="#accordionExample">
                                <li>• Lait corporel</li>
                                <li>• Nutrivrich Rose</li>
                                <li>• Berry oil</li>
                                <li>• Gobelet alcalin</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyFive" aria-expanded="false" aria-controls="collapseFortyFive">
                                    <span class="title">45. POUR GUERIR INFERTILITÉ FÉMININE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyFive" class="accordion-collapse collapse show" aria-labelledby="headingFortyFive" data-bs-parent="#accordionExample">
                                <li>• Mengqian</li>
                                <li>• Protège-slips</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortySix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortySix" aria-expanded="false" aria-controls="collapseFortySix">
                                    <span class="title">46. POUR GUERIR FRACTURE DES OS :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortySix" class="accordion-collapse collapse show" aria-labelledby="headingFortySix" data-bs-parent="#accordionExample">
                                <li>• Calcium</li>
                                <li>• Arthro SupReviver</li>
                                <li>• Bone-M</li>
                                <li>• Chaussure énergétique</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortySeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortySeven" aria-expanded="false" aria-controls="collapseFortySeven">
                                    <span class="title">47. POUR GUERIR FATIGUE GÉNÉRALE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortySeven" class="accordion-collapse collapse show" aria-labelledby="headingFortySeven" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Arthro SupReviver</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyEight">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyEight" aria-expanded="false" aria-controls="collapseFortyEight">
                                    <span class="title">48. POUR GUERIR LÈPRE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyEight" class="accordion-collapse collapse show" aria-labelledby="headingFortyEight" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Nutrivrich Rose</li>
                                <li>• Berry oil</li>
                                <li>• Arthro SupReviver</li>
                                <li>• Gobelet alcalin</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="row accordion" id="accordionExample">
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFortyNine">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFortyNine" aria-expanded="false" aria-controls="collapseFortyNine">
                                    <span class="title">49. POUR GUERIR CICATRICES :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFortyNine" class="accordion-collapse collapse show" aria-labelledby="headingFortyNine" data-bs-parent="#accordionExample">
                                <li>• Lait corporel </li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFifty">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifty" aria-expanded="false" aria-controls="collapseFifty">
                                    <span class="title">50. POUR GUERIR PERTE DE MÉMOIRE :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFifty" class="accordion-collapse collapse show" aria-labelledby="headingFifty" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Nutrivrich Roser</li>
                                <li>• Berry oil</li>
                                <li>• Calcium</li>
                            </ul>
                        </li>
                        <li class="accordion-item col-md-4 col-lg-4">
                            <h2 class="accordion-header" id="headingFifty">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifty" aria-expanded="false" aria-controls="collapseFifty">
                                    <span class="title">51. POUR GUERIR LE VIH/SIDA :</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <ul id="collapseFifty" class="accordion-collapse collapse show" aria-labelledby="headingFifty" data-bs-parent="#accordionExample">
                                <li>• Cordyceps militaris</li>
                                <li>• Gobelet Alcalin</li>
                                <li>• Nutrivrich Bleu</li>
                                <li>• Berry oil</li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>



            <div id="produits" class="row ">
                <div class="d-flex justify-content-between align-items-center flex-wrap items-center pt-5 mt-3">
                    <div class="flex-grow-1">
                        <h4 class="">Recherche de produit?</h4>
                        <p>écrivez simplement le nom du produit dans la barre de recherche.</p>
                    </div>

                    <div class="d-flex align-items-center navbar-search search-style-5">
                        <div class="search-input">
                            <input type="text" wire:model.debounce.500ms="search" placeholder="Recherche" class="form-control me-2">
                        </div>
                        <div class="search-btn  fs-4">
                            <button class="btn btn-primary"><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                    

                </div>
                <section class="home-product-list section pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <h4 class="list-title text-danger">Soins corporels</h4>

                                @foreach ($produits as $produit)
                                    @if ($produit->id_typeArticle == 2)
                                        <div class="single-list">
                                            <div class="list-image">
                                                <a href="{{route('produit_soins.show', $produit->id)}}"><img src="{{ asset('storage/'.$produit->image_1)}}" alt="#"></a>
                                            </div>
                                            <div class="list-info">
                                                <h3>
                                                    <a href="{{route('produit_soins.show', $produit->id)}}">{{$produit->nom_produit}}</a>
                                                </h3>
                                                <span>{{$produit->prix_promo}} frcfa</span>
                                            </div>
                                        </div>
                                    @endif
                                
                                @endforeach

                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <h4 class="list-title text-danger">Santé</h4>

                                @foreach ($produits as $produit)
                                    @if ($produit->id_typeArticle == 1)
                                        <div class="single-list">
                                            <div class="list-image">
                                                <a href="{{route('produit_sante.show', $produit->id)}}l"><img src="{{ Storage::url($produit->image_1)}}" alt="#"></a>
                                            </div>
                                            <div class="list-info">
                                                <h3>
                                                    <a href="{{route('produit_sante.show', $produit->id)}}">{{$produit->nom_produit}}</a>
                                                </h3>
                                                <span>{{$produit->prix_promo}} frcfa</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                @endforeach

                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <h4 class="list-title text-danger">Hygiène et entretien</h4>

                                @foreach ($produits as $produit)
                                    @if ($produit->id_typeArticle == 3)
                                        <div class="single-list">
                                            <div class="list-image">
                                                <a href="{{route('produit_hygiene.show', $produit->id)}}"><img src="{{ Storage::url($produit->image_1)}}" alt="#"></a>
                                            </div>
                                            <div class="list-info">
                                                <h3>
                                                    <a href="{{route('produit_hygiene.show', $produit->id)}}">{{$produit->nom_produit}}</a>
                                                </h3>
                                                <span>{{$produit->prix_promo}} frcfa</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                @endforeach

                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <h4 class="list-title text-danger">Spécial bébé</h4>

                                @foreach ($produits as $produit)
                                    @if ($produit->id_typeArticle == 4)
                                        <div class="single-list">
                                            <div class="list-image">
                                                <a href="{{route('produit_bebe.show', $produit->id)}}"><img src="{{ Storage::url($produit->image_1)}}" alt="#"></a>
                                            </div>
                                            <div class="list-info">
                                                <h3>
                                                    <a href="{{route('produit_bebe.show', $produit->id)}}">{{$produit->nom_produit}}</a>
                                                </h3>
                                                <span>{{$produit->prix_promo}} frcfa</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                @endforeach

                            </div>
                        </div>
                        <div>
                            {{$produits->links()}}
                        </div>
                    </div>
                </section>
                <div class="button text-center pb-1">
                    <a type="button" wire:click.prevent='Presentation()'  class="button_animate">Présentation de Longrich</a>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>