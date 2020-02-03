<?php
	require_once __DIR__ . './connection.php';
    
    $lastIdNews = $_GET['id_news'];

    Database::queryExecute("UPDATE `news` SET `status_news` = 'archive' WHERE `news`.`id_news` = '$lastIdNews'");
?>