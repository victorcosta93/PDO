<?php
include_once ("conexao.php");
$pdo=conectar();

/**
$buscar=$pdo->prepare("SELECT * FROM tb_usuario");
$buscar->execute();

/**Traz somente a primeira linha da tabela

var_dump($linha = $buscar->fetch(PDO::FETCH_ASSOC));
 *
while ($linha = $buscar->fetch(PDO::FETCH_ASSOC)){
 *
    echo "<br /><br />Email: ".$linha['nm_email'];
}
**/
/**Traz todas as linhas da tabela

$linha = $buscar->fetchAll(PDO::FETCH_ASSOC);
 *
foreach ($linha as $result){
 *
    echo "Email: ".$result['nm_email']."</br></br>";
}
**/
/**Traz todas as linhas em um array, mas separado por objeto

var_dump($linha = $buscar->fetchAll(PDO::FETCH_OBJ));

foreach ($linha as $result){

    echo "Email: ".$result->nm_email."</br>";

}
**/

//Param http://php.net/manual/pt_BR/pdo.constants.php

$codigo = $_GET['codigo'];

$listarDados = $pdo->prepare("SELECT * FROM tb_usuario WHERE cd_usuario = :codigo");
$listarDados->bindValue(":codigo", $codigo, PDO::PARAM_INT);
$listarDados->execute();

$result = $listarDados->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $exibir){

    echo $exibir['nm_email'];
}

