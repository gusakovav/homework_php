<?php
session_start();
$login = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница</title>
</head>
<body>
    <nav>
        <a href="page.php">Страница</a>
        <a href="logout.php">Выйти</a>
    </nav>
    <nav>
        <?php if(isset($login)): ?>
        <a href="logout.php">Выйти</a>
        <?php else: ?>
        <a href="form.php">Войти</a>
        <?php endif; ?>
    </nav>  

    <h2>Контент доступен всем пользователям</h2>  

<div id="post"></div>

    <?php if(isset($login)): ?>
        <form>
            <div>
                <textarea name="text"></textarea>
            </div>
            <input type="submit" value="Добавить">
        </form>
    <?php else: ?>
        <p>Необходимо войти в личный кабинет</p>
    <?php endif; ?>


    <script src="page.js"></script>


</body>
</html>































