<?php


namespace App\Http\Services;

use App\Models\Produto;
use App\Http\Requests\ProdutoFormResquest;

class AdminServices
{

    public static function salvarProduto(ProdutoFormResquest $request)
    {
        $produtos = new Produto;
        $produtos->codigo = $request->codigo;
        $produtos->nome_produto = $request->nome_produto;
        $produtos->fornecedor = $request->fornecedor;
        $produtos->quantidade = $request->quantidade;
        $produtos->descricao_produto = $request->descricao_produto;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/produto', $filename);
            $produtos->image = $filename;
        } else {
            return $request;
            $produtos->image = '';
        }

        $produtos->save();

        return true;
    }

    public static function produtoUpdate($request, $id)
    {
        $produtos = Produto::find($id);
        if ($produtos) {
            $produtos->nome_produto = $request->nome_produto;
            $produtos->fornecedor = $request->fornecedor;
            $produtos->quantidade = $request->quantidade;
            $produtos->descricao_produto = $request->descricao_produto;
            $produtos->save();
        }
    }

    public static function deletarProdutos($id)
    {
        $produtos = Produto::find($id);
        if ($produtos) {
            $produtos->delete($id);
        }
    }
}
