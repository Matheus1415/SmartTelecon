<form action="{{ route('dashboard.provedor.store') }}" method="POST" id="cadastro">
    @csrf

    <div class="form__single">
        <div class="form__section userDados">
            <div class="form__wraper">
                <label for="nome">Nome:</label>
                <input 
                    type="text" 
                    id="nome" 
                    name="nome" 
                    required
                    value="{{ old('nome') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="email">E-mail:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required
                    value="{{ old('email') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="cnpj">CNPJ:</label>
                <input 
                    type="text" 
                    id="cnpj" 
                    name="cnpj" 
                    required
                    value="{{ old('cnpj') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="telefone">Telefone:</label>
                <input 
                    type="text" 
                    id="telefone" 
                    name="telefone"
                    value="{{ old('telefone') }}"
                >
            </div>
        </div>

        <div class="form__section endereco">
            <div class="form__wraper ">
                <label for="endereco">Endereço:</label>
                <input 
                    type="text" 
                    id="endereco" 
                    name="endereco"
                    value="{{ old('endereco') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="cidade">Cidade:</label>
                <input 
                    type="text" 
                    id="cidade" 
                    name="cidade"
                    value="{{ old('cidade') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="estado">Estado:</label>
                <input 
                    type="text" 
                    id="estado" 
                    name="estado"
                    value="{{ old('estado') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="cep">CEP:</label>
                <input 
                    type="text" 
                    id="cep" 
                    name="cep"
                    value="{{ old('cep') }}"
                >
            </div>
        </div>

        <div class="form__section senha">
            <div class="form__wraper">
                <label for="senha">Senha:</label>
                <input 
                    type="password" 
                    id="senha" 
                    name="senha"
                    value="{{ old('senha') }}"
                >
            </div>
            <div class="form__wraper">
                <label for="senhaConfirmada">Confirma senha:</label>
                <input 
                    type="password" 
                    id="senhaConfirmada" 
                    name="senhaConfirmada"
                    value="{{ old('senhaConfirmada') }}"
                >
            </div>
        </div>
    </div>

    <button type="submit" id="btnCadastroProvedor">Cadastrar</button>
</form>
