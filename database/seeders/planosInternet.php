<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planos;

class PlanoInternetSeeder extends Seeder
{

    public function run()
    {
        Planos::create([
            'nome' => 'FibraTop Pro',
            'preco' => 149.99,
            'tempo_fidelidade_meses' => 24,
            'taxa_cancelamento' => 0.00,
            'tipo_conexao' => 'Fibra Óptica',
            'velocidade_download' => 1000,
            'velocidade_upload' => 500,
            'instalacao_inclusa' => 'Sim',
            'descricao_geral' => 'A melhor escolha para quem precisa de velocidade e estabilidade máximas.',
            'disponibilidade_geografica' => 'Nacional',
            'limite_dados' => null,
            'equipamentos_fornecidos' => 'Roteador Wi-Fi de alta performance',
            'upgrade_downgrade_disponivel' => 'Sim',
            'politica_garantia_velocidade' => 'Garantia de 90% da velocidade contratada durante todo o contrato.',
            'ofertas_especiais' => 'Desconto de 10% para pagamento anual',
            'opcoes_pagamento' => 'Boleto Bancário, Cartão de Crédito',
            'suporte_cliente' => 'Atendimento personalizado 24/7',
        ]);

        Planos::create([
            'nome' => 'UltraSpeed Extreme',
            'preco' => 199.99,
            'tempo_fidelidade_meses' => 12,
            'taxa_cancelamento' => 0.00,
            'tipo_conexao' => 'Cabo Coaxial',
            'velocidade_download' => 1500,
            'velocidade_upload' => 750,
            'instalacao_inclusa' => 'Sim',
            'descricao_geral' => 'Velocidade surpreendente para gamers e usuários exigentes.',
            'disponibilidade_geografica' => 'Regiões Metropolitanas',
            'limite_dados' => null,
            'equipamentos_fornecidos' => 'Modem e roteador Wi-Fi',
            'upgrade_downgrade_disponivel' => 'Sim',
            'politica_garantia_velocidade' => 'Garantimos 95% da velocidade contratada durante todo o contrato.',
            'ofertas_especiais' => 'Assinatura gratuita do serviço de streaming por 3 meses',
            'opcoes_pagamento' => 'Cartão de Crédito',
            'suporte_cliente' => 'Suporte técnico via telefone e chat',
        ]);

        Planos::create([
            'nome' => 'SpeedNet Premium',
            'preco' => 99.99,
            'tempo_fidelidade_meses' => 6,
            'taxa_cancelamento' => 50.00,
            'tipo_conexao' => 'ADSL',
            'velocidade_download' => 300,
            'velocidade_upload' => 150,
            'instalacao_inclusa' => 'Sim',
            'descricao_geral' => 'Banda larga estável e acessível para uso doméstico.',
            'disponibilidade_geografica' => 'Todo o Brasil',
            'limite_dados' => 500, // em GB
            'equipamentos_fornecidos' => 'Modem ADSL',
            'upgrade_downgrade_disponivel' => 'Sim',
            'politica_garantia_velocidade' => 'Garantimos 80% da velocidade contratada durante todo o contrato.',
            'ofertas_especiais' => 'Desconto de 15% para estudantes',
            'opcoes_pagamento' => 'Débito Automático, Transferência Bancária',
            'suporte_cliente' => 'Atendimento online durante o horário comercial',
        ]);

        Planos::create([
            'nome' => 'WiFiBasic Plus',
            'preco' => 49.99,
            'tempo_fidelidade_meses' => 1,
            'taxa_cancelamento' => 100.00,
            'tipo_conexao' => 'Wi-Fi',
            'velocidade_download' => 50,
            'velocidade_upload' => 25,
            'instalacao_inclusa' => 'Não',
            'descricao_geral' => 'Plano básico para uso ocasional e redes domésticas.',
            'disponibilidade_geografica' => 'Regiões Urbanas',
            'limite_dados' => 250, // em GB
            'equipamentos_fornecidos' => 'Nenhum',
            'upgrade_downgrade_disponivel' => 'Não',
            'politica_garantia_velocidade' => 'Garantimos 70% da velocidade contratada durante todo o contrato.',
            'ofertas_especiais' => 'Primeiro mês grátis para novos clientes',
            'opcoes_pagamento' => 'Cartão de Débito, Boleto Bancário',
            'suporte_cliente' => 'Atendimento por e-mail',
        ]);
    }
}