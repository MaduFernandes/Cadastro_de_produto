<!DOCTYPE html>
<html lang="pt-br">

@include('layouts.head')

<body>
    <header>
        @include('layouts.navbar')
    </header>

@yield('lista-produtos')

@yield('visualizar-produto')

@yield('carrinho')

@yield('formulario-cliente')

@yield('login')

@yield('admin')

@yield('admin-cadastro')

@yield('admin-produto')

@yield('admin-edit')



</body>
</html>
