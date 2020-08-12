@extends('layouts.app')

<style>
    td{
        font-weight: bold;
        color: #757575;
    }
</style>

@section('container')
    <div class="container" style="margin-top: 20px">
        <div class="row ">
            <div class="col">
                <form method="GET">
                    @csrf
                    <div class="card">
                        <img src="{{ asset("/img/produto/$produtos->image") }}" class="card-img-top" alt="{{$produtos->nome_produto}}">
                    </div>
                </form>
            </div>
            <div class="col -md-6">
                <h1 class="card-title" style="color:#757575">{{$produtos->nome_produto}}</h1>
                <hr style="margin-left: inherit; width: 100px; background: #512DA8; height: 2px;">
                <p class="card-text">{{$produtos->descricao_produto}}</p>
                <input type="number" id="qtd" min="1" max="99" value="1" class="form-control form-control-sm" style="width: 70px;">
                <a href="{{ route('carrinho.show', $produtos->id) }}" type="submit" class="btn btn-dark" style="color: white; background-color: #673AB7; border: #673AB7; margin-top: 10px">{{_('ADICIONAR AO CARRINHO')}}</a>
            </div>
        </div>
        <table class="table">
            <p style="font-weight: bold; color: #757575">{{_('INFORMAÇÕES ADICIONAIS')}}</p>
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

