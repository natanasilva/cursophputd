<?php

$email = "admin@admin.com";
$senha = "12345";

$username = $_POST["email"];
$password = $_POST["senha"];

if ($username != $email || $password != $senha) {
    $_SESSION['msg'] = "1";
    header("Location:questao_4_m_1.php");
    exit;
} else if ($email === $username && $senha === $password) {
    session_start();
    $_SESSION["email"] = $username;
    $_SESSION["senha"] = $password;
    header("Location:perfil.php");
    exit;
} else {
    echo "Nada para mostrar";
}
