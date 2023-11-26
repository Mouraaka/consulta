<?php
include_once('conexao.php');

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $nome_m = $_POST["nomem"];
    $senha = $_POST["senha"];
    $tel_cel = $_POST["telefonecelular"];
    $tel_fix = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $data_nasc = $_POST["dataNasc"];

    $sqlUpdate = "UPDATE USUARIO SET 
        CPF='$cpf',
        NOME='$nome',
        SEXO='$sexo',
        NOME_M='$nome_m',
        SENHA='$senha',
        TEL_CEL='$tel_cel',
        TEL_FIX='$tel_fix',
        ENDERECO='$endereco',
        DATA_NASC='$data_nasc',
        DT_ULT_VAL=current_timestamp
        WHERE ID='$id'";

    if ($conn->query($sqlUpdate) === TRUE) {
        header('Location: consultaMaster.php');
    } else {
        echo "Erro na atualização: " . $conn->error;
    }
}

$conn->close();
?>