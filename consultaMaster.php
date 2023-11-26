
<?php

    session_start();
    include_once('conexao.php');

    if(!isset($_SESSION['MASTER']))
    {
        header('location: LoginMaster.php');
        exit();
    }

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM USUARIO WHERE ID LIKE '%$data%' or NOME LIKE '%$data%' or CPF LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM USUARIO ORDER BY id DESC";
    }

    $result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
    <link rel="stylesheet" href="./css/styleConsulta.css">
</head>
<body>

<div class="header">

    <nav>
        <div class="nav-wrapper">
          <a href="index.html" class="brand-logo">Telefonia</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="btn_voltar"><a href="MenuMaster.php">VOLTAR</a></li>
          </ul>
        </div>
      </nav>
</div>

<!--Main-->
    <main>

    <div class="div_pesquisa">
        <input class="caixa_pesquisa" type="text" name="pesquisar" id="pesquisar" value="<?php if (!isset($_GET['search'])){ echo ""; }else{echo $_GET['search'];}; ?>" placeholder="Pesquise aqui..">
    </div>

    <div class="responsive_table">
        <?php
            if ($result->num_rows > 0) {
                
                echo "<table class='tabela_dados' border='1'>";
                echo "<tr>
                        <th>ID</th>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Nome_M</th>
                        <th>Senha</th>
                        <th>Tel_cel</th>
                        <th>Tel_fix</th>
                        <th>Endereço</th>
                        <th>Status</th>
                        <th>DT_ULT_VAL</th>
                        <th>Data de Nascimento</th>
                        <th>Tipo de usuario</th>
                        <th>ações</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["ID"] . "</td>
                        <td>" . $row["CPF"] . "</td>
                        <td>" . $row["NOME"] . "</td>
                        <td>" . $row["SEXO"] . "</td>
                        <td>" . $row["NOME_M"] . "</td>
                        <td>" . $row["SENHA"] . "</td>
                        <td>" . $row["TEL_CEL"] . "</td>
                        <td>" . $row["TEL_FIX"] . "</td>
                        <td>" . $row["ENDERECO"] . "</td>
                        <td>" . $row["status_USUARIO"] . "</td>
                        <td>" . $row["DT_ULT_VAL"] . "</td>
                        <td>" . $row["DATA_NASC"] . "</td>
                        <td>" . $row["TIPO_USUARIO"] . "</td>


                        <td> <a href='edit.php?id=$row[ID]' ><img class='icone_editar' src='img/icone_editar.png' ></a>
                        
                            <a href='status.php?id=$row[ID]' ><img class='icone_status' src='img/icone_status.png' ></a></td>

                    </tr>";
                }
                echo "</table>";
            } else {
                echo "Nenhum registro encontrado na tabela 'usuarios'.";
            }

            $conn->close();
        ?>
    </div>
    </main>
</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'consultaMaster.php?search='+search.value;
    }
</script>

<div class="footer l-box is-center">
        Por Marcelle, Fernanda e Caio
</div>

</html>