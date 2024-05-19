<?php

// Параметри підключення до бази даних
$host = 'localhost'; // або IP-адреса сервера баз даних
$port = '8889'; // порт (зазвичай 3306 для MySQL)
$dbname = 'restaurant';
$db_username = 'root';
$db_password = 'root';

// Створення з'єднання з базою даних
$conn = mysqli_connect($host, $db_username, $db_password, $dbname, $port);

// Перевірка з'єднання
if (!$conn) {
    die("Не вдалося підключитися до бази даних: " . mysqli_connect_error());
}

// Отримання даних з форми
$username_input = mysqli_real_escape_string($conn, $_POST["username"]);
$password_input = mysqli_real_escape_string($conn, $_POST["password"]);

// Запит для вибору користувача з бази даних
$sql = "SELECT * FROM users WHERE username = '$username_input'";
$result = mysqli_query($conn, $sql);

// Перевірка результату запиту
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    // Перевірка пароля
    if ($user['password'] === $password_input) {
        // Користувач знайдений і пароль співпадає, авторизуємо його
        session_start();
        $_SESSION["username"] = $username_input;
        header("Location: admin_1.php");
        exit;
    } else {
        // Пароль неправильний
        // echo "<p style='color: red;'>Неправильний логін або пароль</p>";
    }
} else {
    // Користувача з таким ім'ям не знайдено
    // echo "<p style='color: red;'>Неправильний логін або пароль</p>";
}

// Закриття з'єднання з базою даних
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Вхід в адмін панель</title>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 20;
    padding: 20;
    background: linear-gradient(to bottom, #ffffff, #28a745); /* Один градієнт: білий зверху, зелений знизу */
}

.menu {
    padding: 40px 0;
    text-align: center;
}

.menu a {
    text-decoration: none;
    color: #d63535; /* Темно-сірий колір тексту посилань */
    font-size: 25px;
    margin: 0 70px;
}

.container {
    background-color: #ffffff; /* Білий фон контейнера */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    margin: 110px auto; /* Вертикальний відступ 50px відгориу */
    max-width: 400px;
}

.container h1 {
    margin-top: 0;
    margin-bottom: 20px;
    color: #333333; /* Темно-сірий колір тексту заголовку */
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333333; /* Темно-сірий колір тексту етикеток */
}

input[type="text"],
input[type="password"] {
    width: 300px;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #d63535; /* Червона рамка текстових полів */
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #28a745; /* Зелений фон кнопок */
    color: #ffffff; /* Білий колір тексту кнопок */
    border: 1px solid #28a745; /* Зелена рамка кнопок */
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 16px;
}

button:hover {
    background-color: #d63535; /* Червоний фон кнопок при наведенні */
    color: #ffffff; /* Зміна коліру тексту на білий при наведенні */
}

.footer {
    background-color: #000;
    padding: 20px 0px;
    color: #fff;
    text-align: center;
}

</style>
</head>
<body>

<div class="menu">
    <a href="index.php">ГОЛОВНА</a>
    <a href="Категорія.php">МЕНЮ</a>
    <a href="Про нас.php">ПРО НАС</a>
</div>

<div class="container">
    <h1>Вхід в адмін панель</h1>
    <form action="admin.php" method="post">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Увійти</button>
    </form>
</div>
<div class="footer">
    &copy;  Ірина Патика 2024 <br>
     Цей веб-сайт був створений в навчальних цілях.
</body>
</html>
