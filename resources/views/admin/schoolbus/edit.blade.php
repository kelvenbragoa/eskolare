@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Editar Carrinha Escola</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar Carrinha Escolar</h5>
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
                    <form method="POST" action="{{ route('schoolbus.update', $schoolbus->id)}}">
                        @csrf
                        @method('PATCH')
                       
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.name')}}" value="{{ $schoolbus->name }}" required>
                            </div>
                           
                            
                           
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $schoolbus->email }}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Telefone</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Telefone" value="{{ $schoolbus->mobile }}" required>
                            </div>
                           
                            
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">Descrição</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Descrição" value="{{ $schoolbus->description }}" required>
                            </div>
                           
                            
                           
                        </div>
                        

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputAddress">Escola</label>
                                <select  class="form-control" id="school_id" name="school_id" placeholder="Cidade" required>
                                    @foreach (\App\Models\School::all() as $item)
                                            <option @if ($schoolbus->school_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            </div>
                            
                            <img src="/storage/{{$schoolbus->image}}" width="250" height="250" alt="">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="inputCity">Imagem</label>
                                    <input type="file" class="form-control" placeholder="Image" name="image" value="{{ old('image') }}"> 
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