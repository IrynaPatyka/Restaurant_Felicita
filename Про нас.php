<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <title>Про нас</title>
    <style>
        
        body {
            background-color: #ffffff;
            color: #333333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #ffffff;
            padding: 10px 0;
            border-bottom: 2px solid #ddd;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-logo img {
            max-width: 150px;
        }
        .nav {
            display: flex;
            gap: 20px;
        }
        .nav-item {
            color: #d63535; 
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        .nav-item:hover {
            color: #a92323;
        }

        /* Стилі для кухарів */
        .staff-header {
            background-color: #d32f2f; 
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .staff-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            background-color: #fff; 
        }
        .staff-member {
            background-color: #4caf50; 
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            padding: 20px;
            width: 400px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
            text-align: center;
        }
        .staff-member img {
            border-radius: 50%;
            width: 200px; 
            height: 200px; 
            object-fit: cover;
        }
        .staff-member h2 {
            margin: 10px 0 5px;
        }
        .staff-member h3 {
            margin: 5px 0;
            color: #ffeb3b; 
        }
        .staff-member p {
            font-size: 16px; 
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-logo">
                <img src="logo.png" alt="Лого">
            </div>
            <div class="nav">
                <a class="nav-item" href="index.php">ГОЛОВНА</a>
                <a class="nav-item" href="Категорія.php">МЕНЮ</a>
                <a class="nav-item" href="Про нас.php">ПРО НАС</a>
            </div>
        </div>
    </div>

    <div class="staff-header">
        <h1>Познайомтеся з нашим персоналом</h1>
    </div>
    
    <div class="staff-container">
 <!-- ---------------------1---------------------------->
        <div class="staff-member">
            <img src="МаріоРоссі.jpg" alt="МаріоРоссі">
            <h2>Маріо Россі</h2>
            <h3>Шеф-кухар</h3>
            <p>Марко - справжній маг кулінарного мистецтва. Його страви - це симфонія смаку, а в кожній страві відчувається його страсть до кулінарії та любов до італійської кухні.</p>
        </div>
 <!---------------- 2------------------------------->
        <div class="staff-member">
            <img src="Лука Бертоні.jpg" alt="Лука Бертоні">
            <h2>Лука Бертоні</h2>
            <h3>Асистент шеф-кухаря</h3>
            <p>Лука - енергійна та завжди готова допомогти рука на кухні. Він є невід'ємною частиною команди та завжди вміло виконує будь-які завдання шеф-кухаря.</p>
        </div>
 <!---------------- 3------------------------------->
        <div class="staff-member">
            <img src="Алессіо Романо.jpg" alt="Алессіо Романо">
            <h2>Алессіо Романо</h2>
            <h3>Офіціант</h3>
            <p>Алессіо - майстер гостинності, завжди з усмішкою готовий прийняти гостей та забезпечити їм найкращий сервіс. Його ввічливість та увага до деталей роблять кожен візит у ресторан незабутнім.</p>
        </div>
 <!---------------- 4------------------------------->
        <div class="staff-member">
            <img src="Софія Беллуччі.jpg" alt="Софія Беллуччі">
            <h2>Софія Беллуччі</h2>
            <h3>Бариста</h3>
            <p> Софія - артистка кави, яка створює справжній шедевр кожного разу, коли вона береться за кавову чашку. Її напої - це справжнє задоволення для всіх кавоманів.</p>
            </div>
 <!---------------- 5------------------------------->
        <div class="staff-member">
            <img src="Енріко Рікардо.jpg" alt="Енріко Рікардо">
            <h2>Енріко Рікардо</h2>
            <h3>Пекар</h3>
            <p>Енріко - творець чудового хліба та випічки, яка підкорює серця гостей ресторану. Його вміння працювати з тістом - це справжнє мистецтво.</p>
            </div>
  <!---------------- 6------------------------------->
        <div class="staff-member">
                 <img src="Ларіса Сантіні.jpg" alt="Ларіса Сантіні">
                <h2>Ларіса Сантіні</h2>
                <h3>Помічник офіціанта</h3>
                <p>Ларіса - надійна підтримка для офіціантів, яка завжди готова прийти на допомогу та зробити робочий день гладким та безпроблемним.</p>
                </div>
<!---------------- 7------------------------------->
        <div class="staff-member">
            <img src="Джованні Феррарі.jpg" alt="Джованні Феррарі">
            <h2>Джованні Феррарі</h2>
            <h3>Помічник баристи</h3>
            <p>Джованні - експерт з кави, який завжди прагне подарувати гостям ресторану найсмачніший кавовий досвід. Він володіє секретами кожного кавового зерна та знає, як з ними працювати.</p>
            </div>
<!---------------- 8------------------------------->
        <div class="staff-member">
            <img src="Марія Россі.jpg" alt="Марія Россі">
            <h2>Марія Россі</h2>
            <h3>Митар</h3>
            <p>Марія - відповідальна та завжди на сторожі чистоти в кухні. Її працьовитість та уважність роблять кухню завжди чистою та організованою.</p>
            </div>
 <!---------------- 9------------------------------->
        <div class="staff-member">
            <img src="Луїджі Де Лука.jpg" alt="Луїджі Де Лука">
            <h2>Луїджі Де Лука</h2>
            <h3>Адміністратор</h3>
            <p>Луїджі - майстер організації та координації, який завжди знає, як створити комфортну та затишну атмосферу для гостей. Його досвід та професіоналізм роблять його найкращим керівником ресторану.</p>
            </div>
            </div>
            <div class="footer">
    &copy;  Ірина Патика 2024 <br>
     Цей веб-сайт був створений в навчальних цілях.
</body>
</html>
