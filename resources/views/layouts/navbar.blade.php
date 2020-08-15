<img src="{{url('/logo/Marys.png')}}" id="logo" alt="marys">
<nav class="navbar" id="navbar">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" id="nav-link" href="{{ route('produtos') }}">
            <li id="menu-opcoes">
                {{_('Loja')}}
            </li>
        </a>
    </ul>
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" id="nav-link" href="">
                <li id="menu-opcoes">
                    {{_('Minha Conta')}}
                </li>
            </a>
    </ul>
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" id="nav-link" href="">
            <li id="menu-opcoes">
                {{_('Carrinho')}}
                <i class="fas fa-shopping-cart"></i>
            </li>
        </a>
    </ul>
</nav>
<a class="btn btn-success" id="btn-contato" href="">{{_('Contato')}}</a>
