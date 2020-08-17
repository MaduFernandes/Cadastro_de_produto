<a class="nav-link" id="nav-link" href="{{ route('welcome') }}">
    <img src="{{url('/logo/Marys.png')}}" id="logo" alt="marys">
</a>
<nav id="navbar">
    <ul id="menu-principal">
        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="{{ route('produtos') }}">{{_('Loja')}}</a>
        </li>
        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="">{{_('Minha Conta')}}</a>
        </li>
        <li id="menu-opcoes">
            <a class="nav-link" id="nav-link" href="">{{_('Carrinho')}}
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>
        <li id="men-opcoes">
            <a class="btn btn-success" id="btn-contato" href="">{{_('Contato')}}</a>

        </li>
    </ul>
</nav>

