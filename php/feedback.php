<?php

echo"
	<p class='name-request' style='font-weight: bold; text-transform: uppercase'> ФИО </p>
	<p class='pre-request' style='font-weight: bold; text-transform: uppercase'> Описание запроса </p>
	<p class='date-request' style='font-weight: bold; text-transform: uppercase'> Дата запроса </p>
	<p class='phone-number-request' style='font-weight: bold; text-transform: uppercase'> Номер телефона </p>
	<p class='email-request' style='font-weight: bold; text-transform: uppercase'>  Эл. почта </p>
	<p class='status-request' style='font-weight: bold; text-transform: uppercase'> Статус запроса </p>	
	<p class='delete-news' class='delete-news'></p>";

	require_once __DIR__ . './connection.php';

	$query = Database::queryAll("SELECT * FROM `feedback`");

	foreach ($query as $row){
		echo"
			
				<p class='name-request'>" . $row['fio_feedback'] . "</p>
				<p class='pre-request'>" . $row['description_feedback'] . "</p>
				<p class='date-request'>" . $row['date_feedback'] . "</p>
				<p class='phone-number-request'>" . $row['phone_feedback'] . "</p>
				<p class='email-request'>" . $row['email_feedback'] . "</p>
				<p class='status-request'>" . $row['status_feedback'] . "</p>	
				<a href='delete_feedback.php?id_feedback=".$row['id_feedback']."'>
					<img src='../img/icons/admin/trash.png' class='delete-news'>
				</a>
			
		";
		// echo "<p>" . $row['id_news'] . "</p>";
		// echo "<p>" . $row['title_news'] . "</p>";
		// echo "<p>" . $row['text_news'] . "</p>";
		// echo "<p>" . $row['date_news'] . "</p>";
		// echo "<a href='delete_news_from_archive.php?id=".$row['id_news']."'> удалить </a>";
	}
?>