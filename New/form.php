<?php
session_start();
$server = $_SERVER;



if(isset($_SESSION['login'])) {
    header('location: account.php');
}    

if($server['REQUEST_METHOD'] === 'POST'){
    $post = $_POST; // login === qwerty, password === 123 - проверяем эти данные, тюкю пока базы данных нет
    if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123') {
    // trim - убирает пробелы
        $_SESSION['login'] = $post['login'];
        header('location: account.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
</head>

<body>
    <nav>
        <a href="page.php">Страница</a>
        <a href="logout.php">Выйти</a>
    </nav>
    <?php if(isset($error)): ?>
    <p><?php echo $error?> </p>
    <?php endif ?>
    <form action="form.php" method="post">
        <div>
            <label>
                Введите логин<input type="text" name="login">
            </label>
        </div>
        <div>
            <label>
                Введите пароль<input type="password" name="password">
            </label>
        </div>
        <input type="submit" value="Войти">

    </form>



</body>
</html>
































