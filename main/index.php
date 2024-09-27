<?php
$current_page = 'home';
$title = "Моя домашняя страница";

date_default_timezone_set('Europe/Moscow');
$date = date("d.m.Y в H-i:s");



$s = date("s");

$os = $s % 2;

if ($os == 0) {
    $name = "./images/trenajer.jpg";
} else {
    $name = "./images/fitness-trainer-3-min.jpg";
}

$imgTag = $name;

$fitness_items = ['Гиря', 'беговая дорожка', 'турник']

 ?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1 class="title">Fitness</h1>
    
    <ul class="nav-menu">
        
        <li>
                        <a href="<?php
                        // Переменные для ссылки
                        $name = 'Главная'; // текст ссылки
                        $link = 'index.php'; // адрес ссылки
                        
                        // Выводим адрес ссылки
                        echo $link;
                        ?>" <?php
                        // Если это текущая страница, добавляем класс "selected_menu"
                        if ($current_page == 'home') {
                            echo ' class="selected_menu"';
                        }
                        ?>>
                            <?php
                            // Выводим текст ссылки
                            echo $name;
                            ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        // Переменные для ссылки
                        $name = 'Войти'; // текст ссылки
                        $link = 'login.php'; // адрес ссылки
                        // Выводим адрес ссылки
                        echo $link;
                        ?>" <?php
                        // Если это текущая страница, добавляем класс "selected_menu"
                        if ($current_page =='login') {
                            echo ' class="selected_menu"';
                        }
                        ?>>
                            <?php
                            // Выводим текст ссылки
                            echo $name;
                            ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        // Переменные для ссылки
                        $name = 'Обратная связь'; // текст ссылки
                        $link = 'feedback.php'; // адрес ссылки
                        
                        // Выводим адрес ссылки
                        echo $link;
                        ?>" <?php
                        // Если это текущая страница, добавляем класс "selected_menu"
                        if ($current_page == 'feedback') {
                            echo ' class="selected_menu"';
                        }
                        ?>>
                            <?php
                            // Выводим текст ссылки
                            echo $name;
                            ?>
                        </a>
                    </li>
        </ul>
</header>

<main>
    <section style="text-align: center;">
        <img src="<?php echo $imgTag; ?>" alt="My Image">
        
        <table>
            <tr>
                <th>Понедельник</th>
                <th>Вторник</th>
                <th>Среда</th>
            </tr>
            <tr>
                <td>Утренний бег<br>7:00-7:55<br>Все места свободны</td>
                <td>Pilates + stretch<br>11:00-11:55<br>Занято 4 места</td>
                <td>Кинезис<br>11:15-12:10<br>Занято 3 места</td>
            </tr>
            <tr>
                <td>Хатха - йога<br>11:00-11:55<br>Занято 7 мест</td>
                <td>Дыхательная гимнастика<br>12:00-12:55<br>Занято 5 мест</td>
                <td>Велодвиж<br>12:00-12:55<br>Все места свободны</td>
            </tr>
        </table>
    </section>
    <ul style="margin-left: 10px;">
        <?php
        foreach ($fitness_items as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</main>

<footer>
    <div class="container">
        &copy; 2024 My Company. All rights reserved.<br>
        Сформировано <?php echo $date; ?>
    </div>
</footer>

</body>
</html>