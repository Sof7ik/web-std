<?php
    require_once __DIR__ . './connection.php';

    $fioFeedback = $_REQUEST['fio_feedback'];
    $phoneFeedback = $_REQUEST['phone_feedback'];
    $descriptionFeedback = $_REQUEST['description_feedback'];
    $emailFeedback = $_REQUEST['email_feedback'];
    $dateFeedback = date('Y-m-d H:i');
    
    Database::queryExecute("INSERT INTO feedback VALUES (NULL, '$dateFeedback', '$fioFeedback', '$phoneFeedback', '$emailFeedback', '$descriptionFeedback', 'active')");
?>