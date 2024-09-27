<?php
    $current_page = 'login';
 ?>
<html lang="ru"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма аутентификации</title>
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
        <section class="login">
            <form action="" method="post">
                <label for="login">Логин:</label><br>
                <input type="text" id="login" name="login" required><br><br>
                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <label for="rememberMe">Запомнить меня:</label><br>
                <input type="checkbox" id="rememberMe" name="rememberMe"><br><br>
                <button type="submit">Войти</button>
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