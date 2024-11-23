<?php
session_start();
require 'storage.php';
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles_about.css">
    <title>Информация о пользователе</title>
</head>
<body>
    <h1>Информация о пользователе</h1>
    <p>Имя пользователя: <?= htmlspecialchars($user['username']) ?></p>
   <h2>Информация о сервере</h2>
   <pre><?= htmlspecialchars(print_r($_SERVER, true)) ?></pre>
   <form action="account.php" method="get">
    <button type="submit">Перейти к аккаунтам</button>
</form>
<form action="index.php" method="get">
    <button type="submit">Выйти</button>
</form>
</body>
</html>