<?php
    require_once __DIR__ . './connection.php';

    $titleNews = $_REQUEST['title_news'];
    $textNews = $_REQUEST['text_news'];
    // $images = unserialize($_REQUEST['images']);
    $dateNews = date('Y-m-d H:i');

    $lastIdNews = (int)Database::query("SELECT id_news FROM news ORDER BY id_news DESC")['id_news'];
    $lastIdNews++;

    echo '<p>last' . $lastIdNews . '</p>';
    echo '<p>title' . $titleNews . '</p>';
    echo '<p>text' . $textNews . '</p>';
    echo '<p>' . $dateNews . '</p>';

    Database::queryExecute("INSERT INTO news VALUES ('$lastIdNews', '$titleNews', '$textNews', '$dateNews', 'active')");

    // foreach ($images as $c => $imagePath)
    // {
    //     Database::queryExecute("INSERT INTO photos_news VALUES ('$lastIdNews', '$imagePath')");
    // }
?>