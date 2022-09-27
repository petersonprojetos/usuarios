<?php
    include("conexao.php");

    
    $perfis = $_POST['visDados'];
    $strPerfis = implode(', ',$perfis);

    $bloqueado = $_POST['bloqueado'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    
    $sql = "INSERT INTO cadastro (bloqueado, nome, email, login, senha, cpf, perfis,  criado) 
    VALUES('$bloqueado', '$nome', '$email', '$login', '$senha', $cpf , '$strPerfis' , NOW() )";
    
    if (mysqli_query($conexao, $sql)) {
        header("Location: novousuario.php");
    } else{
        echo "erro :".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
    


?>