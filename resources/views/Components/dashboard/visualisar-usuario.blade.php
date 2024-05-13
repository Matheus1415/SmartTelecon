<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Visualizar Usuários</title>
</head>
<body>
    <x-dashboard.menu/>
    <section class="body">
        <x-dashboard.header-bord descricao="Visualizar Usuários" usuarioLogado="{{$usuarioLogado}}"/>
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
                            <th>Tipo</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Senha</th>
                            <th>CNPJ</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>CEP</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->tipo }}</td>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->telefone }}</td>
                                <td>*******</td>
                                @if ($usuario->tipo ==='provedor')
                                    <td>{{ $usuario->cnpj }}</td>
                                    <td>{{ $usuario->endereco }}</td>
                                    <td>{{ $usuario->estado }}</td>
                                    <td>{{ $usuario->cep }}</td>
                                    <td>{{ $usuario->cidade }}</td>
                                @else
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                @endif
                                <td>
                                    <a href="{{ route('dashboard.usuario.edit',$usuario->id) }}" id="editar">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.usuario.destroy', $usuario->id) }}" method="POST">
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
        </div>
    </section>
    <script src="{{asset('js/painelHome.js')}}"></script>
    <script src="{{asset('js/sucesso.js')}}"></script>
</body>
</html>
