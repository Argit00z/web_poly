<?php
define('DB_HOST', 'localhost'); //Адрес
define('DB_USER', 'root'); //Имя пользователя
define('DB_PASSWORD', ''); //Пароль
define('DB_NAME', 'fitness'); //Имя БД



try {
    $mysql = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
    exit();
}
// if (!$mysql) {
//     die("Error connecting to database");
//     exit();
// }
?>