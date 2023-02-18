@can("SuperAdmin")
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
                <a href="{{ route('superadmin.produit/liste.sante')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santé</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.produit/liste.soins')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Soins et beauté</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.produit/liste.hygiene')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hygiène et traitement</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.produit/liste.bebe')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Spécials bébé</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.produit/liste.ordinateur')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ordinateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.produit/liste.accessoire')}}" class="nav-link">
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
                <a href="{{ route('superadmin.vente.devis')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dévis</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.vente.commandes')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Commandes</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.vente.livraisons')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Livraisons</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.vente.factures')}}" class="nav-link">
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
                <a href="{{ route('superadmin.contact.user')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Utilisateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('superadmin.contact.client')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Clients</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
@endcan