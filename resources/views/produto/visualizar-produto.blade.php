@extends('layouts.template')

@section('visualizar-produto')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="GET">
                    @csrf
                    <div class="card">
                        <img src="{{ asset("/img/produto/$produtos->image") }}" class="card-img-top" alt="{{$produtos->nome_produto}}">
                    </div>
                </form>
            </div>
            <div class="col -md-6">
                <h1 class="card-title" id="title">{{$produtos->nome_produto}}</h1>
                <p class="card-text">{{$produtos->descricao_produto}}</p>
                <input type="number" id="qtd" min="1" max="99" value="1" class="form-control form-control-sm">
                <a href="{{ route('carrinho.show', $produtos->id) }}" type="submit" class="btn btn-dark" id="btn-carrinho">{{_('ADICIONAR AO CARRINHO')}}</a>
            </div>
        </div>
        <table class="table">
            <p id="title">{{_('INFORMAÇÕES ADICIONAIS')}}</p>
            <tbody>
            <tr>
                <td>{{_('FORNECEDOR')}}</td>
                <td>{{$produtos->fornecedor}}</td>
            </tr>
            <tr>
                <td>{{_('QUANTIDADE')}}</td>
                <td>{{$produtos->quantidade}}</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

