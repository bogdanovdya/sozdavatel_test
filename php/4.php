<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery</title>
    <style type="text/css">
        img{
            width: 200px;
            height: 200px;
            padding: 10px;
        }
        body{
            background-color: darkslategrey;
        }
    </style>
</head>
<body>
    <div align="center" class="div-img">
    <?php

        $img_dir = 'img/';
        foreach(getFiles($img_dir) as $file){
            echo '<img src="'.$img_dir.$file.'">';
        }

    ?>
    </div>
    <hr>
    <div align="center" class="download">
        <form enctype="multipart/form-data" method="POST">
            <input type="file" name="file" accept="image/*">
            <button type="submit" value="submit">Отправить</button>
        </form>   
    </div>
</body>
</html>

<?php

function getFiles(string $path) : array
{
    clearstatcache();
    $files = scandir($path);

    for($i = 0, $len = count($files); $i < $len; $i++){
        if(is_dir($path.$files[$i])){
            unset($files[$i]);
        }
    }
    return $files;
}

if(isset($_FILES) && $_FILES['file']['error'] == 0){
    $destiation_dir = dirname(__FILE__, 1) . '/' . $img_dir .$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $destiation_dir );
}

?>