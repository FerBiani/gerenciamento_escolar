<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Níveis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <table border=1>
        <tr>
            <th>Nome</th>
        </tr>
        @foreach($niveis as $nivel)
            <tr>
                <td>{{$nivel->nome}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <button><a href="{{url('nivel/form')}}">Novo</a></button>
</body>
</html>