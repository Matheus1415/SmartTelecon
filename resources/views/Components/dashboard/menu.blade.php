<header class="header" id="header">
    <div class="container">
        <nav class="nav">
            <div class="logo">
                <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="">
            <i class="ri-menu-line" id="menuDashTwo"></i>
            </div>

            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{route('dashboard.index')}}" class="nav__link">
                        <i class="ri-home-line"></i>
                        Dashbord
                    </a>
                {{-- </li>
                <li class="nav__item">
                    <a href="{{route('dashboard.provedor.create')}}" class="nav__link">
                        <i class="ri-pass-pending-fill"></i>
                        Cadastrar provedor
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{route('dashboard.provedor.index')}}" class="nav__link">
                        <i class="ri-id-card-fill"></i>
                        visualisar provedor
                    </a>
                </li> --}}
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
