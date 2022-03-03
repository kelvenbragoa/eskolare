@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Editar Material</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar Material</h5>
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
                    <form method="POST" action="{{ route('material.update', $material->id)}}">
                        @csrf
                        @method('PATCH')
                       
                      

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ $material->name }}" required>
                            </div>
                           
                            
                           
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Descrição</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="description" value="{{ $material->description }}"  required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Preço</label>
                                <input type="number" class="form-control" name="price" id="price" placeholder="Telefone" value="{{ $material->price }}"  required>
                            </div>
                           
                            
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                
                                <label class="form-label" for="inputCity">Imagem</label>
                                <img src="/storage/{{$material->image}}" width="250" height="250" alt="" class="w-100">
                                <input type="file" class="form-control" placeholder="Image" name="image" value="{{ old('image') }}"> 
                            </div>
                           
                            
                           
                        </div>
                       

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputAddress">Categoria</label>
                                <select  class="form-control" id="id_category" name="id_category" placeholder="Categoria" required>
                                    @foreach (\App\Models\Category::all() as $item)
                                            <option value="{{$item->id}}" @if ($item->id == $material->category_id ) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            </div>
                        <button type="submit"  class="btn btn-primary">Submeter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection