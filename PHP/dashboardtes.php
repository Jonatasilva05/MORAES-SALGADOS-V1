
<?php
session_start();
require_once('./config.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}

// Buscar informações do usuário logado se é usuario ou administrador
$user_id = $_SESSION['user_id'];
$user_type = $_SESSION['is_admin'];


// Lógica para poder consultar o banco de dados e trazer o nome do usuário
$user_name = 1;
$sql = "SELECT name FROM users WHERE id = $user_name";
$result = $conn->query($sql);

// se o usuario for encontrado será mostrado o nome senão será redirecionado a pagina de login
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row["name"];
}else{
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!--CSS BOODSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../dashboard.css"> -->
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            </div>
                <div class="col-md-auto">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <?php if ($user_type === '1') { ?>
            <h5 class="card-title">OLÁ!! SEJA BEM VINDO(A) <br> </h5>
                            <p class="card-text">Qual página deseja ir?</p>
                            <hr>
                            <a href="#" class="card-link"><button>Adicionar Novos Produtos Ou Quantidade Ao Site</button></a>
                            <hr>
                            <a href="#" class="card-link"><button>Cadastrar Novo Usuario ou Novo Administrador</button></a>
                            <hr>
                            <a href="#" class="card-link"><button>Lista de Usuários Cadastrados e Administradores</button></a>
    <?php } else { ?>
        <!--aqui vai o layout do user-->            
<?php } ?>
                        </div>
                    </div>
                </div>
            <div class="col col-lg-2">
            </div>
        </div>
    </div>
    
    <a href="logout.php">Logout</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


<!-- 


