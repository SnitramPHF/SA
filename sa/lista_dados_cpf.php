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
        <h1>Dados CPF</h1>
    </header>

<?php

require_once('conexaocpf.php');

?>   

<main class="shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">

<?php

 $query = "SELECT * FROM cpf";
 $resultado = $con->query($query);

?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Celular</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de Criação</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($resultado as $value) { ?>

    <tr>
      <th scope="row"><?= $value['id'] ?></th>
      <td><?= $value['nome'] ?></td>
      <td><?= $value['cpf'] ?></td>
      <td><?= $value['cep'] ?></td>
      <td><?= $value['rua'] ?></td>
      <td><?= $value['numero'] ?></td>
      <td><?= $value['bairro'] ?></td>
      <td><?= $value['cidade'] ?></td>
      <td><?= $value['estado'] ?></td>
      <td><?= $value['celular'] ?></td>
      <td><?= $value['telefone'] ?></td>
      <td><?= $value['sexo'] ?></td>
      <td><?= $value['data_criacao'] ?></td>
      <td><a href="delete_cpf.php"?id=<?= $value['id'] ?>" class="btn btn-danger btn-sm">Deletar</a></td>
    </tr>

<?php } ?>    

  </tbody>
</table>

</main>

<?php

require_once('rodape.php');

?>