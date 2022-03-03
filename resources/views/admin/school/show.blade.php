@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Fornecedor - {{$school->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$school->name}}</strong></p>
                    <p>Email: <strong>{{$school->email}}</strong></p>
                    <p>Endereço: <strong>{{$school->address}}</strong></p>
                    <p>Cidade: <strong>{{$school->city}}</strong></p>
                    <p>Província: <strong>{{$school->province->name}}</strong></p>
                    <p>Telefone: <strong>{{$school->mobile}}</strong></p>
                    <p>Tipo de Ensino: <strong>{{$school->learn->name}}</strong></p>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection