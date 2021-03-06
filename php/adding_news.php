<?php
    require_once __DIR__ . '/connection.php';
    
    $titleNews = $_REQUEST['title_news'];
    $textNews = $_REQUEST['text_news'];

    // Берём последний ID новости, чтобы в дальнейшем создать папку с ID на единицу больше 
    $lastIdNews = (int)Database::query("SELECT id_news FROM news ORDER BY id_news DESC")['id_news'];
    $lastIdNews++;

    $dateNews = date('Y-m-d H:i');

    if ($_FILES['image_news']['error'] == UPLOAD_ERR_NO_FILE)
    {
        die("<p class='add_news_response'>Произошла ошибка при отправке изображения</p>");
    }

    $uploadedImage = $_FILES['image_news'];

    $imagePath = $uploadedImage['tmp_name'];
    $errorCode = $uploadedImage['error'];

    if ($errorCode != UPLOAD_ERR_OK)
    {
        
        die("<p class='add_news_response'>Произошла ошибка при отправке изображения</p>");
    }

    $fi = finfo_open(FILEINFO_MIME_TYPE);
    $mime = (string) finfo_file($fi, $imagePath);

    if (strpos($mime, 'image') === false)
    {
        
        die("<p class='add_news_response'>Можно загружать только изображения</p>");
    }
    $image = getimagesize($imagePath);

    $imageWidth = $image[0];
    $imageHeight = $image[1];

    // Зададим ограничения для картинок в 5 MB
    $limitBytes  = 1024 * 1024 * 5;
                // KB     MB
    $limitWidth  = 1280;
    $limitHeight = 720;

    if (filesize($imagePath) > $limitBytes)
    {

        die("<p class='add_news_response'>Размер изображения не должен превышать 5 Мбайт</p>");
    }
    if ($imageHeight > $limitHeight)
    {
        
        die("<p class='add_news_response'>Высота изображения не должна превышать 720 точек</p>");
    }
    if ($imageWidth > $limitWidth)
    {
        
        die("<p class='add_news_response'>Ширина изображения не должна превышать 1280 точек</p>");
    }

    $name = md5_file($imagePath);
    $extension = image_type_to_extension($image[2]);

    $format = str_replace('jpeg', 'jpg', $extension);

    $folderForPostImage = __DIR__ . './../news_images/' . $lastIdNews;

    mkdir($folderForPostImage);

    $imageNameFormat = $name . $format;

    $imageFullPath = $folderForPostImage . '/' . $imageNameFormat;

    if (!move_uploaded_file($imagePath, $imageFullPath))
    {
        die("При записи изображения на диск произошла ошибка");
    }
    
    $response = Database::queryExecute("INSERT INTO news VALUES ('$lastIdNews', '$titleNews', '$textNews', '$dateNews', 'active', '$imageNameFormat')");

    if ($response)
    {
        echo '<p class="add_news_response">Новость успешно добавлена</p>';
    }
    else
    {
        echo '<p class="add_news_response">Во время добавления новости произошла ошибка, попробуйте снова</p>';
    }
?>
