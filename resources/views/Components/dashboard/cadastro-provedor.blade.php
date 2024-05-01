
<form action="" method="POST" id="cadastro">
    @csrf

    <div class="form__single">
        <div class="form__section userDados">
            <div class="form__wraper">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form__wraper">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form__wraper">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj" required>
            </div>
            <div class="form__wraper">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone">
            </div>
        </div>

        <div class="form__section endereco">
            <div class="form__wraper ">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
            </div>
            <div class="form__wraper">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade">
            </div>
            <div class="form__wraper">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado">
            </div>
            <div class="form__wraper">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep">
            </div>
        </div>

        <div class="form__section senha">
            <div class="form__wraper">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" >
            </div>
            <div class="form__wraper">
                <label for="senhaComfirme">Confirma senha:</label>
                <input type="password" id="senhaComfirme" name="senhaComfirme" >
            </div>
        </div>
    </div>

    <button type="submit" id="btnCadastroProvedor">Cadastrar</button>
</form>
