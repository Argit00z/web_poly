<?php
$current_page = 'home';
$title = "Моя домашняя страница";

date_default_timezone_set('Europe/Moscow');
$date = date("d.m.Y в H-i:s");



$s = date("s");

$os = $s % 2;

if ($os == 0) {
    $name = "./images/card1.jpg";
} else {
    $name = "./images/card2.webp";
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