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


</body>
</html>
