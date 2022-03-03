@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Classe - {{$grade->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detalhes</h5>
                    <br>
                    <p>Nome: <strong>{{$grade->name}}</strong></p>
                   
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection