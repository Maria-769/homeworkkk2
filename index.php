<?php
session_start();
require "storage.php";

$errmsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === '' || $password === '')
    { 
       $errmsg = 'Не все поля заполнены!';
    }
    else   
    {
        $userFound = false;
    {
        foreach ($users as $user) 
        {
              if ($user['username'] === $username && password_verify($password, $user['password'])) 
            {
                $_SESSION['user'] = $user;
                header('Location: about.php');
                exit;
            }
        }
       $errmsg = 'Неверный логин или пароль!';
    }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles_index.css">
</head>
<body>
   
        <form method="post">
        <h2>Авторизация</h2>
        <?php if ($errmsg === ''): ?>
        <p style="color: pink;"><?= htmlspecialchars($errmsg) ?></p>
        <?php endif;?>
        <input type="text" name="username" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit">Войти</button>
    </form> 
</body>
</html>
