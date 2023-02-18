<!DOCTYPE html>
<html class="no-js" lang="fr">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Young Of Longrich | Services Longrich</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/fonts/favicon.svg')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    @livewireStyles
    <style>
        #style{
            background-image: url('assets/images/hero/Longrich-griotys-tv.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .text-form{
            margin-top: 25vh;
        }

        @media (max-width: 991px) {
            .text-form{
                margin-left: 40px;
                margin-top: 13vh;
            }
        }
        @media (max-width: 767px) {
            .text-form{
                margin-left: 0px;
                margin-top: 5vh;
            }
        }
    </style>
</head>

<body class="bg-secondary" id="">

    <div class="container">
        @yield('content')
    </div>

    @livewireScripts

    {{-- Sweetalert2 CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Sweetalert LOCAL --}}
    <script src="{{ asset('assets/js/sweetalert2.all.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    {{-- <script>
        $(document).ready(function(){
            $("#country").change(function(){
                let country_id = this.value;
                $.get('/get_states?country='+country_id, function(data){
                    let dd = $("#state").html(data)
                        console.log(data)
                })
            })
        })
    </script>
     --}}
</body>


</html>