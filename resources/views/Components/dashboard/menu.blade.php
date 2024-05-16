<header class="header" id="header">
    <div class="container">
        <nav class="nav">
            <div class="logo">
            <i class="ri-menu-line" id="menuDashTwo"></i>
            </div>

            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{route('dashboard.index')}}" class="nav__link">
                        <i class="ri-home-line"></i>
                        Dashbord
                    </a>
                </li>
                @if (Auth::user()->tipo === 'admin')
                <li class="nav__item">
                    <a href="{{ route('dashboard.usuario.create') }}" class="nav__link">
                        <i class="ri-pass-pending-fill"></i>
                        Cadastrar Usuários
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('dashboard.usuario.index') }}" class="nav__link">
                        <i class="ri-id-card-fill"></i>
                        Visualizar Usuários
                    </a>
                </li>
            @endif
            
                <li class="nav__item">
                    <a href="{{route('dashboard.planos.index')}}" class="nav__link">
                        <i class="ri-signal-wifi-fill"></i>
                        visualisar meus planos de internet
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('dashboard.planos.create')}}" class="nav__link">
                        <i class="ri-wifi-fill"></i>
                        Cadastrar meus planos de internet
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('dashboard.historico-vendas')}}" class="nav__link">
                        <i class="ri-money-dollar-circle-fill"></i>
                        Historico de Vendas
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('logout.destroy')}}" class="nav__link">
                        <i class="ri-logout-box-r-fill"></i>
                        Fazer logout
                    </a>
                </li>
            </ul>
        </nav>         
    </div>
</header>
