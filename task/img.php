<?php 
$post = $_POST;
$files = $_FILES;
$file_name = $files['pic']['name'];
$tmp_name = $files['pic']['tmp_name'];
if (move_uploaded_file($tmp_name, "load/$file_name")) {
    echo 'Файл успешно загружен, ';
        } else {
    echo 'Файл загрузить не удалось, ';  
}
$filename = 'file.txt';
if (file_put_contents($filename, "$file_name" . "\n", FILE_APPEND | LOCK_EX) !== false) {
        echo 'Данные записаны успешно';
    }
$data_arr = file($filename, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    
<header>

<?php require_once 'menu.php'; ?>

</header>

<body>
    
<section>
    <div>
        <?php foreach ($data_arr as $dat): ?>
        <p>Имя файла: <?php echo $dat?></p>
        <?php  ?>
        <img src="load/<?php echo $dat?>">
        <?php endforeach ?>
    </div>
</section>

</body>
</html>
