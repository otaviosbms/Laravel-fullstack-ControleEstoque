<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'min:3'],
            // 'quantidade' => ['required'],
            'validade' => ['required'],
            'valor' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de no minimo :min caracteres',
            'quantidade.required' => 'O campo quantidade é obrigatório',
            'validade.required' => 'O campo validade é obrigatório',
            'valor.required' => 'O campo valor é obrigatório'
        ];
    }
}
