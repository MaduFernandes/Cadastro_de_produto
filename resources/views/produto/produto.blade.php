@extends('layouts.template')

@section('carrinho')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="table-responsive-sm">
                    <form method="GET" action="">
                        @csrf
                        <table class="table" id="table">
                            <thead>
                            <tr>
                                <th scope="col">PRODUTO</th>
                                <th scope="col">PREÇO</th>
                                <th scope="col">QUANTIDADE</th>
                                <th scope="col">SUBTOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                    <img src="{{ asset("/img/produto/$produtos->image") }}" id="img">
                                    <p>{{$produtos->nome_produto}}</p>
                                </th>
                                <td>R$ 156,99</td>
                                <td>{{$produtos->quantidade}}</td>
                                <td>R$ 156,99</td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
                <div class="col-md-4">
                    <P>TOTAL NO CARRINHO</P>
                    <hr>
                    <label>{{_('Subtotal')}}</label>
                    <p class="text">R$ 156,99</p>
                    <hr>
                    <label>{{_('Entrega')}}</label>
                    <p class="text">Grátis</p>
                    <hr>
                    <label>{{_('Total')}}</label>
                    <p class="text">R$ 156,99</p>
                    <a href="{{ route('cadastro') }}" type="submit" class="btn btn-dark" id="btn-compra">{{_('FECHAR COMPRA')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

