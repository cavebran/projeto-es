<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{url('assets/bootstrap/signin.css')}}">

    <link rel="icon" href="src/images/keyboard.png">
    <title>Login Keylogger</title>
</head>

<body class="d-flex flex-column min-vh-100 bg-dark text-center text-white">
    <form class="form-signin" method="POST" action="/login">
        @csrf
        <img class="mb-4" src="src/images/logohackoonspace.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal text-info">Por favor, faça login</h1>
        <label for="user" class="sr-only">Email</label>
        <input type="text" id="user" name="user" class="form-control bg-dark text-white border-info" placeholder="CPF" required>
        <label for="password" class="sr-only">Senha</label>
        <input type="password" id="password" name="pass" class="form-control bg-dark text-white border-info mt-3" placeholder="Senha" required>
        <input class="btn btn-lg btn-info btn-block mt-4" type="submit" value="Entrar" id="btnLogin">
        <p class="mt-5 mb-3 text-muted">Todos direitos reservados © <a href="https://hackoonspace.com/"
                class="text-info">Hackoonspace</a> <a href="https://github.com/cavebran"
                class="text-muted">@cavebran</a> e <a href="https://github.com/luccamapt"
                class="text-muted">@luccamapt</a></p>
    </form>
</body>

</html>