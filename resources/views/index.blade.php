<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meu Título</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data Nascimento</th>
            <th>Nível</th>
        </tr>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->data_nascimento}}</td>
                <td>{{$usuario->nivel->nome}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>