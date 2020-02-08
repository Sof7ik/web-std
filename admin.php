<?php
session_start();
if (!$_SESSION['is_admin'])
{
    header('Location: ./authorization.html');
}
require_once './php/cfg.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/admin.css">

    <script src="./js/send_news.js" defer></script>
    
    <title>Админ-панель</title>
</head>
<body>

    
    <div class="wrapper">
    
        <a href="./index.php" class="homepage">НА ГЛАВНУЮ</a>
            
        <div class="feedback">
            <div class="all-requests">
                <?php require_once ('php/feedback.php'); ?>
            </div>
        </div>

        <div class="left-container">
            <form action="./php/update_cfg.php" method="POST" class="edit-studio-title">
                <h1 class="edit-studio-title">ИЗМЕНИТЬ НАЗВАНИЕ СТУДИИ</h1>

                <span class="new-studio-title">ВВЕДИТЕ НОВОЕ НАЗВАНИЕ</span>
                <input type="text" class="edit-studio-title" name="edit-studio-title">

                <span>Текущее название</span>
                <?php echo '<input type="text" class="current-studio-title" value="' .  $config['title'] . '" readonly>'; ?>
                
                <input type="submit" value="Поменять!">
            </form>

            <!-- Если будем делать cfg сайта, то делаем через форму -->

            <!-- <form action="" method="GET" class="change-color-theme"> -->
            <div class="change-color-theme">

                <h1>ВЫБЕРИТЕ СТИЛЬ САЙТА</h1>
                <div class="set-color-theme">

                    <input type="radio" id="theme-1" name="color-theme" required>
                    <label for="theme-1" class="color-theme-image">
                        <img src="../img/price/1.jpg" class="color-theme-image">
                    </label>

                    <input type="radio" id="theme-2" name="color-theme" required>
                    <label for="theme-2" class="color-theme-image">
                        <img src="../img/price/1.jpg" class="color-theme-image">
                    </label>

                    <input type="radio" id="theme-3" name="color-theme" required>
                    <label for="theme-3" class="color-theme-image">
                        <img src="../img/price/1.jpg" class="color-theme-image">
                    </label>

                </div>
                <button class="set-color-theme-btn">Применить</button>
            </div>
            <!-- </form> -->

            <form action="./php/adding_news.php" method="POST" class="new-news-wrapper" enctype="multipart/form-data">
                <h1>ДОБАВИТЬ НОВОСТЬ</h1>

                <!-- <img src="img/icons/admin/close-news.png" alt="close-news" class="close-news"> -->

                <h1 class="new-news-title">Заголовок</h1>
                <input type="text" class="input-title" placeholder="Введите заголовок..." name="title_news" required>

                <h1 class="new-news-title">Содержание</h1>
                <div class="new-news-instuments">
                    <img src="img/icons/admin/trash.png" alt="trash" class="instuments-icons">
                    <img src="img/icons/admin/add-image.png" alt="add" class="instuments-icons">
                    <input type="file" name="image_news" accept=".png, .jpg, .jpeg">
                </div>

                <textarea class="input-main-text" placeholder="Введите текст..." name="text_news" required></textarea>

                <input type="submit" value="Добавить новость">
            </form>
        </div>

        <div class="right-container">

            <div class="news-archive">
                <div class="all-wrapper">
                    <?php require_once ('php/archive.php'); ?>
                </div> 
                
            </div>
        </div>
    </div>
</body>
</html>