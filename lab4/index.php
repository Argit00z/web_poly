<?php
include 'header.html';

$name = isset($_GET['name']) ? $_GET['name'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$source = isset($_GET['source']) ? $_GET['source'] : '';
?>
<form action="home.php" method="post">
    <label for="name">ФИО:</label>
    <input style="margin-bottom: 10px" type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" required><br>
    
    <label for="email">Ваш е‐майл:</label>
    <input style="margin-bottom: 10px" type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="example@example.com" required><br>
    
    <label style="top: 10px" for="message">Сообщение:</label>
    <textarea  id="message" name="message" required></textarea><br>
    
    <label style="margin-top: 15px" for="category">Тема обращения:</label>
    <select style="margin-bottom: 10px" id="category" name="category" required>
        <option value="propose">Предложение</option>
        <option value="complaint">Жалоба</option>
    </select><br>
    
    <label for="agreement">
        <input type="checkbox" id="agreement" name="agreement" required> Даю согласие на обработку данных
    </label><br>
    
    <label>Источник:</label>
    <label for="internet">
        <input type="radio" id="internet" name="source" value="internet" <?= $source == 'internet' ? 'checked' : '' ?> required> Реклама из интернета
    </label>
    <label for="friends">
        <input style="margin-bottom: 10px" type="radio" id="friends" name="source" value="friends" <?= $source == 'friends' ? 'checked' : '' ?> required> Рассказали друзья
    </label><br>
    
    <button type="submit">Отправить</button>
</form>
</body>
</html>
