<?php
    $current_page = 'feedback';
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="./style.css">
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
        <section class="feedback">
            <form action="" method="post">
                <label for="name">ФИО:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="source">Откуда узнали о нас:</label><br>
                <label><input type="radio" name="state">Социальные сети</label><br>
                <label><input type="radio" name="state">От друзей</label><br>
                <label><input type="radio" name="state">Реклама</label><br>
                <label for="type">Тип обращения:</label><br>
                <select id="type" name="type">
                    <option value="complaint">Жалоба</option>
                    <option value="proposal">Предложение</option>
                </select><br><br>
                <label for="message">Текст сообщения:</label><br>
                <textarea id="message" name="message" rows="10" cols="50"></textarea><br><br>
                <label for="attachment">Вложения:</label><br>
                <input type="file" id="attachment" name="attachment"><br><br>
                <label for="consent">Даю согласие на обработку персональных данных:</label><br>
                <input type="checkbox" id="consent" name="consent" required><br><br>
                <button type="submit">Отправить</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="container">
            &copy; 2024 My Company. All rights reserved.
        </div>
    </footer>
</body>
</html>