<?php
// Функция для анализа текста
function analyzeText($text) {
    // Проверка на пустой текст
    if (empty($text)) {
        echo 'Пожалуйста, введите текст для анализа.<br>';
        return;
    }

    // Подсчёт количества символов (UTF-8)
    $charCount = preg_match_all('/./us', $text, $matches) ? count($matches[0]) : 0;
    echo 'Количество символов: ' . $charCount . '<br>';

    // Подсчёт количества букв
    $letterCount = preg_match_all('/\p{L}/u', $text, $matches) ? count($matches[0]) : 0;
    echo 'Количество букв: ' . $letterCount . '<br>';

    // Подсчёт количества строчных букв
    $lowerCount = preg_match_all('/\p{Ll}/u', $text, $matches) ? count($matches[0]) : 0;
    echo 'Количество строчных букв: ' . $lowerCount . '<br>';

    // Подсчёт количества заглавных букв
    $upperCount = preg_match_all('/\p{Lu}/u', $text, $matches) ? count($matches[0]) : 0;
    echo 'Количество заглавных букв: ' . $upperCount . '<br>';

    // Подсчёт количества знаков препинания
    $punctuationCount = preg_match_all('/\p{P}/u', $text, $matches) ? count($matches[0]) : 0;
    echo 'Количество знаков препинания: ' . $punctuationCount . '<br>';

    // Подсчёт количества цифр
    $digitCount = preg_match_all('/\p{N}/u', $text, $matches) ? count($matches[0]) : 0;
    echo 'Количество цифр: ' . $digitCount . '<br>';

    // Подсчёт количества слов
    $wordCount = str_word_count($text, 0, 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя');
    echo 'Количество слов: ' . $wordCount . '<br>';

    // Подсчёт частоты символов
    echo 'Частота символов:<br>';
    $charFrequency = array_count_values(preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY));
    if ($charFrequency) {
        foreach ($charFrequency as $char => $freq) {
            echo htmlspecialchars($char) . ': ' . $freq . '<br>';
        }
    }

    // Подсчёт частоты слов
    echo 'Частота слов:<br>';
    $words = preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
    $wordFrequency = array_count_values($words);
    if ($wordFrequency) {
        foreach ($wordFrequency as $word => $freq) {
            echo htmlspecialchars($word) . ': ' . $freq . '<br>';
        }
    }
}

// Обработка текста пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST["inputText"] ?? '';
    analyzeText($inputText);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Анализ текста</title>
</head>
<body>
    <h1>Анализ текста</h1>
    <form method="post" action="">
        <label for="inputText">Введите текст:</label><br>
        <textarea id="inputText" name="inputText" rows="5" cols="40"></textarea><br>
        <input type="submit" value="Анализировать">
    </form>
</body>
</html>
