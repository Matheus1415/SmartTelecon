<div class="provedor__container">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>CEP</th>
                    <th>Senha</th>
                    <th>Senha Confirmada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($provedores as $provedor)
                <tr>
                    <td>{{ $provedor->nome }}</td>
                    <td>{{ $provedor->email }}</td>
                    <td>{{ $provedor->cnpj }}</td>
                    <td>{{ $provedor->telefone }}</td>
                    <td>{{ $provedor->endereco }}</td>
                    <td>{{ $provedor->cidade }}</td>
                    <td>{{ $provedor->estado }}</td>
                    <td>{{ $provedor->cep }}</td>
                    <td>*********</td>
                    <td>*********</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
