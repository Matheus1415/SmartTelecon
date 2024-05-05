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
            'tipo' => 'string|max:15',
            'empresa' => 'string|max:100',
            'cnpj' => 'string|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/',
            'endereco' => 'string|max:180',
            'cidade' => 'string|max:35',
            'estado' => 'string|max:35',
            'cep' => '|string|regex:/^\d{5}\-\d{3}$/',
            'senha' => 'string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&#]{8,}$/',
            'senhaConfirmada' => 'string|same:senha',
        ];
    }

    public function messages()
    {
        return [
            'cnpj.required' => 'Por favor prencha o campo cnpj',
            'cnpj.regex' => 'Digite um cnpj valido ex:. 00.000.000/0000-00',
            'cidade.required' => 'Por favor prencha o campo Cidade',
            'estado.required' => 'Por favor prencha o campo Estado',
            'cep.required' => 'Por favor prencha o campo cep',
            'cep.regex' => 'Digite um cnpj valido ex:. 65590-000',
        ];
    }

}
