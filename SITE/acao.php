<?php

include_once './config/func.php';

session_start();

if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $login = login($cpf, $senha);
    if ($login == 1) {
        $_SESSION['cpf'] = $cpf;
        $_SESSION['senha'] = $senha;
        echo $login;
    } else if ($login == 0) {
        echo $login;
    }
}

if (isset($_SESSION['cpf']) && isset($_SESSION['senha'])) {
    $user = user($_SESSION['cpf']);
    foreach ($user as $u) {
        $_SESSION['user'] = $u->nome;
    }
}

if (isset($_POST['action'])) {
    unset($_SESSION['cpf']);
    unset($_SESSION['senha']);
}

?>