<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:50',
            'preco' => 'required|numeric',
            'tempo_fidelidade_meses' => 'required|integer',
            'taxa_cancelamento' => 'nullable|numeric',
            'tipo_conexao' => 'required|string|max:255',
            'velocidade_download' => 'required|integer',
            'velocidade_upload' => 'required|integer',
            'instalacao_inclusa' => 'required|boolean',
            'descricao_geral' => 'nullable|string',
            'disponibilidade_geografica' => 'nullable|string|max:255',
            'limite_dados' => 'nullable|integer',
            'equipamentos_fornecidos' => 'nullable|string|max:255',
            'upgrade_downgrade_disponivel' => 'required|boolean',
            'politica_garantia_velocidade' => 'nullable|string',
            'ofertas_especiais' => 'nullable|string',
            'opcoes_pagamento' => 'nullable|string',
            'suporte_cliente' => 'nullable|string',
        ];
    }
    

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um valor numérico.',
            'tempo_fidelidade_meses.required' => 'O campo tempo de fidelidade é obrigatório.',
            'tempo_fidelidade_meses.integer' => 'O campo tempo de fidelidade deve ser um número inteiro.',
            'taxa_cancelamento.numeric' => 'O campo taxa de cancelamento deve ser um valor numérico.',
            'tipo_conexao.required' => 'O campo tipo de conexão é obrigatório.',
            'tipo_conexao.string' => 'O campo tipo de conexão deve ser uma string.',
            'tipo_conexao.max' => 'O campo tipo de conexão não pode ter mais de :max caracteres.',
            'velocidade_download.required' => 'O campo velocidade de download é obrigatório.',
            'velocidade_download.integer' => 'O campo velocidade de download deve ser um número inteiro.',
            'velocidade_upload.required' => 'O campo velocidade de upload é obrigatório.',
            'velocidade_upload.integer' => 'O campo velocidade de upload deve ser um número inteiro.',
            'instalacao_inclusa.required' => 'O campo instalação inclusa é obrigatório.',
            'instalacao_inclusa.boolean' => 'O campo instalação inclusa deve ser verdadeiro ou falso.',
            'descricao_geral.string' => 'O campo descrição geral deve ser uma string.',
            'disponibilidade_geografica.string' => 'O campo disponibilidade geográfica deve ser uma string.',
            'disponibilidade_geografica.max' => 'O campo disponibilidade geográfica não pode ter mais de :max caracteres.',
            'limite_dados.integer' => 'O campo limite de dados deve ser um número inteiro.',
            'equipamentos_fornecidos.string' => 'O campo equipamentos fornecidos deve ser uma string.',
            'equipamentos_fornecidos.max' => 'O campo equipamentos fornecidos não pode ter mais de :max caracteres.',
            'upgrade_downgrade_disponivel.required' => 'O campo upgrade/downgrade disponível é obrigatório.',
            'upgrade_downgrade_disponivel.boolean' => 'O campo upgrade/downgrade disponível deve ser verdadeiro ou falso.',
            'politica_garantia_velocidade.string' => 'O campo política de garantia de velocidade deve ser uma string.',
            'ofertas_especiais.string' => 'O campo ofertas especiais deve ser uma string.',
            'opcoes_pagamento.string' => 'O campo opções de pagamento deve ser uma string.',
            'suporte_cliente.string' => 'O campo suporte ao cliente deve ser uma string.',
        ];
    }    

}
