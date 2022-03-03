@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Carrinha Escolar - {{$schoolbus->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$schoolbus->name}}</strong></p>
                    <p>Email: <strong>{{$schoolbus->email}}</strong></p>
                    <p>Escola: <strong>{{$schoolbus->school->name}}</strong></p>
                    <p>Telefone: <strong>{{$schoolbus->mobile}}</strong></p>
                    
                    <p>Descrição: <strong>{{$schoolbus->description}}</strong></p>
                    <p>Imagem: </p>
                    <img src="/storage/{{$schoolbus->image}}" width="250" height="250" alt="">
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection