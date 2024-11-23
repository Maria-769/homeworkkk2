<?php
session_start();
require "storage.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
    <link rel="stylesheet" href="styles_account.css">
</head>
<body>
    <h1>Список пользователей</h1>
    <table>
        <thead>
            <tr>
                <th>№</th>
                <th>Имя пользователя</th>
                <th>Пароль</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($users); $i++): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= htmlspecialchars($users[$i]['username']) ?></td>
                    <td><?= htmlspecialchars($users[$i]['password']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <form action="about.php" method="get">
    <button type="submit">Назад</button>
</form>
<form action="index.php" method="get">
    <button type="submit">Выйти</button>
</form>
</form>
</body>
</html>