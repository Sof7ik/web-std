<?php
    require_once __DIR__ . './connection.php';
    
    $titleNews = $_REQUEST['title_news'];
    $textNews = $_REQUEST['text_news'];

    // Берём последний ID новости, чтобы в дальнейшем создать папку с ID на единицу больше 
    $lastIdNews = (int)Database::query("SELECT id_news FROM news ORDER BY id_news DESC")['id_news'];
    $lastIdNews++;

    $dateNews = date('Y-m-d H:i');

    if ($_FILES['image_news']['error'] == UPLOAD_ERR_NO_FILE)
    {
        die("Произошла ошибка при отправке изображения");
    }

    $uploadedImage = $_FILES['image_news'];

    $imagePath = $uploadedImage['tmp_name'];
    $errorCode = $uploadedImage['error'];

    if ($errorCode != UPLOAD_ERR_OK)
    {
        die("Произошла ошибка при отправке изображения");
    }

    $fi = finfo_open(FILEINFO_MIME_TYPE);
    echo '<pre>';
        print_r($_FILES);
    echo '</pre>';
    $mime = (string) finfo_file($fi, $imagePath);

    if (strpos($mime, 'image') === false)
    {
        die("Можно загружать только изображения");
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
        die("Размер изображения не должен превышать 5 Мбайт");
    }
    if ($imageHeight > $limitHeight)
    {
        die("Высота изображения не должна превышать 720 точек");
    }
    if ($imageWidth > $limitWidth)
    {
        die("Ширина изображения не должна превышать 1280 точек");
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
    
    Database::queryExecute("INSERT INTO news VALUES ('$lastIdNews', '$titleNews', '$textNews', '$dateNews', 'active', '$imageNameFormat')");
?>