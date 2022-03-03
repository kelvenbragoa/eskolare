@extends('layouts_admin.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.assets')}} - {{$asset->name}}</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{__('text.details')}}</h5>
                    <br>
                    <p>{{__('text.name')}}: <strong>{{$asset->name}}</strong></p>
                    <p>{{__('text.identifier')}}: <strong>{{$asset->identifier}}</strong></p>
                    <p>{{__('text.address')}}: <strong>{{$asset->address}}</strong></p>
                    <p>{{__('text.atributes')}}: <strong>{{$asset->attributes}}</strong></p>
                    <p>{{__('text.type')}}: <strong>{{$asset->type}}</strong></p>
                    <p>{{__('text.contracts')}}: <strong>{{count($asset->contracts)}}</strong></p>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection