@extends('layouts.master')
@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Lista de Materiais</h2>
            <p>Selecione a sua cidade, escola e classe para obter a lista de materiais exigidos pela sua escola </p>
        </div>
    </div>

    <section>



        <div class="container">


            <div class="row">
                <h2 class="title text-center">Material escolar para {{$grade->name}}</h2>
                

                <div class="col-sm-12">
                   
                       <div class="row">
                           @foreach ($material as $item)
                               
                           
                           <div class="col-sm-3">
                         

                            <div class="card">
								<img class="card-img-top" src="/storage/{{$item->material->image}}" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">{{$item->material->name}}</h5>
								</div>
								<div class="card-body">
									<p class="card-text">{{$item->material->description}}</p>
									<a href="#" class="card-link">Card link</a>
									<a href="#" class="card-link">Another link</a>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href=""> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href=""> - </a>
                                        </div>
                                    </td>
								</div>
							</div>
                           </div>
                           @endforeach


                       </div>
                        
                       
          

              

                </div>
            </div>
        </div>
    </section>

   

 



</main>

    
@endsection