@extends('layouts.master')
@section('content')
     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Compre tudo para a educação,<br> em um único lugar</h1>
            <h2>Escolha o seu material escolar com apenas um clique!</h2>
            <a href="courses.html" class="btn-get-started">Iniciar</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Porque escolher Lista-Eskolare?</h3>
                            <p>
                                Lista-Eskolare é um ecommerce de listas escolares que nasceu para ajudar milhares de encarregados de educação a comprar o material escolar dos seus filhos, encontrar um explicador e meio de transporte, de uma forma fácil, rápida e segura.
                            </p>
                            <div class="text-center">
                                <a href="{{URL::to('howitworks')}}" class="more-btn">Ler mais <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-book"></i>
                                        <h4>Compra de Material escolar</h4>
                                        <p>Com apenas um clique tenha o material escolar a sua porta.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-female"></i>
                                        <h4>Explicadores Qualificados</h4>
                                        <p>Encontre os explicadores qualificados indicados pela escola do seu pequeno.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-car"></i>
                                        <h4>Encontre meio de transporte escolar</h4>
                                        <p>Encontre as carrinhas escolares disponíveis no escola do seu pequeno.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->
        <section>
            <div class="breadcrumbs">
                <div class="container">
                    <h2>Categorias</h2>
                    <p>Podera ver as diversas categorias. </p>
                </div>
            </div>
        </section>



        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach (\App\Models\Category::all() as $item)
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-book-read-fill" style="color: #47ffa3;"></i>
                            <h3><a href="">{{$item->name}}</a></h3>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-book-read-fill" style="color: #47ffa3;"></i>
                            <h3><a href="">Explicação com professor</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-car-fill" style="color: #47ffa3;"></i>
                            <h3><a href="">Carrinha Escolar</a></h3>
                        </div>
                    </div>
                    
                   
                   
                </div>
            </div>
        </section>
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Lista-Eskolare</h2>
                <p> Lista-Eskolare é um ecommerce de listas escolares que nasceu para ajudar milhares de encarregados de educação a comprar o material escolar dos seus filhos, encontrar um explicador e meio de transporte, de uma forma fácil, rápida e segura. </p>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/ec.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>O que é Lista-Eskolare.</h3>
                        <p class="fst-italic">

                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> No Lista-Eskolare encontra todos os materiais escolares do seu filho exigidos pela escola.</li>
                            <li><i class="bi bi-check-circle"></i> No Lista-Eskolare o material é entregue a porta da sua casa com apenas um clique.</li>
                            <li><i class="bi bi-check-circle"></i> No Lista-Eskolare você encontra explicador qualificado para lhe ajudar e carrinhas escolares.</li>
                        </ul>
                        <p>
                            Compre agora seu material escolar completo em um único lugar!! De forma simples, fácil e segura!
                        </p>

                    </div>
                </div>

            </div>
        </section>

    </main>
    
@endsection