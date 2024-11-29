<?php
function analyzeText($text) {
    if (empty($text)) {
        echo '<p style="color:red;">Нет текста для анализа.</p>';
        return;
    }

    echo 'Исходный текст: <br><div style="border: 1px solid blue; padding: 10px; display: inline-block;"><i style="color:blue;">' . htmlspecialchars($text) . '</i></div><br>';

    echo '<table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;">';

  
    $charCount = preg_match_all('/./us', $text, $matches) ? count($matches[0]) : 0;
    echo '<tr><td>Количество символов</td><td>' . $charCount . '</td></tr>';

    $letterCount = preg_match_all('/\p{L}/u', $text, $matches) ? count($matches[0]) : 0;
    echo '<tr><td>Количество букв</td><td>' . $letterCount . '</td></tr>';

  
    $lowerCount = preg_match_all('/\p{Ll}/u', $text, $matches) ? count($matches[0]) : 0;
    echo '<tr><td>Количество строчных букв</td><td>' . $lowerCount . '</td></tr>';

    $upperCount = preg_match_all('/\p{Lu}/u', $text, $matches) ? count($matches[0]) : 0;
    echo '<tr><td>Количество заглавных букв</td><td>' . $upperCount . '</td></tr>';

 
    $punctuationCount = preg_match_all('/\p{P}/u', $text, $matches) ? count($matches[0]) : 0;
    echo '<tr><td>Количество знаков препинания</td><td>' . $punctuationCount . '</td></tr>';

    
    $digitCount = preg_match_all('/\p{N}/u', $text, $matches) ? count($matches[0]) : 0;
    echo '<tr><td>Количество цифр</td><td>' . $digitCount . '</td></tr>';

    
    $wordCount = str_word_count($text, 0, 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя');
    echo '<tr><td>Количество слов</td><td>' . $wordCount . '</td></tr>';

    
    echo '<tr><td>Частота символов</td><td>';
    $charFrequency = array_count_values(preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY));
    if ($charFrequency) {
        foreach ($charFrequency as $char => $freq) {
            echo htmlspecialchars($char) . ': ' . $freq . '<br>';
        }
    }
    echo '</td></tr>';

    
    echo '<tr><td>Частота слов</td><td>';
    $words = preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
    $wordFrequency = array_count_values($words);
    
    
    if ($wordFrequency) {
        ksort($wordFrequency);
        foreach ($wordFrequency as $word => $freq) {
            echo htmlspecialchars($word) . ': ' . $freq . '<br>';
        }
    }
    echo '</td></tr>';

    echo '</table>';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат анализа текста</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
        .main{
            width: 500px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;s
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Результат анализа текста</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputText = $_POST["inputText"] ?? '';
            analyzeText($inputText);
        }
        ?>
        <br>
        <a href="index.html">Другой анализ</a>
    </div>
</body>
</html>
