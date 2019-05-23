<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Login | Recursos+ </title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    </head>
    <body>

      <div class="fundo"></div>

      <section id="conteudo-view" class="login">
        <h1>Recursos</h1>
        <h3>O nosso gerenciador de reservas</h3>

        {!! Form::open(['route'=> 'user.login', 'method'=> 'post']) !!}

        <p>Acesse o sistema</p>

        <label>
        {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuário']) !!}
        </label>

        <label>
        {!! Form::password('password', ['placeholder' => "senha"])!!}
        </label>

        {!! Form::submit('Entrar') !!}

        
        {!! Form::close() !!}
        
    
      </section>

    <body>
</html>
        