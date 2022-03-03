<nav id="sidebar" class="sidebar" >
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{URL::to('/dashboard')}}">
          <span class="align-middle">Escolari</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Inicio
            </li>
            <li class="sidebar-item">
                <a href="#dashboard" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Paínel</span>
                </a>
                <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{URL::to('/home')}}">Geral</a></li>
                </ul>
            </li>

                
            
            <li class="sidebar-header">
                Cadastros
            </li>
            
                
            
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('grade.index')}}">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Classes</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('learn.index')}}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Tipo de Ensino</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('provider.index')}}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Fornecedores</span>
                </a>
            </li>

         

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('province.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Províncias</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('school.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Escolas</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('teacher.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Explicadores</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('schoolbus.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Carrinha Escolar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('user.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Usuários</span>
                </a>
            </li>

           

    

            <li class="sidebar-header">
                Materiais
            </li>

            

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('category.index')}}">
                <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Categorias</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('material.index')}}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Materiais</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('materialescolar.index')}}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Materiais das Escolas</span>
                </a>
            </li>

           

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('sell.index')}}">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Vendas e Ordem</span>
                </a>
            </li>

           
            

          
        </ul>
       
       
     
    </div>
</nav>