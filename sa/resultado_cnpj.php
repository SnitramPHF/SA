<?php
require_once "conexaocnpj.php";
$array_erro = [];
    empty($_POST['cnpj']) ? $array_erro['cnpj'] = "Campo nome cnpj preenchido" : $cnpj = trim($_POST['cnpj']);
    empty($_POST['mf']) ? $array_erro['mf'] = "Campo Matriz/Filial não preenchido" : $mf = trim($_POST['mf']);
    empty($_POST['data_abertura']) ? $array_erro['data_abertura'] = "Campo Data de Abertura não preenchido" : $data_abertura = trim($_POST['data_abertura']);
    empty($_POST['logradouro']) ? $array_erro['logradouro'] = "Campo logradouro não preenchido" : $logradouro = trim($_POST['logradouro']);
    empty($_POST['numero']) ? $array_erro['numero'] = "Campo número não preenchido" : $numero = trim($_POST['numero']);
    empty($_POST['natureza']) ? $array_erro['natureza'] = "Campo natureza não preenchido" : $natureza = trim($_POST['natureza']);
    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);
    empty($_POST['razao']) ? $array_erro['razao'] = "Campo razao não preenchido" : $razao = trim($_POST['razao']);
    empty($_POST['status']) ? $array_erro['status'] = "Campo status não preenchido" : $status = trim($_POST['status']);

if (count($array_erro) > 0) {
    foreach($array_erro as $value) {
        alertErro($value);
        echo '<br>';
    }
} else {
    $query = "INSERT INTO cnpj values(NULL, '$cnpj', '$mf', '$data_abertura', '$logradouro', '$numero', '$natureza', '$nome', '$razao', '$status', NOW())";
    $resultado = $con->query($query);
    if ($resultado) {
        alertSucesso('Dados informados com sucesso!');
        unset($cnpj, $mf, $data_abertura, $logradouro, $numero, $natureza, $nome, $razao, $status);
        $con->close();
    }else {
        alertErro('Não foi possível inserir os dados!');
    }
}

?>