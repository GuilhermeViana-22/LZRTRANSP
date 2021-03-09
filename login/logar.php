<?php
include 'banco.php';

    $email_funcionario = $_REQUEST["email"];
    $senha_funcionario = $_REQUEST["senha"];
    $query = $conexao->query("SELECT * FROM funcionario WHERE email = '" . $email_funcionario . "' AND senha = '" . $senha_funcionario . "'");
    
    if($query->num_rows > 0) {
        
        $_SESSION["email"] = $email_funcionario;
        while($dados = $query->fetch_assoc()) {
            $_SESSION["nome_funcionario"] = $dados["nome_funcionario"];
            $_SESSION["id_funcionario"] = $dados["id_funcionario"];
        }
    
        header("Location: inicial.php");
    
    } else {
    
        header("Location: Login_page.php?erro=1");
    
    }
    ?>