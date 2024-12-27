<?php
require '../includes/db.php';
require '../includes/functions.php';
$products = fetchProducts($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    addStock($pdo, $product_id, $quantity);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить поступление</title>
</head>
<body>
<h1>Добавить поступление</h1>
<form method="POST">
    <label>Товар:
        <select name="product_id" required>
            <?php foreach ($products as $product): ?>
                <option value="<?= $product['id'] ?>">
                    <?= htmlspecialchars($product['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <label>Количество: <input type="number" name="quantity" required></label><br>
    <button type="submit">Добавить</button>
</form>
</body>
</html>
