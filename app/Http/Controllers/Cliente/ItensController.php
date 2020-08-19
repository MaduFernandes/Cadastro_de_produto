<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class ItensController extends Controller
{
    public function produtos()
    {
        $produtos = Produto::all();
        return view('home.home', compact('produtos'));
    }

    public function show($id)
    {
        return view('produto.visualizar-produto', ['produtos' => Produto::findOrFail($id)]);
    }
}
