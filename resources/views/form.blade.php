<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="POST" action="{{url('/')}}">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email"><br>

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="text" name="data_nascimento" id="data_nascimento"><br>

        <select name="nivel_id">
            @foreach($niveis as $nivel)
                <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>