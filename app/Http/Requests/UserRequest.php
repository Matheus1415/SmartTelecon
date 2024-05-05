<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        // Geralmente, você definiria regras de autorização aqui, por exemplo:
        // return $this->user()->isAdmin();
        
        // Para simplificar, vamos permitir que qualquer usuário faça a solicitação
        return true;
    }

    public function rules()
    {
        $rules = [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . ($this->user ? $this->user->id : null),
            'telefone' => 'string|regex:/^\(\d{2}\)\s\d{5}\-\d{4}$/|max:15',
            'senha' => 'required|string|min:6',
        ];

        if ($this->isMethod('post')) {
            $rules['senhaConfirmada'] = 'required|string|same:senha';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'senhaConfirmada.same' => 'A senha e a confirmação de senha devem ser iguais.',
            'nome.riquired' => 'Por favor prencha o campo nome',
            'nome.max' => 'Seu nome é muito extenço pode abreviar', 
            'email.required' => 'Por favor prencha o campo email',
            'email.email' => 'Digite um email valido ex:. exemplo@gmail.com',
            'senha.required' => 'Por favor prencha o campo senha',
            'senha.regex' => `
                1.Comprimento adequado: Deve ter no mínimo 8 caracteres, preferencialmente mais.
                2.Diversidade de caracteres: Deve incluir letras maiúsculas, minúsculas, números e caracteres especiais (como !, @, #, $, etc.).
                3.Evitar informações pessoais: Não deve conter informações pessoais como nome, data de nascimento, nome de usuário, entre outros.
                4.Não usar palavras comuns: Evite usar palavras comuns encontradas em dicionários.
                5.Não use sequências óbvias: Evite sequências óbvias como "123456", "abcdef", etc.
                Aleatoriedade: As melhores senhas são aleatórias e não relacionadas a informações pessoais ou padrões fáceis de adivinhar.
            `,
            'telefone.regex' => 'Digite um telefone valido ex:. (85) 99150-7663',
            'telefone.required' => 'Por favor prencha o campo Telefone',
            'senhaConfirmada.required' => 'Por favor comfirme sua senha',
            'senhaConfirmada.regex' => 'Confira sua senha novamente',
        ];
    }
}
