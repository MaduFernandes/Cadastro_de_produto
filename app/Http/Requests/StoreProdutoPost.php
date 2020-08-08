<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo' => ['required'],
            'nome_produto' => ['required'],
            'fornecedor' => ['required'],
            'quantidade' => ['required'],
            'descricao_produto' => ['required'],
            'image' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'codigo.required' => 'Este campo é de preenchimento obrigatório',
            'nome_produto.required' => 'Este campo é de preenchimento obrigatório',
            'fornecedor.required' => 'Este campo é de preenchimento obrigatório',
            'quantidade.required' => 'Este campo é de preenchimento obrigatório',
            'descricao_produto.required' => 'Este campo é de preenchimento obrigatório',
            'image.required' => 'Este campo é de preenchimento obrigatório',
        ];
    }
}
