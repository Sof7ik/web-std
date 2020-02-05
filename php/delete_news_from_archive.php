<?php
	require_once __DIR__ . './connection.php';

    $lastIdNews = $_GET['id_news'];

    Database::queryExecute("DELETE FROM `news` WHERE `id_news` = '$lastIdNews'");
?>
