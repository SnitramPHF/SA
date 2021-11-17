<?php

include('protecao.php');

?>

<?php

require_once('funcoes.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <header class="bg-primary text-white sticky-top text-center">
        <h1>Preencha os Dados:</h1>
    </header>

    <main class="shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">
    <?php
    if (isset($_POST['submit']))
        require_once "resultado_cnpj.php";
    ?>
 

    <?php    

    if (isset($_GET['submit'])) {
        $cnpj = $_GET['cnpj'];
        $url = "https://www.receitaws.com.br/v1/cnpj/$cnpj";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($ch));
        foreach ($resultado as $res=>$index) {
            $$res = $index;
           
        }
        curl_close($ch);
    }
    
    ?>

    <h1>Busca por CNPJ:</h1>
    <form action="#" method="get">
        <label for="">Digite o CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj">
        <input type="submit" name="submit" value="Enviar">
    </form>

    <form action="#" method="get">

    <div class="form-row">
    <label> CNPJ </label><input type="text" class="form-control" id="cnpj" value="<?= isset($cnpj)?$cnpj:'' ?>">
    </div>
    <div class="form-row">
    <label> Matriz/Filial </label><input type="text" class="form-control" id="tipo" value="<?= isset($tipo)?$tipo:'' ?>">
    </div>
    <div class="form-row">
    <label> Data de Abertura </label><input type="text" class="form-control" id="abertura" value="<?= isset($abertura)?$abertura:'' ?>">
    </div>
    <div class="form-row">
    <label> Logradouro </label><input type="text" class="form-control" id="logradouro" value="<?= isset($logradouro)?$logradouro:'' ?>"> 
    </div>
    <div class="form-row">
    <label> Número </label><input type="text" class="form-control" id="numero" value="<?= isset($numero)?$numero:'' ?>"> 
    </div>
    <div class="form-row">
    <label> Natureza Jurídica </label><input type="text" class="form-control" id="natureza_juridica" value="<?= isset($natureza_juridica)?$natureza_juridica:'' ?>">
    </div>
    <div class="form-row">
    <label> Nome Fantasia </label><input type="text" class="form-control" id="fantasia" value="<?= isset($fantasia)?$fantasia:'' ?>"> 
    </div>
    <div class="form-row">
    <label> Razão Social </label><input type="text" class="form-control" id="nome" value="<?= isset($nome)?$nome:'' ?>"> 
    </div>
    <div class="form-row">
    <label> Status </label><input type="text" class="form-control" id="status" value="<?= isset($status)?$status:'' ?>"> 
    </div>

    <br>

    <div class="form-row d-flex justify-content-center">
        <input type="submit" name="submit" class="btn btn-primary text-center ml-1" value="Cadastrar">
        <input type="reset" class="btn btn-primary text-center ml-1" value="Limpar">
        <a href="lista_dados_cnpj.php" class="btn btn-primary text-center ml-1">Ver Dados</a>
    </div>

    </form>

    </main>

<?php
    
require_once('rodape.php');

?>

</body>
</html>

