<?php

function conectar() {
    try {
        $conn = new PDO('mysql:host=localhost; charset=utf8mb4; dbname=veste_vc' , 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados:  " . $e->getMessage();
        die();
    }
    return $conn;
}

function user($e){
    $conn = conectar();
    $lista = $conn->query("SELECT nome FROM tbusuario WHERE cpf = ('$e')");
    $lista->execute();
    if ($lista->rowCount() > 0) {
        return $lista->fetchAll(PDO::FETCH_OBJ);
    } else {
        return 'A lista está vazia.';
    }
}

function login($cpf, $senha){
    $login = 0;
    $conn = conectar();
    $lista = $conn->query("SELECT cpf, senha FROM tbusuario WHERE (cpf = '$cpf') AND (senha = '$senha')");
    $lista->execute();
    if ($lista->rowCount() > 0) {
        $login = 1;
        return $login;
    } else {
        return $login;
    }
}

?>