<?php

    SESSION_START();
    unset($_SESSION['is_admin']);
    header("Location: authorization.php");

?>