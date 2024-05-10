<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Visualizar Provedor</title>
</head>
<body>
    <x-dashboard.menu/>
    <section class="body">
        <x-dashboard.header-bord descricao="Visualizar Provedor" usuarioLogado="{{$usuarioLogado}}"/>
        @isset($mensagemSucesso)
            <div class="sucesso">
                {{ $mensagemSucesso }}<div class="closeNotificacao">X</div>
            </div>
        @endisset
        <div class="provedor__container">
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Senha</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuariosAdm as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->tipo }}</td>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->telefone }}</td>
                                <td>*******</td>
                                <td><a href="{{ route('dashboard.provedor.edit', ['idUsuario' => $usuario->id,'idProvedor'=>'0']) }}" id="editar">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.provedor.destroy', $usuario->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="deletar">Deletar</button>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>CNPJ</th>
                                <th>Endereço</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>CEP</th>
                                <th>Senha</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuariosProvedor as $usuario)
                                @foreach($provedores as $provedor)
                                    @if ($usuario->provedor_id === $provedor->id)
                                        <tr>
                                            <td>{{ $usuario->id }}</td>
                                            <td>{{ $usuario->tipo }}</td>
                                            <td>{{ $usuario->nome }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->telefone }}</td>
                                            <td>{{ $provedor->cnpj }}</td>
                                            <td>{{ $provedor->endereco }}</td>
                                            <td>{{ $provedor->cidade }}</td>
                                            <td>{{ $provedor->estado }}</td>
                                            <td>{{ $provedor->cep }}</td>
                                            <td>*******</td>
                                            <td>
                                                <a href="{{ route('dashboard.provedor.edit', ['idUsuario' => $usuario->id, 'idProvedor' => $provedor->id]) }}" id="editar">Editar</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('dashboard.provedor.destroy', $usuario->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" id="deletar">Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                        
                    </table>
            </div>
        </div>
    </section>
    <script src="{{asset('js/painelHome.js')}}"></script>
    <script src="{{asset('js/sucesso.js')}}"></script>

</body>
</html>
