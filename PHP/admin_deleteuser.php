<?php
session_start();
require_once('./config.php');

// Verificar se o usuário é um administrador
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../login.php");
    exit();
}

// Verificar se o ID do usuário foi fornecido
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Query para excluir o usuário
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $user_id);
    mysqli_stmt_execute($stmt);

    // Redirecionar de volta para o painel do administrador após a exclusão
    header("Location: admin_listauser.php");
    exit();
} else {
    echo "ID do usuário não fornecido.";
    header("Location: ./login.php");
    exit();
}

    


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = intval($_POST['user_id']);
    
    // Prevenção básica contra SQL Injection
    if ($user_id > 0) {
        // Executa a exclusão
        $query = "DELETE FROM users WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $query)) {
            mysqli_stmt_bind_param($stmt, "i", $user_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }
}

header("Location: ./admin_listauser.php");
exit;
?>
