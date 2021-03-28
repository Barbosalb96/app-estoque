<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{route('dashboard.index')}}" aria-expanded="false">
                    <i class="fa fa-dashboard"></i><span class="nav-label">Dashboard</span><span
                        class="fa arrow"></span></a>
            </li>
            <li>
                <a href="#" aria-expanded="false">
                    <i class="fa fa-users"></i><span class="nav-label">Clientes</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li><a href="{{route('cliente.index')}}">Lista de Clientes</a></li>
                    <li><a href="{{route('cliente.create')}}">Cadastrar Clientes</a></li>
                    <li><a href="carousel.html">Buscar por Compras</a></li>
                </ul>
            </li>
            <li>
                <a href="#" aria-expanded="false">
                    <i class="fa fa-truck-moving"></i><span class="nav-label">Fornecedores</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li><a href="basic_gallery.html">Lista de Fornecedores</a></li>
                    <li><a href="slick_carousel.html">Cadastrar Fornecedor</a></li>
                </ul>
            </li>
            <li>
                <a href="#" aria-expanded="false">
                    <i class="fas fa-stream"></i><span class="nav-label">Categoria</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li><a href="{{route('categoria.index')}}">Lista de Categoria</a></li>
                    <li><a href="{{route('categoria.create')}}">Cadastrar Categoria</a></li>
                </ul>
            </li>

            <li>
                <a href="#" aria-expanded="false">
                    <i class="fas fa-box"></i><span class="nav-label">Produtos</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li><a href="{{route('produto.index')}}">Lista de Produtos</a></li>
                    <li><a href="{{route('produto.create')}}">Cadastrar Produtos</a></li>
                    <li><a href="carousel.html">Buscar por Produtos</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
