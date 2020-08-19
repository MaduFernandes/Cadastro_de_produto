<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Produto;

class CompraProdutoController extends Controller
{

    public function show($id)
    {
        return view('produto.produto', ['produtos' => Produto::findOrFail($id)]);
    }
}
