<?php

    if(!empty($_GET['id']))
    {

        include_once('conexao.php');
        
        $id = $_GET['id'];

        $sqlselect = "SELECT * FROM USUARIO WHERE ID=$id";
        $result = $conn->query($sqlselect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data["ID"]; 
                $cpf = $user_data["CPF"]; 
                $nome = $user_data["NOME"];
                $sexo = $user_data["SEXO"];
                $nome_m = $user_data["NOME_M"];  
                $senha = $user_data["SENHA"]; 
                $tel_cel = $user_data["TEL_CEL"];
                $tel_fix = $user_data["TEL_FIX"]; 
                $endereco = $user_data["ENDERECO"];  
                $data_nasc = $user_data["DATA_NASC"];
            }
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="./css/editCadastro.css" rel="stylesheet">
     
</head>
<body>

    <form class="FORM" action="saveEdit.php" method="POST" >
    <div class="container">
        <div class="form">
            <form action="#" method="POST">
            <div class="form-header">
                <div class="title"> 
                <h1> Editar <?php echo $nome ?> </h1>    
                </div>
            </div>    
            </form>
    
            <div class="input-group">
            <div class="input-box"> 
                <label for="nome"> Nome </label>
                <input id="nome" type="text" name="nome" value='<?php echo $nome ?>' placeholder="Digite seu nome" required>
            </div>    
            <div class="input-box"> 
                <label for="datdaNasc"> Data de Nascimento </label>
                <input id="dataNasc" type="date" name="dataNasc" value='<?php echo $data_nasc ?>' placeholder="Digite sua Data de Nascimento" required>
            </div>  
            <div class="gender-group">
            <p>Sexo:</p>
                <input type="radio" id="sexo-m" name="sexo" value="M" <?php echo ($sexo == 'M') ? 'checked' : '' ?>>
                    <label for="sexo-m">Masculino</label><br>
                <input type="radio" id="sexo-f" name="sexo" value="F" <?php echo ($sexo == 'F') ? 'checked' : '' ?>>
                    <label for="sexo-f">Feminino</label>
            </div>  
            <div class="input-box"> 
                <label class='label-nomeMaterno' for="nomeMaterno"> Nome Materno </label>
                <input id="nomem" type="text" name="nomem" value='<?php echo $nome_m ?>' placeholder="Digite seu nome materno">
            </div>  
            <div class="input-box"> 
                <label for="cpf"> CPF </label>
                <input id="cpf" type="text" name="cpf" value='<?php echo $cpf ?>' placeholder="Digite seu CPF" required>
            </div>  
            <div class="input-box"> 
                <label for="telefoneCelular"> Telefone Celular </label>
                <input id="telefonec" type="tel" name="telefonecelular" value='<?php echo $tel_cel ?>' placeholder="(xx-xxxx-xxxx)" required>
            </div>  
            <div class="input-box"> 
                <label for="telefone"> Telefone Fixo </label>
                <input id="telefone" type="tel" name="telefone" value='<?php echo $tel_fix ?>' placeholder="(xx-xxxxxxxx)" required>
            </div>  
            <div class="input-box"> 
                <label for="endereço"> Endereço </label>
                <input id="endereco" type="text" name="endereco" value='<?php echo $endereco ?>' placeholder="Digite seu endereço completo" required>
            </div>  
            <div class="input-box"> 
                <label for="senha"> Senha </label>
                <input id="senha" type="text" name="senha" value='<?php echo $senha ?>' placeholder="Digite a senha" required>
            </div>
            
            <input id="id" name='id' type="hidden" value='<?php echo $id ?>'>
            
            </div>
            <div class="continue-button"> 
                <input class="submit" type="submit" name="update" id="update">
            </div>
        </div>

    </div>
    </form>

</body>
</html>