@extends('layouts.template')

@section('lista-produtos')
<div class="container">
    <div class="row flex-row" style="justify-content:space-between; margin-top: 20px">
        @foreach($produtos as $produto)
            <div class="card-group" >
                <div class="card" style="width: 16rem;">
                    <a href="{{ route('produto.show', $produto->id) }}">
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
