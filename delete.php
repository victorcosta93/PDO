<?php
include_once ("conexao.php");
$pdo = conectar();

if(!empty(trim($_GET['codigo']))):

    $codigo = $_GET["codigo"];

    $deletar = $pdo->prepare("DELETE FROM tb_usuario WHERE cd_usuario = :codigo");
    $deletar->bindValue(":codigo", $codigo, PDO::PARAM_INT);
    $deletar->execute();

    if($deletar->rowCount() > 0):

        echo "<h1>DADOS EXCLUIDOS COM SUCESSO.</h1>";

    else:

        echo "<h1>NENHUM DADOS FOI EXCLUIDO.</h1>";

    endif;


    else:

        echo "<h1>INFORME OS DADOS CORRETAMENTE.</h1>";

endif;