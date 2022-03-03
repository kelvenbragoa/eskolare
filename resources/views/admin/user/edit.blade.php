@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.edit')}}  {{__('text.assets')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.edit')}}  {{__('text.assets')}}</h5>
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
                    <form method="POST" action="{{ route('assets.update', $asset->id)}}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.name')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.name')}}" value="{{ $asset->name }}" required>
                            </div>
                           
                            
                           
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.identifier')}}</label>
                                <input type="text" class="form-control" name="identifier" id="identifier" placeholder="{{__('text.identifier')}}" value="{{ $asset->identifier}}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputEmail4">{{__('text.type')}}</label>
                                <input type="text" class="form-control" name="type" id="type" placeholder="{{__('text.type')}}" value="{{ $asset->type }}" required>
                            </div>
                           
                            
                            
                           
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputCity">{{__('text.atributes')}}</label>
                                <input type="text" class="form-control" id="attributes" name="attributes" placeholder="{{__('text.atributes')}}" value="{{ $asset->attributes }}" required>
                            </div>
                           
                            
                           
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputAddress">{{__('text.address')}}</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="{{__('text.address')}}" value="{{ $asset->address }}" required>
                        </div>
                       
                        </div>

                        <button type="submit"  class="btn btn-primary">{{__('text.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection