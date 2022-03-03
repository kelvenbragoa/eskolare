@extends('layouts_admin.master')
@section('content')

        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Paínel Análitco</strong></h3>
                </div>

               
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Classes</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\Grade::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Tipos de Ensino</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\Learn::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Províncias</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\Province::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Escolas</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\School::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Categorias Material Escolar</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\Category::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Materiais Escolares</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\Material::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Fornecedores</h5>
                                        <h1 class="mt-1 mb-3">{{count(\App\Models\Provider::all())}}</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Vendas</h5>
                                        <h1 class="mt-1 mb-3">2.382</h1>
                                        
                                    </div>
                                </div>  
                            </div>
                            
                          
                        </div>
                    </div>
                </div>

               
            </div>
        </div>

@endsection