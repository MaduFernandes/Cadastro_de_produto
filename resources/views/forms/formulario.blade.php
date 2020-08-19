@extends('layouts.template')

@section('formulario-cliente')
    <div class="container" style="margin-top: 20px">
        <div class="row ">
            <div class="col">
                @include('forms.cliente.formulario-cliente')
            </div>
            <div class="col-md-4">
                <table class="table" style="width: 42rem;">
                    <thead>
                    <tr>
                        <th scope="col">PRODUTO</th>
                        <th scope="col">SUBTOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>NOME-DO-PRODUTO</th>
                        <td>199,99</td>
                    </tr>
                    <tr>
                        <th>SUBTOTAL</th>
                        <td>199,99</td>
                    </tr>
                    <tr>
                        <th>TOTAL</th>
                        <td>199,99</td>
                    </tr>
                    </tbody>
                </table>
                    @include('forms.cliente.formulario-cartão')
            </div>
        </div>
    </div>
</div>
@endsection

