<?php

$title = "Моя домашняя страница";

date_default_timezone_set('Europe/Moscow');
$date = date("d.m.Y в H-i:s");

$menuItems = [
    ['link' => './index.php', 'text' => 'Главная'],
    ['link' => './feedback.php', 'text' => 'Обратная связь'],
    ['link' => './login.php', 'text' => 'Авторизация']
];

$s = date("s");

$os = $s % 2;

if ($os == 0) {
    $name = "./images/trenajer.jpg";
} else {
    $name = "./images/fitness-trainer-3-min.jpg";
}

$imgTag = $name;
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
        <?php foreach ($menuItems as $item): ?>
            <li class="nav-item"><a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a></li>
        <?php endforeach; ?>
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
</main>

<footer>
    <div class="container">
        &copy; 2024 My Company. All rights reserved.<br>
        Сформировано <?php echo $date; ?>
    </div>
</footer>

</body>
</html>