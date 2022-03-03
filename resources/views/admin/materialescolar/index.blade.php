@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Escolas</h1>

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
                                <th style="width:20%;">Nome</th>
                                <th style="width:20%">Email</th>
                                <th style="width:20%">Telefone</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($school as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->mobile}}</td>
                               
                                
                                <td class="table-action">
                                    <a href="{{URL::to('/add/'.$item->id.'/material')}}"><i class="align-middle" data-feather="plus"></i></a>
                                    <a href="{{URL::to('/materialescolar/'.$item->id)}}"><i class="align-middle" data-feather="eye"></i></a>
                                    
                                </td>
                            </tr>
                           
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection