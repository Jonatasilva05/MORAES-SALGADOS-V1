<!--orders.php-->
<!--user_orderlist.php-->

<?php
session_start();
require_once('./config.php');

if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name']) || $_SESSION['is_admin'] != 0) {
    header("Location: ../index.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Consulta para obter os pedidos do usuário
$sql = "SELECT id, product, quantity_type, quantity, flavor, order_date FROM orders WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Lista de Pedidos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Minha Lista de Pedidos</h1>
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Sabor</th>
                        <th>Tipo de Quantidade</th>
                        <th>Quantidade</th>
                        <th>Data/Hora do Pedido </th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['flavor']); ?></td>
                            <td><?php echo htmlspecialchars($row['product']); ?></td>
                            <td><?php echo htmlspecialchars($row['quantity_type']); ?></td>
                            <td><?php echo htmlspecialchars($row['quantity']); ?></td>
                            <td><?php echo htmlspecialchars($row['order_date']); ?></td>
                            <td>
                                <a href="user_editlista.php?id=<?php echo $row['id'];?>">Editar</a>|
                                <a href="user_deletelista.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja apagar este pedido?');">Apagar</a>|
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <form action="user_deletelistaint.php" method="post">
                <button type="submit" onclick="return confirm('Tem certeza que deseja apagar todos os pedidos?');">Apagar Todos os Pedidos</button>
            </form>
        <?php else: ?>
            <p>Você ainda não fez nenhum pedido.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php
$stmt->close();
$conn->close();
?>
