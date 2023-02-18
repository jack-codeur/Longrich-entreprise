@can("Admin")
    <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Produits et services
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('liste_sante')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santé</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('liste_soins')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Soins et beauté</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('liste_hygiene')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hygiène et traitement</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('liste_bebe')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Spécials bébé</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('liste_ordinateur')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ordinateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('liste_accessoire')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Accessoires</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Ventes
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('devis')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dévis</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('commandes')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Commandes</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('livraisons')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Livraisons</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('factures')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Factures</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Contacts
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('contact_user')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Utilisateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact_client')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Clients</p>
                </a>
            </li>
        </ul>
    </li>
@endcan