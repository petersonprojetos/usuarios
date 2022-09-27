<?php
    include("conexao.php");

    $perfis = $_POST['visDados'];
    $strPerfis = implode(', ',$perfis);

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $bloqueado = $_POST['bloqueado'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    
    $sql = "UPDATE cadastro SET bloqueado = '$bloqueado' , nome = '$nome' , email = '$email' ,
            login = '$login' , senha = '$senha' , cpf = '$cpf' ,  perfis = '$perfis' , modificado
            VALUES('$bloqueado', '$nome', '$email', '$login', '$senha', $cpf , '$strPerfis' , modificado = NOW() WHERE id='$id')";
    
    if (mysqli_affected_rows($conexao, $sql)) {
        header("Location: log.php");
    } else{
        echo "erro :".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
    


?>