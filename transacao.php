<?php
include_once ("conexao.php");
$pdo=conectar();

//Inicio da transação
$pdo->beginTransaction();

//1º cadastro
$dadosUsuario = $pdo->query("INSERT INTO tb_usuario (nm_usuario, nm_email, cd_cpf, cd_rg, dt_cadastro, nm_senha)
                                VALUES ('Victor', 'victor.hlscosta@gmail.com','415.176.178-04','48.789.018-8','2017-11-18','senha')");

if(!$dadosUsuario):
    //die = exit();
    die("Houve um erro no cadastro de usuários.");
    endif;

//2º cadastro

$dadosDados = $pdo->query("INSERT INTO tb_dado (nm_dado, cd_status) VALUES ('Logado', '8')");

if(!$dadosDados):

    //Caso a segunda transação dê errado, a primeira transaçao de desfeita, e os dados inseidos são apagados da tabela.
    $pdo->rollBack();
    die("Houve um erro no cadastro de dados.");

    endif;

//Confirma a transação
$pdo->commit();