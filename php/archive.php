<?php

	require_once __DIR__ . '/connection.php';

	$query = Database::queryAll("SELECT * FROM `news`");

	echo"
	<p class='news-title' style='font-weight: bold; text-transform: uppercase'> Заголовок </p>
	<p class='pre-text' style='font-weight: bold; text-transform: uppercase'> Пре-текст </p>
	<p class='publish-date' style='font-weight: bold; text-transform: uppercase'> Дата публикации </p>
	<p class='delete-news' style='font-weight: bold; text-transform: uppercase'> </p>";

	foreach ($query as $row)
	{
		echo"
			<p class='news-title'>" . $row['title_news'] . "</p>
			<p class='pre-text'>" . $row['text_news'] . "</p>
			<p class='publish-date'>" . $row['date_news'] . "</p>
			<a href='php/delete_news_from_archive.php?id_news=".$row['id_news']."'>
				<img src='./img/icons/admin/trash.png' class='delete-news'>
			</a>
		";
		// echo "<p>" . $row['id_news'] . "</p>";
		// echo "<p>" . $row['title_news'] . "</p>";
		// echo "<p>" . $row['text_news'] . "</p>";
		// echo "<p>" . $row['date_news'] . "</p>";
		// echo "<a href='delete_news_from_archive.php?id=".$row['id_news']."'> удалить </a>";
	}
    
?>