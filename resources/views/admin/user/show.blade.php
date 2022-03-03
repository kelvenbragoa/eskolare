@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Usuário - {{$user->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$user->name}}</strong></p>
                    <p>Email: <strong>{{$user->email}}</strong></p>
                    <p>Província: <strong>{{$user->province->name}}</strong></p>
                    <p>Telefone: <strong>{{$user->mobile}}</strong></p>
                    <p>Cidade: <strong>{{$user->city}}</strong></p>
                    <p>Endereço: <strong>{{$user->address}}</strong></p>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection