@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Explicador - {{$teacher->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$teacher->name}}</strong></p>
                    <p>Email: <strong>{{$teacher->email}}</strong></p>
                    <p>Escola: <strong>{{$teacher->school->name}}</strong></p>
                    <p>Telefone: <strong>{{$teacher->mobile}}</strong></p>
                    
                    <p>Descrição: <strong>{{$teacher->description}}</strong></p>
                    <p>Imagem: </p>
                    <img src="/storage/{{$teacher->image}}" width="250" height="250" alt="">
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection