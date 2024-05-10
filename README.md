# Projeto SmartTelecon

O projeto SmartTelecon é um sistema web desenvolvido para uma empresa fictícia de consultoria em telecomunicações. O objetivo principal é fornecer uma plataforma para gerenciamento de planos de internet, autenticação de usuários e administração do sistema.

## Requisitos

- Desenvolver um site apresentativo.
- Implementar um sistema de autenticação de usuários com diferentes funções: Usuários e Administradores.
- Permitir que os usuários cadastrem, editem e excluam planos de internet.
- Permitir que administradores gerenciem usuários e planos, além de ter acesso total à plataforma.

## Páginas

### Página inicial

A Landing Page é uma página inicial que apresenta informações da empresa de consultoria em telecomunicações. Ela deve conter informações sobre os serviços oferecidos, missão, visão, valores, etc.

### Página de Login

A Página de Login é um formulário para os usuários acessarem o sistema.

### Página de Cadastro

A Página de Cadastro é um formulário para novos usuários se registrarem. Os campos necessários.

### Página do Usuário

A Página do Usuário permite a visualização dos planos de internet cadastrados pelo usuário. Ela inclui funcionalidades para adicionar, editar e excluir planos.

### Página do Administrador

A Página do Administrador é de acesso exclusivo para usuários do tipo "administrador". Ela inclui um dashboard com visão geral do sistema e funcionalidades para gerenciamento de usuários e planos.

## Tecnologias Utilizadas

- PHP
- Laravel
- MySQL
- JavaScript
- HTML
- CSS

## Instalação

1. Clone o repositório do projeto:

clone do git [https://github.com/Matheus1415/SmartTelecon]

2. Acesse o diretório do projeto:
SmartTelecon

3. Instale as dependências do projeto utilizando o Composer:

```bash
composer install
```
4.Copie o arquivo .env.examplepara .enve edite com as informações do banco de dados:
festa

5.Copiar código
```bash
cp .env.example .env
```
6.Configure o arquivo .env com as informações do banco de dados.

7.Execute as migrações do banco de dados:
festa
```bash
php artisan migrate
```

8.Inicie o servidor local:
```bash
php artisan serve
```




