<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserGlobalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:6',
            'senhaConfirmada' => 'required|string|same:senha',
            'telefone' => 'nullable|string|regex:/^\(\d{2}\)\s\d{5}\-\d{4}$/|max:15',
        ];

        if ($this->tipo === 'provedor') {
            $rules += [
                'empresa' => 'required|string|max:100',
                'cnpj' => 'required|string|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/',
                'endereco' => 'required|string|max:180',
                'cidade' => 'required|string|max:35',
                'estado' => 'required|string|max:35',
                'cep' => 'required|string|regex:/^\d{5}\-\d{3}$/',
            ];
        } 

        return $rules;
    }

    public function messages()
    {
        $messagem = [
            'senhaConfirmada.same' => 'A senha e a confirmação de senha devem ser iguais.',
            'nome.required' => 'Por favor preencha o campo nome.',
            'nome.max' => 'Seu nome é muito extenso, por favor, abrevie.',
            'email.required' => 'Por favor preencha o campo email.',
            'email.email' => 'Digite um email válido, ex:. exemplo@gmail.com.',
            'email.unique' => 'Este email já está em uso.',
            'senha.required' => 'Por favor preencha o campo senha.',
            'senha.min' => 'A senha deve ter no mínimo 8 caracteres.',
        ];

        if ($this->tipo === 'provedor') {
            $messagem += [                
                'telefone.regex' => 'Digite um telefone válido, ex:. (85) 99150-7663.',
                'telefone.max' => 'O telefone não pode ter mais de 15 caracteres.',
                'empresa.required' => 'Por favor preencha o campo empresa.',
                'empresa.max' => 'O nome da empresa não pode ter mais de 100 caracteres.',
                'cnpj.required' => 'Por favor preencha o campo CNPJ.',
                'cnpj.regex' => 'Digite um CNPJ válido, ex:. 00.000.000/0000-00.',
                'endereco.required' => 'Por favor preencha o campo endereço.',
                'endereco.max' => 'O endereço não pode ter mais de 180 caracteres.',
                'cidade.required' => 'Por favor preencha o campo cidade.',
                'cidade.max' => 'A cidade não pode ter mais de 35 caracteres.',
                'estado.required' => 'Por favor preencha o campo estado.',
                'estado.max' => 'O estado não pode ter mais de 35 caracteres.',
                'cep.required' => 'Por favor preencha o campo CEP.',
                'cep.regex' => 'Digite um CEP válido, ex:. 65590-000.',
            ];
        }

        return $messagem;
    }
}
