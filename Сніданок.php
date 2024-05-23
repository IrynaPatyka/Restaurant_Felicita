<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style.css'>
    <style>
        body {
            background-color: #ffffff;
            color: #333333;
        }
        .header {
            background-color: #ffffff;
        }
        .nav-item {
            color: #d63535; 
        }
        .sets {
            background-color: #f8f9fa;
        }
        .set-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .set {
            background-color: #28a745;
            color: #ffffff; 
            width: 30%;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .set h2, .set h4, .set p {
            margin-top: 0;
            margin-bottom: 10px;
        }
        .set ul {
            text-align: left;
            margin: 0;
            padding: 0;
        }
        .set ul li {
            list-style-type: none;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #d63535; 
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="tel"],
        .form-container select {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container select {
            appearance: none;
            background-image: url('arrow.svg');
            background-position: right 10px center;
            background-repeat: no-repeat;
            background-size: 15px;
            padding-right: 30px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #d63535; 
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #ab2525; 
        }
        .breakfast h1 {
            color: #d63535; 
        }
    </style>
    <title>Ресторан</title>
</head>
<body>

    <div class='header'>
        <div class='container'>
            <div class='header-line'>
                <div class='header-logo'>
                    <img src="logo.png" alt="Лого">
                </div>
                <div class='nav'>
                    <a class='nav-item' href="index.php">ГОЛОВНА</a>
                    <a class='nav-item' href="Категорія.php">МЕНЮ</a>
                    <a class='nav-item' href="Про нас.php">ПРО НАС</a>    
                
                </div>
                <div id='menu' class='burger-slide disp'>
                    <a class='nav-item block' href="index.php">ГОЛОВНА</a>
                    <a class='nav-item block' href="Категорія.php">МЕНЮ</a>
                    <a class='nav-item block' href="Про нас.php">ПРО НАС</a>     
              
                </div>
            </div>
        </div>
    </div>

    <main>
        <section class="pizza">
            <h1>Сніданок</h1>
        </section>
        <section class="sets">
            <div class="set-container">
                <div class="set">
                    <h2>Сет 1</h2>
                    <h4>Ціна: $15</h4>
                    <ul>
                      <li>Паста карбонара</li>
                      <li>Піца Маргарита</li>
                    </ul>
                    <p>Напій: Кава американо</p>
                    <h4>Інгредієнти:</h4>
                    <ul>
                      <li>Паста карбонара: спагетті, бекон, яйця, пармезан, вершки, часник</li>
                      <li>Піца Маргарита: тісто, томатний соус, моцарела, базилік, оливкова олія</li>
                      <li>Кава американо: кавові зерна, вода</li>
                    </ul>
                </div>
                <div class="set">
                    <h2>Сет 2</h2>
                    <h4>Ціна: $20</h4>
                    <ul>
                      <li>Ласуня з лососем</li>
                      <li>Тунець тартар</li>
                    </ul>
                    <p>Напій: Мохіто</p>
                    <h4>Інгредієнти:</h4>
                    <ul>
                      <li>Ласуня з лососем: лосось, листи ласуні, сир, соус бешамель</li>
                      <li>Тунець тартар: свіжий тунець, соєвий соус, огірок, авокадо, лимон, зелень</li>
                      <li>Мохіто: м'ята, лайм, цукор, сіль, содова</li>
                    </ul>
                </div>
                <div class="set">
                    <h2>Сет 3</h2>
                    <h4>Ціна: $18</h4>
                    <ul>
                      <li>Ризотто з грибами</li>
                      <li>Веганська піца з овочами</li>
                    </ul>
                    <p>Напій: Чай з м'ятою</p>
                    <h4>Інгредієнти:</h4>
                    <ul>
                      <li>Ризотто з грибами: рис, гриби, цибуля, часник, овочевий бульйон, пармезан (опціонально)</li>
                      <li>Веганська піца з овочами: тісто, томатний соус, оливки, печериці, папероні, ароматичні трави</li>
                      <li>Чай з м'ятою: чай, м'ята</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="pizzas">
            <div class="form-container">
                <h2>Зробіть замовлення</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                 
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="flex: 1;">
                            <label for="customer_name">Ім'я:</label><br>
                            <input type="text" id="customer_name" name="customer_name" placeholder="Введіть ваше ім'я" required><br>
                        </div>
                        <div style="flex: 1;">
                            <label for="customer_surname">Прізвище:</label><br>
                            <input type="text" id="customer_surname" name="customer_surname" placeholder="Введіть ваше прізвище" required><br>
                        </div>
                    </div>
                    <label for="customer_phone">Номер телефону:</label><br>
                    <input type="tel" id="customer_phone" name="customer_phone" placeholder="Введіть ваш номер телефону" required><br><br>
                   
                    <label for="order_details">Оберіть сет-меню:</label><br>
                    <select id="order_details" name="order_details" required>
                        <option value="Сет 1">Сет 1</option>
                        <option value="Сет 2">Сет 2</option>
                        <option value="Сет 3">Сет 3</option>
                    </select><br><br>
                    
                    <button type="submit" class="city-btn">Оформити замовлення</button>
                </form>
            </div>
        </section>
    </main>

    <?php
    $host = 'localhost'; 
    $port = '8889'; 
    $dbname = 'restaurant';
    $username = 'root';
    $password = 'root';

    $dsn = "mysql:host=$host;port=$port;dbname=$dbname";

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Помилка з'єднання: " . $e->getMessage();
    }

    // Обробка форми замовлення
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer_name = $_POST["customer_name"];
        $customer_surname = $_POST["customer_surname"];
        $customer_phone = $_POST["customer_phone"];
        $order_details = $_POST["order_details"];

        try {
           
            $sql = "INSERT INTO orders1 (customer_name, customer_surname, phone, dishes, category) VALUES (:customer_name, :customer_surname, :phone, :dishes, 'Сніданок')";

            $stmt = $conn->prepare($sql);

       
            $stmt->bindParam(':customer_name', $customer_name);
            $stmt->bindParam(':customer_surname', $customer_surname);
            $stmt->bindParam(':phone', $customer_phone);
            $stmt->bindParam(':dishes', $order_details);
            
          
            $stmt->execute();

            $orders = [];
        } catch(PDOException $e) {
            echo "Помилка з'єднання: " . $e->getMessage();
        }
    }
    ?>
<div class="footer">
    &copy;  Ірина Патика 2024 <br>
     Цей веб-сайт був створений в навчальних цілях.
</body>
</html>
