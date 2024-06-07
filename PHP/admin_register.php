<?php
session_start();
require_once('./config.php');

// Verificar se o usuário é um administrador
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $is_admin = isset($_POST['is_admin']) ? 1 : 0;

    // Verificar se o nome de usuário já está em uso
    $sql = "SELECT id FROM users WHERE name = '$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Este nome de usuário já está em uso.";
        exit();
    }

    // Verificar se o email já está em uso
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Este email já está em uso.";
        exit();
    }

    // Verificar se o nome de usuário contém pelo menos um número
    if (!preg_match('/[0-9]/', $name)) {
        echo "O nome de usuário deve conter pelo menos um número.";
        exit();
    }

    // Aqui você pode realizar outras validações necessárias

    $sql = "INSERT INTO users (name, email, password, is_admin) VALUES ('$name', '$email', '$password', '$is_admin')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>
