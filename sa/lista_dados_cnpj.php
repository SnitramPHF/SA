<?php

include('protecao.php');

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
        <h1>Dados CNPJ</h1>
    </header>

<?php

require_once('conexaocnpj.php');

?>   

<main class="shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">

<?php

 $query = "SELECT * FROM cnpj";
 $resultado = $con->query($query);

?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Matriz/Filial</th>
      <th scope="col">Data de Abertura</th>
      <th scope="col">Logradouro</th>
      <th scope="col">Número</th>
      <th scope="col">Natureza Jurídica</th>
      <th scope="col">Nome Fantasia</th>
      <th scope="col">Razão Social</th>
      <th scope="col">Status</th>
      <th scope="col">Data de Criação</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($resultado as $value) { ?>

    <tr>
      <th scope="row"><?= $value['id'] ?></th>
      <td><?= $value['cnpj'] ?></td>
      <td><?= $value['mf'] ?></td>
      <td><?= $value['data_abertura'] ?></td>
      <td><?= $value['logradouro'] ?></td>
      <td><?= $value['numero'] ?></td>
      <td><?= $value['natureza'] ?></td>
      <td><?= $value['nome'] ?></td>
      <td><?= $value['razao'] ?></td>
      <td><?= $value['status'] ?></td>
      <td><?= $value['data_criacao'] ?></td>
      <td><a href="deletar_cnpj.php"?id=<?= $value['id'] ?>" class="btn btn-danger btn-sm">Deletar</a></td>
    </tr>

<?php } ?>    

  </tbody>
</table>

</main>

<?php

require_once('rodape.php');

?>