@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Editar Escola</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar Escola</h5>
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
                    <form method="POST" action="{{ route('school.update', $school->id)}}">
                        @csrf
                        @method('PATCH')
                       
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.name')}}" value="{{ $school->name }}" required>
                            </div>
                           
                            
                           
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $school->email }}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Telefone</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Telefone" value="{{ $school->mobile }}" required>
                            </div>
                           
                            
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Endereço" value="{{ $school->address }}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputAddress">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="{{ $school->city }}" required>
                        </div>
                       
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputAddress">Província</label>
                                <select  class="form-control" id="province_od" name="province_id" placeholder="Cidade" required>
                                    @foreach (\App\Models\Province::all() as $item)
                                            <option @if ($school->province_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="inputAddress">Tipo de Ensino</label>
                                    <select  class="form-control" id="learn_id" name="learn_id" placeholder="Ensino" required>
                                        @foreach (\App\Models\Learn::all() as $item)
                                                <option @if ($school->learn_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
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