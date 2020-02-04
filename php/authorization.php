<?php
    SESSION_START();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" required autofocus>
        <input type="password" name="password" required>
        <input type="submit" name="submit">
    </form>

    <a href="logout.php">Выйти</a>
</body>
</html>

<?php
    require_once './connection.php';

    if (isset($_POST['submit']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = Database::query("SELECT login, password FROM `authorization` WHERE login = $login AND password = $password");

        if ($query)
        {
            $_SESSION['is_admin'] = 1;
            echo $_SESSION['is_admin'];
            echo "Хорошо, охуенно, заебись!";
            ?>
            <meta http-equiv="refresh" content="0;../partOfPage.html">
            <?
        }
        else
        {
            echo "Не хорошо, не охуенно, плохо ваще!";
        }
    }
?>