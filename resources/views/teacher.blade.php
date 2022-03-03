@extends('layouts.master')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Explicadores</h2>
            <p>Contamos com centenas de explicadores altamente qualificados, de diferentes partes de moçambique, de forma presencial, online e domiciliar. Se procura explicador, contacte-nos ou solicite explicador,
                Iremos lhe recomendar o melhor explicador para si.</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

           
            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                @foreach (\App\Models\Teacher::all() as $item)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="/storage/{{$item->image}}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>{{$item->name}}</h4>
                                <span>{{$item->school->name}}</span>
                                <p>
                                    {{$item->description}}
                                </p>
                                    {{$item->school->province->name}}
                                    <p>{{$item->mobile}}</p>
                                    <p>{{$item->email}}</p>
                               
                            </div>
                        </div>
                    </div>
                @endforeach
                

                <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{asset('template2/assets/img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{asset('template2/assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>-->

            </div>

        </div>
    </section>
    <!-- End Trainers Section -->

</main>
    
@endsection