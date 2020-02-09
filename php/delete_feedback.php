<?php
    require_once __DIR__ . './connection.php';
    $idFeedback = $_GET['id_feedback'];

    Database::queryExecute("DELETE FROM `feedback` WHERE `id_feedback` = '$idFeedback'");

    header("Location: ../admin.php");

?>