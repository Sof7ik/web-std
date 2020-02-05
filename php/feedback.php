<?php

	require_once __DIR__ . './connection.php';

	$query = Database::queryAll("SELECT * FROM `feedback`");

	foreach ($query as $row){
		echo"
			<div class='inner-news-archive'>
				<p class='news-title'>" . $row['fio_feedback'] . "</p>
				<p class='pre-text'>" . $row['description_feedback'] . "</p>
				<p class='publish-date'>" . $row['date_feedback'] . "</p>
				<p class='publish-date'>" . $row['phone_feedback'] . "</p>
				<p class='publish-date'>" . $row['email_feedback'] . "</p>
				<p class='publish-date'>" . $row['status_feedback'] . "</p>
				<a href='delete_feedback.php?id_feedback=".$row['id_feedback']."'>
					<img src='../img/icons/admin/trash.png' class='delete-news'>
				</a>
			</div>
		";
		// echo "<p>" . $row['id_news'] . "</p>";
		// echo "<p>" . $row['title_news'] . "</p>";
		// echo "<p>" . $row['text_news'] . "</p>";
		// echo "<p>" . $row['date_news'] . "</p>";
		// echo "<a href='delete_news_from_archive.php?id=".$row['id_news']."'> удалить </a>";
	}
    
?>