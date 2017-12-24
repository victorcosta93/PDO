<?php
include_once ("conexao.php");
$pdo = conectar();

if(!empty($_GET["codigo"]) && !empty($_GET["usuario"]) && !empty($_GET["email"]) && !empty($_GET["senha"])):

    $codigo = trim($_GET['codigo']);
    $nome = trim($_GET['usuario']);
    $email = trim($_GET["email"]);
    $senha = md5(trim($_GET["senha"]));

    $alterarDados = $pdo->prepare("UPDATE tb_usuario SET nm_usuario = :nome, nm_email = :email, nm_senha = :senha
                                  WHERE cd_usuario = :codigo");
    $alterarDados->bindValue(":nome",$nome, PDO::PARAM_STR);
    $alterarDados->bindValue(":email", $email, PDO::PARAM_STR);
    $alterarDados->bindValue(":senha", $senha, PDO::PARAM_STR);
    $alterarDados->bindValue(":codigo", $codigo, PDO::PARAM_INT);
    $alterarDados->execute();

    if($alterarDados->rowCount() > 0):
        echo "<h1>DADOS ALTERADOS.</h1>";
    else:
        echo "<h1>NEHUM DADOS FOI ALTERADO</h1>";
    endif;

else:
    echo "<h1>PASSE TODOS OS DADOS!</h1>";
    endif;
