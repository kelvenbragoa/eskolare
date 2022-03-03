@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Adicionar material a escola {{$school->name}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$school->name}}</h5>
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
                    <form method="POST" action="{{route('materialescolar.store')}}">
                        @csrf
                        <input type="hidden" name="school_id" value="{{$school->id}}">
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Escolha a Classe</label>
                                <select  class="form-control" id="grade_id" name="grade_id" placeholder="Classe" value="{{ old('grade') }}" required>
                                    @foreach (\App\Models\Grade::all() as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            @foreach (\App\Models\Category::all() as $item)
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{$item->name}}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach (\App\Models\Material::where('id_category',$item->id)->get() as $itemMaterial)
                                        
                                            <div class="mb-3 col-md-3">
                                                <div class="card">
                                                <label for="">{{$itemMaterial->name}}</label>
                                                <img src="/storage/{{$itemMaterial->image}}" width="50" height="50" alt="{{$itemMaterial->name}}">
                                                <input type="checkbox" name="material_id[]" value="{{$itemMaterial->id}}">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                                
                            @endforeach
                            {{--@foreach (\App\Models\Material::all() as $item)
                                <div class="mb-3 col-md-3">
                                    <label for="">{{$item->name}}</label>
                                </div>
                            @endforeach--}}
                        </div>

                    
                            
                            
                          
                        

                        <button type="submit"  class="btn btn-primary">Submeter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection