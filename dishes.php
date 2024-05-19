<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='header'>
        <!-- Ваш код для верхньої частини сторінки (навігація, логотип і т.д.) -->
    </div>

    <main>
        <section class="menu">
            <h1>Меню</h1>
            <?php
            // Підключення до бази даних
        
            $dsn = 'mysql:host=localhost:8889;dbname=restaurant';
            $username = 'root';
            $password = 'root';


            $conn = new mysqli($servername, $username, $password, $dbname);

            // Перевірка з'єднання
            if ($conn->connect_error) {
                die("Помилка з'єднання з базою даних: " . $conn->connect_error);
            }

            // SQL запит для вибору всіх страв
            $sql = "SELECT * FROM dishes";
            $result = $conn->query($sql);

            // Виведення страв
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='dish'>";
                    echo "<h2>" . $row["dish_name"] . "</h2>";
                    echo "<p>Інгредієнти: " . $row["ingredients"] . "</p>";
                    echo "<p>Ціна: " . $row["price"] . " $</p>";
                    echo "<a href='order_form.php?dish_id=" . $row["dish_id"] . "' class='button'>Замовити</a>";
                    echo "</div>";
                }
            } else {
                echo "Немає страв у меню.";
            }

            $conn->close();
            ?>
        </section>
    </main>

    <div class='footer'>
        <!-- Ваш код для нижньої частини сторінки -->
    </div>
</body>
</html>
