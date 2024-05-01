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
            'cnpj' => 'required|string|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/',
            'telefone' => 'required|string|regex:/^\(\d{2}\)\s\d{5}\-\d{4}$/|max:15',
            'endereco' => 'required|string|max:180',
            'cidade' => 'required|string|max:35',
            'estado' => 'required|string|max:35',
            'cep' => 'required|string|regex:/^\d{5}\-\d{3}$/',
            'senha' => 'required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&#]{8,}$/',
            'senhaConfirmada' => 'required|string|same:senha', // Verifica se é igual à senha
        ];
    }
}
