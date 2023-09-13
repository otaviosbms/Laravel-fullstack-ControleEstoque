<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaESaidaFormRequest extends FormRequest
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
            'quantidade' => ['required', 'min_digits:1']
        ];
    }

    public function messages()
    {
        return [
            'quantidade.required' => 'O campo quantidade é obrigatório',
            'quantidade.min_digits' => 'Digite um valor inteiro',
        ];
    }

}   
