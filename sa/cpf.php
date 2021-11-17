<?php

include('protecao.php');

?>

<?php

require_once('funcoes.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Cadastro CPF</title>
</head>
<body>
    <header class="bg-primary text-white sticky-top text-center">
        <h1>Preencha os Dados:</h1>
    </header>

<main class="shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border"> 

<?php
    if (isset($_POST['submit']))
        require_once "resultado.php";
?>

<form action="#" method="post">

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($nome) ? $nome : '' ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" value="<?= isset($cpf) ? $cpf : '' ?>">
        </div>

    </div>
    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" value="<?= isset($cep) ? $cep : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" value="<?= isset($rua) ? $rua : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero" value="<?= isset($numero) ? $numero : '' ?>">
        </div>

    </div>
    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="<?= isset($bairro) ? $bairro : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="<?= isset($cidade) ? $cidade : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value="<?= isset($estado) ? $estado : '' ?>">
        </div>

    </div>
    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" name="celular" id="celular" value="<?= isset($celular) ? $celular : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="telefone">Telefone Fixo</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value="<?= isset($telefone) ? $telefone : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" name="sexo" id="sexo" value="<?= isset($sexo) ? $sexo : '' ?>">
        </div>

    </div>
    <div class="form-row d-flex justify-content-center">
        <input type="submit" name="submit" class="btn btn-primary text-center ml-1" value="Cadastrar">
        <input type="reset" class="btn btn-primary text-center ml-1" value="Limpar">
        <a href="lista_dados_cpf.php" class="btn btn-primary text-center ml-1">Ver Dados</a>
    </div>

</form>

</main>

<?php

require_once('rodape.php');

?>