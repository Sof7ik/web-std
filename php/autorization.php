<?php
    SESSION_START();

    require_once './connection.php';

    if (isset($_POST['submit']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = Database::query("SELECT login, password FROM `authorization` WHERE login = $login AND password = $password");

        if ($query)
        {
            $_SESSION['is_admin'] = 1;
            // echo $_SESSION['is_admin'];
            ?>
            <meta http-equiv="refresh" content="0;../admin.php">
            <?
        }
        else
        {
            echo "Такого пользователя не найдено";
        }
    }
?>