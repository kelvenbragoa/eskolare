<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lista-Eskolare</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('template2/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('template2/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('template2/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/vendor/aos/aos.css" rel="stylesheet')}}')}}">
    <link href="{{asset('template2/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template2 Main CSS File -->
    <link href="{{asset('template2/assets/css/style.css')}}" rel="stylesheet">


    <link href="{{asset('template2/assets/css1/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/css1/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/css1/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/css1/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/css1/animate.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/css1/main.css')}}" rel="stylesheet">
    <link href="{{asset('template2/assets/css1/responsive.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Lista-Eskolare</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{URL::to('/howitworks')}}">Como funciona</a></li>
                    <li><a href="{{URL::to('/store')}}">Listas</a></li>
                    <li><a href="{{URL::to('/teacher')}}">Explicação</a></li>
                    <li><a href="{{URL::to('/schoolbus')}}">Carrinhas </a></li>
                    <!--<li><a href="pricing.html">Faça parte do Listaescolar</a></li>-->


                
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            @auth
            <a href="{{route('home')}}" class="get-started-btn">Perfil</a>
            @else
            <a href="{{route('login')}}" class="get-started-btn">Iniciar</a>
            @endauth
            
            

        </div>
    </header>
    <!-- End Header -->