<?php

include "conexao.php";

// Validação do usuário/senha digitados
$sql = $conn->prepare("SELECT * FROM usuarios WHERE 
    (email = ?) AND senha = ?");

    $sql->bind_param("ss", $email, $senha);

    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    $sql -> close();
    $conn -> close();

    if(empty($linha)){
        // echo "FalhaLogin";
        echo "USERINV";
        die();
    }
    
    else{

        echo "SUCESSO";

        if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
        $_SESSION['id'] = $linha['id'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['senha'] = $linha['senha'];

        die();
    }

?>