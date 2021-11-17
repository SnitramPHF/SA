<?php
require_once "conexaocpf.php";
$array_erro = [];
    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);
    empty($_POST['cpf']) ? $array_erro['cpf'] = "Campo cpf não preenchido" : $cpf = trim($_POST['cpf']);
    empty($_POST['cep']) ? $array_erro['cep'] = "Campo cep não preenchido" : $cep = trim($_POST['cep']);
    empty($_POST['rua']) ? $array_erro['rua'] = "Campo rua não preenchido" : $rua = trim($_POST['rua']);
    empty($_POST['numero']) ? $array_erro['numero'] = "Campo número não preenchido" : $numero = trim($_POST['numero']);
    empty($_POST['bairro']) ? $array_erro['bairro'] = "Campo bairro não preenchido" : $bairro = trim($_POST['bairro']);
    empty($_POST['cidade']) ? $array_erro['cidade'] = "Campo cidade não preenchido" : $cidade = trim($_POST['cidade']);
    empty($_POST['estado']) ? $array_erro['estado'] = "Campo estado não preenchido" : $estado = trim($_POST['estado']);
    empty($_POST['celular']) ? $array_erro['celular'] = "Campo celular não preenchido" : $celular = trim($_POST['celular']);
    empty($_POST['telefone']) ? $array_erro['telefone'] = "Campo telefone não preenchido" : $telefone = trim($_POST['telefone']);
    empty($_POST['sexo']) ? $array_erro['sexo'] = "Campo sexo não preenchido" : $sexo = trim($_POST['sexo']);

if (count($array_erro) > 0) {
    foreach($array_erro as $value) {
        alertErro($value);
        echo '<br>';
    }
} else {
    $query = "INSERT INTO cpf values(NULL, '$nome', '$cpf', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$celular', '$telefone', '$sexo', NOW())";
    $resultado = $con->query($query);
    if ($resultado) {
        alertSucesso('Dados informados com sucesso!');
        unset($nome, $cpf, $cep, $rua, $numero, $bairro, $cidade, $estado, $celular, $telefone, $sexo);
        $con->close();
    }else {
        alertErro('Não foi possível inserir os dados!');
    }
}

?>













<?php
/* 
    $array_erro = [];
    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);
    empty($_POST['cpf']) ? $array_erro['cpf'] = "Campo cpf não preenchido" : $cpf = trim($_POST['cpf']);
    empty($_POST['cep']) ? $array_erro['cepe'] = "Campo cep não preenchido" : $cep = trim($_POST['cep']);
    empty($_POST['rua']) ? $array_erro['rua'] = "Campo rua não preenchido" : $rua = trim($_POST['rua']);
    empty($_POST['numero']) ? $array_erro['numero'] = "Campo número não preenchido" : $numero = trim($_POST['numero']);
    empty($_POST['bairro']) ? $array_erro['bairro'] = "Campo bairro não preenchido" : $bairro = trim($_POST['bairro']);
    empty($_POST['cidade']) ? $array_erro['cidade'] = "Campo cidade não preenchido" : $cidade = trim($_POST['cidade']);
    empty($_POST['estado']) ? $array_erro['estado'] = "Campo estado não preenchido" : $estado = trim($_POST['estado']);
    empty($_POST['celular']) ? $array_erro['celular'] = "Campo celular não preenchido" : $celular = trim($_POST['celular']);
    empty($_POST['telefone']) ? $array_erro['telefone'] = "Campo telefone não preenchido" : $telefone = trim($_POST['telefone']);
    empty($_POST['sexo']) ? $array_erro['sexo'] = "Campo sexo não preenchido" : $sexo = trim($_POST['sexo']);
        if (count($array_erro) > 0) {
            foreach ($array_erro as $value) {
                alertErro($value);
                echo '<br>';
            }
        }else {
            alertSucesso('Dados informados com sucesso!');
        }
*/
?>