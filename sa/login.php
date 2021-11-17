<?php

include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <header class="bg-primary text-white sticky-top text-center">
        <h1>Acesse sua Conta</h1>
    </header>

<?php
//Verificar se existe variavel email ou senha
if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo '<div class="alert alert-danger" role="alert">';
        echo "Preencha seu e-mail e sua senha!";
        echo '</div>';
    }elseif(strlen($_POST['senha']) == 0) {
        echo '<div class="alert alert-danger" role="alert">';
        echo "Preencha sua senha!";
        echo '</div>';
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];

            header("Location: principal.php");

        }else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }
}

?>

<main class="shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">
    <h1 class="d-flex justify-content-center">Login</h1>
    <form action="" method="POST">
        
    <div class="form-row d-flex justify-content-center">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail">
        
        </div>
    </div>
    <div class="form-row d-flex justify-content-center">       
        <div class="form-group col-md-6">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
        
        </div>
    </div>      
    <div class="form-row d-flex justify-content-center">
            <button type="submit" class="btn btn-primary text-center ml-1">Entrar</button>
    </div>
        </div>
    </form>
    </main>

    <?php

    require_once('rodape.php');

    ?>

</body>
</html>
