@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Materiais</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('material.create')}}" class="btn btn-pill btn-primary"><i class="far fa-plus"></i>Adicionar</a>
                    
                </div>
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
                                <th style="width:10%;">ID</th>
                                <th style="width:20%;">Nome</th>
                                <th style="width:10%">Preço</th>
                                <th style="width:20%">Descrição</th>
                                <th style="width:10%">Categoria</th>
                                
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($material as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}} MT</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->category->name}}</td>

                               
                                
                                <td class="table-action">
                                    <a href="{{URL::to('/material/'.$item->id.'/edit')}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="{{URL::to('/material/'.$item->id)}}"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            @include('admin.material.modaldelete')
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection