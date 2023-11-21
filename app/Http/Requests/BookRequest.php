<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'id_user'=>'required',
            'pages'=>'required|numeric',
            'price'=>'required|numeric'
        ];
    }

    public function messages(): array
{
    return [
        'title.required' => 'Por gentileza, escreva o título!',
        'id_user.required' => 'Por gentileza, escolha um autor!',
        'pages.required' => 'Por gentileza, digite o número de páginas!',
        'price.required' => 'Por gentileza, digite o preço!'
    ];
}
}
