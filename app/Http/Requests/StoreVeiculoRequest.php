<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVeiculoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'marca_id' => 'required|integer|exists:marcas,id',
            'modelo' => 'required|string|min:2',
            'ano' => 'required|integer|min:1990',
            'preco' => 'required|numeric|min:1000',
            'status' => 'required|string|in:disponivel,reservado,vendido',
        ];
    }
}