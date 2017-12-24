<?php

function conectar(){
    try {
        $pdo = new  PDO ("mysql:host=localhost; dbname=db_pdo", "root", "");
    } catch (PDOException $e) {
        echo "Mensagem de erro: " . $e->getMessage() . "<br><br>";
        echo "Código do erro: " . $e->getCode() . "<br><br>";
        echo "<strong>Entre em contato com o administrador do sistema.</strong>";
    }
    return $pdo;
}