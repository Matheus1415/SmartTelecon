<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvedorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:50',
            'email' => 'required|email|max:120',
            'cnpj' => 'string|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/gm',
            'telefone' => 'string|regex:/^\([19]{2}\)\ [1-9]{5}\-[1-9]{4}$/|max:15',
            'endereco' => 'string|max:180',
            'cidade' => 'string|max:35',
            'estado' => 'string|max:35',
            'cep' => 'string|regex:/^[1-9]{5}\-[1-9]{3}$/',
            'senha' => 'string|regex:^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&#]{8,}$',
            'senhaComfirmada' => 'string|regex:^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&#]{8,}$',
        ];
    }
}

