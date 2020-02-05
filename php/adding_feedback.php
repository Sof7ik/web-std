<?php
    require_once __DIR__ . './connection.php';

    $fioFeedback = $_REQUEST['fio_feedback'];
    $phoneFeedback = $_REQUEST['phone_feedback'];
    $descriptionFeedback = $_REQUEST['description_feedback'];
    $emailFeedback = $_REQUEST['email_feedback'];
    $dateFeedback = date('Y-m-d H:i');
    
    $response = Database::queryExecute("INSERT INTO feedback VALUES (NULL, '$dateFeedback', '$fioFeedback', NULL, '$emailFeedback', '$descriptionFeedback', 'active')");

    if ($response)
    {
        echo '<p class="feedback_response">Ваш запрос принят</p>';
    }
    else
    {
        echo '<p class="feedback_response">Что-то пошло не так, попробуйте ещё раз</p>';
    }
?>