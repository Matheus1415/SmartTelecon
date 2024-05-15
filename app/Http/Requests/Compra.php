<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Compra extends FormRequest
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
            'referencia_user' => 'string',
            'idPlanosCompra' => 'string',
            'emailComprador' => 'email|string|riquered',
            'nomeComprador' => 'riquered|string|regex:/^[a-zA-Z ]*$/',
            'numeroCartao' => 'riquered|string|regex:/^[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}$ /',
            'valor' => 'decimal',

        ];
    }
}
