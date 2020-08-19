@extends('layouts.template')

@section('admin')
    <div class="container">
        <div class="row" id="row">
            <a type="button" href="{{ route('admin.create') }}" class="btn btn-success" id="btn-criar">
                {{_('Criar')}}
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">{{_('Produto')}}</th>
                        <th scope="col">{{_('Quantidade')}}</th>
                        <th scope="col">{{_('Fornecedor')}}</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <th>
                                <img src="{{ asset("/img/produto/$produto->image") }}" class="card-img-top" id="img" alt="{{$produto->nome_produto}}">
                            </th>
                            <th><p>{{$produto->nome_produto}}</p></th>
                            <td>{{$produto->quantidade}}</td>
                            <td>{{$produto->fornecedor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
