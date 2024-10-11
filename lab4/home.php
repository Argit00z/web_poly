<?php
include 'header.html';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $category = htmlspecialchars($_POST['category']);
    $source = htmlspecialchars($_POST['source']);
    
    echo "<p>Здравствуйте, $name</p>";
    
    if ($category == 'propose') {
        echo "<p>Спасибо за ваше предложение:</p>";
    } else {
        echo "<p>Мы рассмотрим Вашу жалобу:</p>";
    }
    
    echo "<textarea readonly>$message</textarea><br>";
    
    if (!empty($_POST['attachment'])) {
        echo "Вы приложили следующий файл: " . htmlspecialchars($_POST['attachment']) . "<br>";
    }
    
    echo '<a class="btn" href="index.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&source=' . urlencode($source) . '">Заполнить снова</a>';
}
?>
</body>
</html>
