@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Província</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Província</h5>
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
                    <form method="POST" action="{{route('province.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">Nome da Província</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome da Província" value="{{ old('name') }}" required>
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