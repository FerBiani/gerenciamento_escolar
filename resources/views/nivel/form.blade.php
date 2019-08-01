<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Criação de Níveis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="POST" action="{{url(isset($nivel) ? 'nivel/'.$nivel->id : 'nivel/')}}">

        @csrf

        @if(isset($nivel))
            @method('PUT')
        @endif

        <label for="nome">Nome</label>
        <input value="{{isset($nivel) ? $nivel->nome : ''}}" type="text" name="nome" id="nome"><br>

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>