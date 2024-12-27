<?php
require '../includes/db.php';
require '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sku = $_POST['sku'];
    addProduct($pdo, $name, $price, $sku);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить товар</title>
</head>
<body>
<h1>Добавить товар</h1>
<form method="POST">
    <label>Название: <input type="text" name="name" required></label><br>
    <label>Цена: <input type="number" step="0.01" name="price" required></label><br>
    <label>Артикул: <input type="text" name="sku" required></label><br>
    <button type="submit">Добавить</button>
</form>
</body>
</html>
