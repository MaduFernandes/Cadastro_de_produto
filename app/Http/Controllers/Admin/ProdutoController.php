<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdutoPost;

use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $produtos = Produto::all();
        return view('admin.admin-home', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.cadastro-produto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutoPost $request)
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

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('produto.visualizar-produto', ['produtos' => Produto::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produtos = Produto::find($id);
        $produtos->codigo = $request->codigo;
        $produtos->nome_produto = $request->nome_produto;
        $produtos->fornecedor = $request->fornecedor;
        $produtos->quantidade = $request->quantidade;
        $produtos->descricao_produto = $request->descricao_produto;
        $produtos->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produtos = Produto::find($id)->delete();

        return redirect()->route('admin.index');
    }
}
