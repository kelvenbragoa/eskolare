@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Fornecedor - {{$provider->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$provider->name}}</strong></p>
                    <p>Email: <strong>{{$provider->email}}</strong></p>
                    <p>Endereço: <strong>{{$provider->address}}</strong></p>
                    <p>Cidade: <strong>{{$provider->city}}</strong></p>
                    <p>Província: <strong>{{$provider->province->name}}</strong></p>
                    <p>Telefone: <strong>{{$provider->mobile}}</strong></p>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection