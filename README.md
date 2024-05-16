# Desafio da SmartTelecon

## 📝 Sobre o Projeto

O desafio proposto é desenvolver um sistema web usando PHP, Laravel, MySQL, JavaScript, HTML e CSS para uma empresa fictícia de consultoria em telecomunicações. O objetivo é altomatizar o gerenciamento de usuario e planso de internet.

# Pagias Principais

### **Página Inicial:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/home.png)
- exibir o cta na pagina inicial
- Sesão de conhecimento da empresa
- exbir os planos de internet
- exibir o footer
### **Página de cadastro:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/cadastro-planos-internet.png)
- cadastrar o usuario
### **Página de login:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/login.png)
- Logar o usuario
### **Página de Pagamento:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/pagamento.png)
- Validar cartão
- Efetuar o Pagamento
### **Página de cadastro de usuario:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/cadastro.png)
- Cadastrar usuario
### **Página de visualizar de usuario:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/visualisar-usuario.png)
- Visualisar todos os usuarios
- Editar os usuario
- Deletar usuario
### **Página de cadastro de planos de internet:** 
![Foto da Página Inicial](https://github.com/Matheus1415/SmartTelecon/blob/main/readme%20Foto/cadastro-planos-internet.png)
- cadastrar planos de internet


## 🚀 Como Usar

### Instalação
1. Instalar o Composer:
Se você ainda não tiver o Composer instalado, pode baixá-lo e instalá-lo seguindo as instruções em [Composer](https://getcomposer.org/)

2. Clone o repositório:

    ```bash
    git clone https://github.com/Matheus1415/SmartTelecon
    ```

3. Instale as dependências:

    ```bash
    composer install
    ```
4. Entre na pasta:

    ```bash
    cd SmartTelecon
    ```
    
5. Configure sua conexão com banco de dados no arquivo .env:

    ```bash
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=desafioSmart
            DB_USERNAME=root
            DB_PASSWORD=
    ```

6. Inicie as migration com o comando:

    ```bash
    php artisan make:migration
    ```

7. Inicie a seeders de usuario com o comando:

    ```bash
    php artisan db:seed --class=Usuario  
    ```
8. Inicie a seeders de plano de internet com o comando:

    ```bash
    php artisan db:seed --class=PlanosInternet
    ```
8. Inicie o servidor:

    ```bash
    php artisan serve
    ```


### 🛠️ Tecnologias Utilizadas

- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [laravel](https://laravel.com/)


