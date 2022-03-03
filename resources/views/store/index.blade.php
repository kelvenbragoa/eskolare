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

    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('template2/assets/img/backtoschool.png')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Encontre materiais escolares recomendados pelas escolas </a></h5>

                            <p class="card-text">Compre o material escolar recomendado pelas escolas para a classe desejada.</p>

                            <form method="POST" action="{{route('category.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="mb-12 col-md-12">
                                        <label class="form-label" for="inputEmail4">Província</label>
                                        <select  class="form-control" id="province_id" name="province_id" placeholder="Cidade" value="{{ old('province_id') }}" required>
                                            @foreach (\App\Models\Province::all() as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-12 col-md-12">
                                        <label class="form-label" for="inputEmail4">Escola</label>
                                        <select  class="form-control" id="school" name="school" placeholder="Escola" value="{{ old('province_id') }}" required>
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-12 col-md-12">
                                        <label class="form-label" for="inputEmail4">Classe</label>
                                        <select  class="form-control" id="province_od" name="province_id" placeholder="Cidade" value="{{ old('province_id') }}" required>
                                            @foreach (\App\Models\Province::all() as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
        
                                
        
                                <button type="submit"  class="btn btn-primary">Procurar Material Escolar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('template2/assets/img/backtoschool2.png')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Materiais Escolares Recomendados pelas classes</a></h5>

                            <p class="card-text">Material escolar apenas escolhendo a classe escolar.</p>

                            <form method="GET" action="{{URL::to('/material-grade')}}">
                               
                                <div class="row">
                                    <div class="mb-12 col-md-12">
                                        <label class="form-label" for="inputEmail4">Classe</label>
                                        <select  class="form-control" id="grade" name="grade" placeholder="Cidade" value="{{ old('province_id') }}" required>
                                            @foreach (\App\Models\Grade::all() as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                              
        
                                
        
                                <button type="submit"  class="btn btn-primary">Procurar Material Escolar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
        
    </section>

   

 



</main>

    


<script>
    $(document).ready(function(){
        $('#province_id').on('change',function(){
            let id = $(this).val();
            $('#school').empty();
            $('#school').append('<option value="0" disabled selected> Processando...</option>');

            $.ajax({
                type:'GET',
                url:'getschool/' + id,
                success: function(response){
                    

                    
                    var res = JSON.parse(response);
                    console.log(res);

                    $('#school').empty();
                    $('#school').append('<option value="" disabled selected>Selecione a Escola</option>');
                   
                    for(var i=0 ; i < res.length ; i++){
                        var item = res[i];
                        $('#school').append('<option value="'+$(item['id'])+'">'+$(item)+'</option>')
                    }
                }
            })
        })
    });
</script>

@endsection