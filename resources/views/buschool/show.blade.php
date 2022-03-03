@extends('layouts.master')
@section('content')
<main id="main" data-aos="fade-in">
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
                @if (count($bus) == 0)
                <div class="col-md-3" style="color: orange">Nenhuma carrinha escolar nesta escola </div>
                @endif
                @foreach ($bus as $item)
                            
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-body">

                                        <p>Nome: {{$item->name}}</p> 
                                        <p>Escola: {{$item->school->name}}</p>
                                        <p>Província: {{$item->school->province->name}}</p>
                                        <p>Telefone: {{$item->mobile}}</p>
                                        <p>Email: {{$item->email}}</p>
                                        <p>Descrição: {{$item->description}}</p>

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