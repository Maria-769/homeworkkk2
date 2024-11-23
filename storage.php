<?
$users = [];

for ($i = 1; $i <= 100; $i++) 
{
    $username = "user$i";
    $password = password_hash("pass$i", PASSWORD_DEFAULT); // хэш пароля

    $users[] = 
    [
        'username' => $username,
        'password' => $password
    ];
}
?>