<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row align-middle">
            <div class="col-sm-12 col-md-10 col-lg-5 mx-auto">
                <h1>Formulário de Login</h1>
                    <form class="p-4 border rounded-3 bg-light" action="./bd/validarLogin.php" method="post">
                        <div>
                        <label for="" >Login</label>
                        <input class="form-control" type="text" name="login" id="inputLogin" placeholder="informe seu login">
                        </div>

                        <div>
                        <label for="">Senha</label>
                        <input class="form-control" type="password" name="senha" id="">
                        </div>

                        <input type="submit" class=" w-100 btn btn-success mb-3" value="Entrar">
                        <a class="w-100 btn btn-link" href=".">tela inicial</a>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
