<div class="single-widget">
    <h3>Toutes les categories</h3>
    <ul class="list">
        <li class="{{menuClassActive('produit_sante')}}">
            <a   href="{{ route('produit_sante')}}">Santé</a><span>({{nbreProductByCat()}})</span>
        </li>
        <li class="{{menuClassActive('produit_soins')}}">
            <a href="{{ route('produit_soins')}}">Soins et beauté</a><span>({{(nbreProductByCat())}})</span>
        </li>
        <li class="{{menuClassActive('produit_hygiene')}}">
            <a href="{{ route('produit_hygiene')}}">Hygiéne et traitement</a><span>({{nbreProductByCat()}})</span>
        </li>
        <li class="{{menuClassActive('produit_bebe')}}">
            <a href="{{ route('produit_bebe')}}">Spécial Bébé</a><span>({{nbreProductByCat()}})</span>
        </li>
        <li class="{{menuClassActive('produit_ordis')}}">
            <a href="{{ route('produit_ordis')}}">Ordinateurs</a><span>({{nbreProductByCat()}})</span>
        </li>
        <li class="{{menuClassActive('produit_autres')}}">
            <a href="{{ route('produit_autres')}}">Accessoires</a><span>({{nbreProductByCat()}})</span>
        </li>
    </ul>
</div>