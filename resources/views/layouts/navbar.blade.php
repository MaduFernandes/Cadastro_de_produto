<a class="nav-link" id="nav-link" href="{{ route('welcome') }}">
    <img src="{{url('/logo/Marys.png')}}" id="logo" alt="marys">
</a>
<nav id="navbar">
    <ul id="menu-principal">
        @guest
        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="{{ route('produtos') }}">{{_('Loja')}}</a>
        </li>

        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="{{ route('login') }}">{{_('Minha Conta')}}</a>
        </li>

        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="">{{_('Carrinho')}}
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>

        <li id="menu-opcoes">
            <a class="btn btn-success" id="btn-contato" href="">{{_('Contato')}}</a>
        </li>
        @endguest

        @auth
        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link">Olá {{Auth::user()->name}}</a>
        </li>

        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="{{route('logout')}}">{{_('Sair')}}</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
        </li>
        @endauth

    </ul>
</nav>

