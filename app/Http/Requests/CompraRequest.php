<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompraRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'referencia_user' => 'required|string',
            'emailComprador' => 'required|email',
            'nomeComprador' => 'required|string|regex:/^[a-zA-Z ]*$/',
            'numeroCartao' => 'required|string|regex:/^[0-9]*$/|size:16', 
            'vencimentoCartao' => 'required|regex:/^[0-9]{2}\/[0-9]{2}$/|size:5',
            'codigoCartao' => 'required|string|regex:/^[0-9]*$/|size:3', 
        ];
    }

    /**
     * Obtenha mensagens de erro personalizadas para as regras de validação definidas acima.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'referencia_user.required' => 'A referência do usuário é obrigatória.',
            'emailComprador.required' => 'O email do comprador é obrigatório.',
            'emailComprador.email' => 'O email do comprador deve ser um endereço de email válido.',
            'nomeComprador.required' => 'O nome do comprador é obrigatório.',
            'nomeComprador.regex' => 'O nome do comprador deve conter apenas letras e espaços.',
            'numeroCartao.required' => 'O número do cartão é obrigatório.',
            'numeroCartao.regex' => 'O número do cartão deve conter apenas números.',
            'numeroCartao.size' => 'O número do cartão deve ter 16 dígitos.',
            'vencimentoCartao.required' => 'A data de vencimento do cartão é obrigatória.',
            'vencimentoCartao.date_format' => 'A data de vencimento do cartão deve estar no formato m/Y (mês/ano).',
            'vencimentoCartao.after_or_equal' => 'A data de vencimento do cartão deve ser igual ou posterior à data atual.',
            'codigoCartao.required' => 'O código do cartão é obrigatório.',
            'codigoCartao.regex' => 'O código do cartão deve conter apenas números.',
            'codigoCartao.size' => 'O código do cartão deve ter 3 dígitos.',
        ];
    }
}
