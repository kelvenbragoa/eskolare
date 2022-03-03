@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{$school->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    @if (Session::has('messageSuccess'))
                        <div class="alert alert-success">
                            {{Session::get('messageSuccess')}}
                        </div>
                    @endif
                    @if (Session::has('messageError'))
                    <div class="alert alert-danger">
                        {{Session::get('messageError')}}
                    </div>
                @endif
                    <table id="myTable" class="table display" >
                        <thead>
                            <tr>
                                <th style="width:20%;">ID</th>
                                <th style="width:20%;">Classe</th>
                                <th style="width:20%">Material</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schoolmaterial as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->grade->name}}</td>
                                <td>{{$item->material->name}}</td>
                               
                                
                                <td class="table-action">
                                    
                                    <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            @include('admin.materialescolar.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection