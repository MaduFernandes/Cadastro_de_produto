<!DOCTYPE html>
<html lang="pt-br">

@include('layouts.head')

<body>
    <header>
        @include('layouts.navbar')
    </header>

<div class="container">
    <div class="row" id="menu">
        <div class="col" id="col">
            <a href="" class="link" id="link">{{_('CAMISETAS')}}</a>
        </div>
        <div class="col" id="col">
            <a href="" class="link" id="link">{{_('CALÇAS')}}</a>
        </div>
        <div class="col" id="col">
            <a href="" class="link" id="link">{{_('CALÇADOS')}}</a>
        </div>
        <div class="col" id="col">
            <a href="" class="link" id="link">{{_('MOLETOM')}}</a>
        </div>
        <div class="col" id="col">
            <a href="" class="link" id="link">{{_('ACESSÓRIOS')}}</a>
        </div>
    </div>
    <section class="carrosel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('/carrosel/salvatore.jpg')}}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('/carrosel/slide.jpg')}}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('/carrosel/Tenis_Adiease_Preto_BY4028_01_standard.jpg')}}">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    </div>

</body>
</html>
