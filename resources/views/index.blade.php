<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meu Título</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Usuários ativos</h2>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nascimento</th>
            <th>Nível</th>
            <th colspan="2">Ações</th>
        </tr>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->data_nascimento}}</td>
                <td>{{$usuario->nivel->nome}}</td>
                <td><a href="{{url($usuario->id.'/edit')}}"><button>Editar</button></a></td>
                <td>
                    <form method="POST" action="{{url($usuario->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <h2>Usuários inativos</h2>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nascimento</th>
            <th>Nível</th>
            <th>Ações</th>
        </tr>
        @foreach($usuariosInativos as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->data_nascimento}}</td>
                <td>{{$usuario->nivel->nome}}</td>
                <td>
                    <form method="POST" action="{{url('restore/'.$usuario->id)}}">
                        @method('put')
                        @csrf
                        <button type="submit">Restaurar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <button><a href="{{url('form')}}">Novo</a></button>
    <button><a href="{{url('/nivel')}}">Níveis</a></button>
</body>
</html>