<!DOCTYPE html>
<html class="no-js" lang="fr">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Young Of Longrich | Services Longrich</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/fonts/favicon.svg')}}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <style>
        .button_animate{
            animation: start .9s linear infinite;
            background-color: #0c0cc9;
            padding: 10px;
            position: absolute;
            border: none;
            color: white;
            font-weight: bold;
            font: 25px;
            z-index: 9999;
            margin: 0px 0px 50px -100px;

            }

            @keyframes start{
            to{
                transform: rotate('180');
                padding: 15px;
                box-shadow: 4px 4px 4px 4px #222229;
            }
        }
        .btn-contact-inscri{
            position: absolute;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 100px;
            margin-left: -100px;
        }
        @media (max: 830px){
            .btn-contact-inscri{
            margin-left: 20px !important;
            
        }
        }
        .button_animate_1{
            animation: start .9s linear infinite;
            background-color: #0c0cc9;
            padding: 10px;
            
            border: none;
            color: white;
            font-weight: bold;
            font: 25px;
            z-index: 9999;
            }

            @keyframes start{
            to{
                transform: rotate('180');
                padding: 15px;
                box-shadow: 4px 4px 4px 4px #222229;
            }
        }
        .button_animate_2{
            animation: start .9s linear infinite;
            background-color: #0c0cc9;
            padding: 10px;
            position: absolute;
            border: none;
            color: white;
            font-weight: bold;
            font: 25px;
            z-index: 9999;
            }

            @keyframes start{
            to{
                transform: rotate('180');
                padding: 15px;
                box-shadow: 4px 4px 4px 4px #222229;
            }
        }
        
        .btn-temoignage{
            background-color: rgb(234, 22, 3) !important;
            color: #fff;
            border: none;
            padding: 10px;
            font-weight: bold;
            border-radius: 10px;
        }
        .header .container .btn-tmg .btn-temoignage:hover{
            color: #fff;
            font-size: 15px;
            padding: 13px;
        }
        .header .container .menu-top-link .top a:hover{
            background-color: #fff;
            padding: 9px;
        }
        .header .container .top-end .user-login a:hover{
            background-color: #fff;
            padding: 9px;
        }
        #produits .button button:hover{
            background-color: #2525d6;
        }
        .active{
            color:blue ! important;
        }
        .logo-reseau-sociaux{
            background-color: rgba(0, 255, 204, 0.88);
        }
        a .logo-whats{
            width: 4rem !important;
        }
        .header .mega-category-menu{
            margin-right: 0 !important;
        }
        .text-top-m li a{
            color: white !important;
        }

        .text-top-m li a:hover{
            color: #0d6efd !important;
        }
        .single-category .images img{
            width: 60% !important;
        }
        nav .pagination{
            display: flex;
        }
        .whatsapp-api{
            bottom: 15px;
            left: 20px;
            position: fixed;
            z-index: 9999;
        }
        .card-header{
            background-color: rgb(42, 243, 243);
        }
        .section-title{
            color: rgb(234, 22, 3);
            font-weight: bold;
        }
        .category_p{
            font-size: 28px !important;
            text-transform: uppercase;
            color: #dc3545 !important;
            font-weight: bold;
        }
        .featured-categories .single-category ul li a {
            color: #fff;
        }
        .featured-categories .single-category ul li:hover {
            color: red;
            z-index: 9999;
        }
        .btn {
            background-color: rgb(13, 87, 245) !important;
            border: 1px solid #dfdfdf;
            color: #081828;
        }
        .featured-categories .single-category ul div .btn:hover{
            padding-left: 5px;
            transition: all 0.4s ease;
            background-color: rgb(234, 22, 3) !important;
            align-content: center;
        }
        .btn-danger{
            background-color: #e41704 !important;
        }
        .btn-outline-danger{
            background-color: #e41704 !important;
        }
        .btn-success{
            background-color: #03a92c !important;
        }
        .item-details .product-info {
            padding: 10px !important;
        }
    </style>

    @livewireStyles
    
</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @include('template.user._navbar')

    @yield('contact')
    @yield('accueil')
    @yield('boutique')
    @yield('partenaire')

    @yield('produit_sante')
    @yield('produit_soins')
    @yield('produit_hygiene')
    @yield('produit_ordis')
    @yield('produit_bebe')
    @yield('produit_autre')

    @yield('view_produit')
    @yield('content')
    @yield('panier')

    <div class="whatsapp-api">
        <a href="https://api.whatsapp.com/send?phone=2250748548680" target="_bank">
            <img src="{{asset('assets/images/featured-categories/logo-WhatsApp.png')}}" alt="" class="logo-whats" />
        </a>
    </div>

    @include('template.user._footer')

    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    @livewireScripts

    {{-- Sweetalert2 CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Sweetalert LOCAL --}}
    <script src="{{ asset('assets/js/sweetalert2.all.min.js')}}"></script>
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/page.js')}}"></script>
    
</body>


</html>