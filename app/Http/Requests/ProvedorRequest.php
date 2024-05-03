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
            'nome' => 'required|string|max:100',
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

    public function messages()
    {
        return [
            'nome.riquired' => 'Por favor prencha o campo nome',
            'nome.max' => 'Seu nome é muito extenço pode abreviar', 
            'email.required' => 'Por favor prencha o campo email',
            'email.email' => 'Digite um email valido ex:. exemplo@gmail.com',
            'cnpj.required' => 'Por favor prencha o campo cnpj',
            'cnpj.regex' => 'Digite um cnpj valido ex:. 00.000.000/0000-00',
            'telefone.regex' => 'Digite um telefone valido ex:. (85) 99150-7663',
            'telefone.required' => 'Por favor prencha o campo Telefone',
            'cidade.required' => 'Por favor prencha o campo Cidade',
            'estado.required' => 'Por favor prencha o campo Estado',
            'cep.required' => 'Por favor prencha o campo cep',
            'cep.regex' => 'Digite um cnpj valido ex:. 65590-000',
            'senha.required' => 'Por favor prencha o campo senha',
            'senha.regex' => `
                1.Comprimento adequado: Deve ter no mínimo 8 caracteres, preferencialmente mais.
                2.Diversidade de caracteres: Deve incluir letras maiúsculas, minúsculas, números e caracteres especiais (como !, @, #, $, etc.).
                3.Evitar informações pessoais: Não deve conter informações pessoais como nome, data de nascimento, nome de usuário, entre outros.
                4.Não usar palavras comuns: Evite usar palavras comuns encontradas em dicionários.
                5.Não use sequências óbvias: Evite sequências óbvias como "123456", "abcdef", etc.
                Aleatoriedade: As melhores senhas são aleatórias e não relacionadas a informações pessoais ou padrões fáceis de adivinhar.
            `,
            'senhaConfirmada.required' => 'Por favor comfirme sua senha',
            'senhaConfirmada.regex' => 'Confira sua senha novamente',
        ];
    }

}
