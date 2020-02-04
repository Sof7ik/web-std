<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="new-news-wrapper">
        <img src="img/icons/admin/close-news.png" alt="close-news" class="close-news">

        <h1 class="new-news-title">Заголовок</h1>
        <input type="text" class="input-title" placeholder="Введите заголовок..." name="new-news-title" required>

        <h1 class="new-news-title">Содержание</h1>
        <div class="new-news-instuments">
            <img src="img/icons/admin/trash.png" alt="trash" class="instuments-icons">
            <img src="img/icons/admin/add-image.png" alt="add" class="instuments-icons">
        </div>

        <textarea class="input-main-text" placeholder="Введите текст..."  name="new-news-main-text" required></textarea>
    </div>
</body>
</html>