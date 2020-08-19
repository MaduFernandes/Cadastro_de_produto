@extends('layouts.template')

@section('lista-produtos')
<div class="container">
    <div class="row flex-row" id="lista-produtos">
        @foreach($produtos as $produto)
            <div class="card-group" >
                <div class="card" style="width: 16rem;">
                    <a href="{{ route('produtos.show', $produto->id) }}">
                        <img class="card-img-top" src="{{ asset("/img/produto/$produto->image") }}" alt="{{$produto->nome_produto}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->nome_produto}}</h5>
                    </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
