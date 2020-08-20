<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\AdminServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoFormResquest;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.admin-home', compact('produtos'));
    }

    public function create()
    {
        return view('admin.admin-cadastro');
    }

    public function store(ProdutoFormResquest $request)
    {
        AdminServices::salvarProduto($request);

        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        return view('admin.admin-produto', ['produtos' => Produto::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('admin.admin-edit', ['produtos' => Produto::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        AdminServices::produtoUpdate($request, $id);

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        !AdminServices::deletarProdutos($id);

        return redirect()->route('admin.index');
    }
}
