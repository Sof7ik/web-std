<?php
	require_once __DIR__ . './connection.php';

    $idNews = $_GET['id_news'];
    $imagePathDatabase = Database::query("SELECT `photo_news` FROM `news` WHERE `id_news` = '$idNews'")['photo_news'];

    $dirPath = __DIR__ . '/../news_images/' . $idNews;
    $imagePath = $dirPath . '/' . $imagePathDatabase;

    unlink($imagePath);
    rmdir($dirPath);

    Database::queryExecute("DELETE FROM `news` WHERE `id_news` = '$idNews'");

    header('Location: ../admin.php');
?>
