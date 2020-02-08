<?php
    require_once './cfg.php';

    $title = isset($_POST['edit-studio-title']) ? $_POST['edit-studio-title'] : $config['title'];

    $content = 
    '<?php

        $config["title"] = "' . $title . '";
    
    ';
    
    file_put_contents("./cfg.php", $content);

    header("Location: ../admin.php");