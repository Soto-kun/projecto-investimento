<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="https://gonts.google.com/css?family=Fredoka+One" rel="stylesheet">
</head>
<body>  
    <div class="background"></div>
    <Section id="conteudo-view" class="login">
        <h1>Investindo</h1>
        <h3>O nosso gereciador de investimento</h3>
        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
            <p>Acesse o sitema</p>
            <label>
                {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
            </label>
            <label>
                {!! Form::password('password', ['class' => 'input', 'placeholder' => 'Senha']) !!}
            </label>
            {!! Form::submit('Entrar') !!}
        {!! Form::close() !!}
    </Section>
</body>
</html>