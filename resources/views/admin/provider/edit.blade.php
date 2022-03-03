@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Editar Fornecedor</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar Fornecedor</h5>
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
                    <form method="POST" action="{{ route('provider.update', $provider->id)}}">
                        @csrf
                        @method('PATCH')
                       
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.name')}}" value="{{ $provider->name }}" required>
                            </div>
                           
                            
                           
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $provider->email }}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Telefone</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Telefone" value="{{ $provider->mobile }}" required>
                            </div>
                           
                            
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Endereço" value="{{ $provider->address }}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputAddress">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="{{ $provider->city }}" required>
                        </div>
                       
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputAddress">Província</label>
                                <select  class="form-control" id="province_od" name="province_id" placeholder="Cidade" required>
                                    @foreach (\App\Models\Province::all() as $item)
                                            <option @if ($provider->province_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
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