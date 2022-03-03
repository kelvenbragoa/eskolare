@extends('layouts.master')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Carrinhas escolar</h2>
            <p>Aqui você encontra o transporte ideal para as crianças. Conte connosco para levarmos os mais pequenos à escola e a atividades extracurriculares. </p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('template2/assets/img/events-1.jpg')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Carrinhas escolares</a></h5>

                            <p class="card-text">Com Lista-Eskolare encontre as carrinhas escolares facilmente a partir da escola do seu filho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('template2/assets/img/events-2.jpg')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Segurança e conforto</a></h5>
                            <p class="fst-italic text-center">Para nossos pequenos</p>
                            <p class="card-text">Abaixo encontre a lista das províncias com as respectivas escolas. Clica em uma das escolas para verificar as carrinhas escolares.</p>
                                
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                @foreach (\App\Models\Province::all() as $item)
                            
                            <div class="card">
                                <div class="card-header">
                                    {{$item->name}}
                                </div>
                                <div class="card-body">
                                    
                                        <div class="col">{{$item->name}}</div>

                                        <div class="row">
                                            @if (count(\App\Models\School::where('province_id',$item->id)->get()) == 0)
                                            <div class="col-md-3" style="color: orange">Nenhuma escola nessa província</div>
                                            @endif
                                            @foreach (\App\Models\School::where('province_id',$item->id)->get() as $itemSchool)
                                            <div class="col-md-3" style="color: rgb(114, 235, 114)"><i class="ri-book-read-fill" style="color: #47ffa3;"></i><a href="{{URL::to('/schoolbus/'.$itemSchool->id.'/show')}}" >{{$itemSchool->name}}</a> </div>
                                           
                                            @endforeach
                                            
                                            
                                        </div>
                            
                                </div>
                            
                            
                            </div>
                            @endforeach
            </div>

        </div>
        
    </section>

    
    <!-- End Events Section -->

</main>
<!-- End #main -->
@endsection