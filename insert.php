<?php

include_once ('conexao.php');
$pdo=conectar();

$email = $_GET['email'];

//Param http://php.net/manual/pt_BR/pdo.constants.php

//Prepara a execução
$insert=$pdo->prepare("INSERT INTO tb_usuario(nm_email) VALUES (:email)");
$insert->bindValue(":email", $email);

$validar=$pdo->prepare("SELECT * FROM tb_usuario WHERE  nm_email = ?");
$validar->execute(array($email));

if($validar->rowCount() == 1){
    echo "Esse e-mail já foi cadastrado no sistema";
}
else{
    $insert->execute();
}
/**
 Diferença entre bindParam e bindValue

$sexo = 'masculino';
$s = $dbh->prepare('SELECT nome FROM cadastro WHERE sexo = :sexo');
$s->bindValue(':sexo', $sexo); // usado bindValue para vincular o valor da variável
$sexo = 'feminino';
$s->execute(); // executado como WHERE sexo = 'masculino'

$sexo = 'masculino';
$s = $dbh->prepare('SELECT nome FROM cadastro WHERE sexo = :sexo');
$s->bindParam(':sexo', $sexo); // usado bindParam para vincular a variável
$sexo = 'feminino';
$s->execute(); // executado como WHERE sexo = 'feminino'

**/