<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'products';

    protected $fillable = ['nome_produto', 'fornecedor', 'descricao_produto', 'quantidade', 'codigo', 'image'];
}
