<?php

if (!empty($_GET['id'])) {
    
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT status_USUARIO FROM USUARIO WHERE ID=$id";
    $result = $conn->query($sqlselect);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentStatus = $row['status_USUARIO'];
        $id = $_GET['id'];

        if ($currentStatus == "ATIVO") {
            $newStatus = "INATIVO";
        } else {
            $newStatus = "ATIVO";
        }

        $sqlupdate = "UPDATE USUARIO SET status_USUARIO='$newStatus' WHERE ID='$id'";
        if ($conn->query($sqlupdate) === TRUE) {
            $conn->close();
            header('Location: consultaMaster.php');
            exit;
        } else {
            echo "Erro ao atualizar o registro: " . $conn->error;
        }
    } else {
        $conn->close();
        header('Location: consultaMaster.php');
        exit;
    }
} else {
    echo "<p>ID não foi fornecido.<p>";
}
?>