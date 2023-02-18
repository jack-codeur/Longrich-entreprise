
<div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/images/soins/collection_Bebe_360x.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
        <div class="info">
            <a href="#" class="d-block">Young Of Longrich</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mb-3">
                <a href="{{ route('admin_accueil')}}" class="nav-link {{ menuClassActive('admin_accueil') }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Tableau de board
                    </p>
                </a>
            </li>

            @can("Admin")
                <li class="nav-item {{ menuClassOpen('admin.produit/liste.', 'menu-open') }}">
                    <a href="#" class="nav-link {{ menuClassOpen('admin.produit/liste.', 'active') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Produits et services
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.produit/liste.sante')}}" class="nav-link {{ menuClassActive('admin.produit/liste.sante') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Santé</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produit/liste.soins')}}" class="nav-link {{ menuClassActive('admin.produit/liste.soins') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Soins et beauté</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produit/liste.hygiene')}}" class="nav-link {{ menuClassActive('admin.produit/liste.hygiene') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hygiène et traitement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produit/liste.bebe')}}" class="nav-link {{ menuClassActive('admin.produit/liste.bebe') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Spécials bébé</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produit/liste.ordinateur')}}" class="nav-link {{ menuClassActive('admin.produit/liste.ordinateur') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ordinateurs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produit/liste.accessoire')}}" class="nav-link {{ menuClassActive('admin.produit/liste.accessoire') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Accessoires</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{menuClassOpen('admin.vente.', 'menu-open')}}">
                    <a href="#" class="nav-link {{ menuClassOpen('admin.vente.', 'active') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Ventes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.vente.devis')}}" class="nav-link {{ menuClassActive('admin.vente.devis') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dévis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.vente.commandes')}}" class="nav-link {{ menuClassActive('admin.vente.commandes') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Commandes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.vente.livraisons')}}" class="nav-link {{ menuClassActive('admin.vente.livraisons') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Livraisons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.vente.factures')}}" class="nav-link {{ menuClassActive('admin.vente.factures') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Factures</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  {{ menuClassOpen('admin.contact.', 'menu-open') }}">
                    <a href="#" class="nav-link {{ menuClassOpen('admin.contact.', 'active') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Contacts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.user')}}" class="nav-link {{ menuClassActive('admin.contact.user')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Utilisateurs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.client')}}" class="nav-link {{ menuClassActive('admin.contact.client')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clients</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Parametre
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            {{-- @include("template.admin._menu_admin") --}}
        </ul>
    </nav>

</div>