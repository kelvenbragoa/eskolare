@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Material - {{$material->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$material->name}}</strong></p>
                    <p>Descrição: <strong>{{$material->description}}</strong></p>
                    <p>Preço: <strong>{{$material->price}} MT</strong></p>
                    <p>Categoria: <strong>{{$material->category->name}}</strong></p>
                    <p>Image: </p>
                    <img src="/storage/{{$material->image}}" width="250" height="250" alt="">
                    
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection