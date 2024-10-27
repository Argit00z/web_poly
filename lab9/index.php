<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вариант 4</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img style="width: 100px; float: left;" src="800x400.jpeg" alt="Логотип университета">
        <h1>Галстян Арман Артурович - 231-361 - Лабораторная работа №9, Вариант 4</h1>
    </header>
    <main>
        <?php
            $start_value = -5; // начальное значение аргумента
            $encounting = 100; // количество вычисляемых значений
            $step = 2; // шаг изменения аргумента
            $min_value = -1000; // минимальное значение функции для остановки
            $max_value = 1000; // максимальное значение функции для остановки
            $type = 'Блочная';

            $x = $start_value;
            $values = [];
            for ($i = 0; $i < $encounting; $i++, $x += $step) {
                if ($x <= 10) {
                    if ($x == 5) {
                        $f = "error";
                        continue;
                    }
                    $f = (5 - $x) / (1 - $x / 5);
                } elseif ($x < 20) {
                    $f = $x * $x / 4 + 7;
                } else {
                    $f = 2 * $x - 21;
                }
                $f = round($f, 3);
                if ($f == INF || $f == -INF || is_nan($f)) {
                    $f = 'error';
                
                }
                if ($f != 'error' && ($f <= $min_value || $f >= $max_value)) {
                    break;
                }
                $values[] = ['x' => $x, 'f' => $f];
            }
            
            // if ($f == "error") {
            //     switch ($type) {
            //         case 'Простая верстка текстом':
            //             echo "f($x) = error<br>";
            //             break;
            //         case 'Маркированный список':
            //             if ($i == 0) echo "<ul>";
            //             echo "<li>f($x) = error</li>";
            //             echo "</ul>";
            //             break;
            //         case 'Нумерованный список':
            //             if ($i == 0) echo "<ol>";
            //             echo "<li>f($x) = error</li>";
            //             echo "</ol>";
            //             break;
            //         case 'Табличная верстка':
            //             if ($i == 0) echo "<table border='1' style='border-collapse: collapse; margin-top: 10px'><tr><th>№</th><th>x</th><th>f(x)</th></tr>";
            //             echo "<tr><td>" . ($i + 1) . "</td><td>$x</td><td>error</td></tr>";
            //             echo "</table>";
            //             break;
            //         case 'Блочная верстка':
            //             echo "<div style='float: left; border: 2px solid red; margin-top: 10px; margin-right: 8px;'>f($x) = error</div>";
            //             break;
            //         }
            //         break;
            //     }
           
            switch ($type) {
                case 'Простая':
                    foreach ($values as $value) {
                        echo "f({$value['x']}) = {$value['f']}<br>";
                    }
                    break;
                case 'Ненумерованный список':
                    echo '<ul>';
                    foreach ($values as $value) {
                        echo "<li>f({$value['x']}) = {$value['f']}</li>";
                    }
                    echo '</ul>';
                    break;
                case 'Нумерованный список':
                    echo '<ol>';
                    foreach ($values as $value) {
                        echo "<li>f({$value['x']}) = {$value['f']}</li>";
                    }
                    echo '</ol>';
                    break;
                case 'Таблица':
                    echo '<table border="1" cellspacing="0" cellpadding="5">';
                    echo '<tr><th>#</th><th>x</th><th>f(x)</th></tr>';
                    foreach ($values as $index => $value) {
                        echo "<tr><td>" . ($index + 1) . "</td><td>{$value['x']}</td><td>{$value['f']}</td></tr>";
                    }
                    echo '</table>';
                    break;
                case 'Блочная':
                    foreach ($values as $value) {
                        echo "<div style='float: left; border: 2px solid red; margin-right: 8px; padding: 5px;'>f({$value['x']}) = {$value['f']}</div>";
                    }
                    echo '<div style="clear: both;"></div>';
                    break;
            }

            $f_values = array_filter(array_column($values, 'f'), fn($v) => $v != 'error');
            if (count($f_values) > 0) {
                $max_f = max($f_values);
                $min_f = min($f_values);
                $sum_f = array_sum($f_values);
                $avg_f = $sum_f / count($f_values);

                echo "<br>Максимальное значение функции: " . round($max_f, 3);
                echo "<br>Минимальное значение функции: " . round($min_f, 3);
                echo "<br>Среднее арифметическое всех значений функции: " . round($avg_f, 3);
                echo "<br>Сумма всех значений функции: " . round($sum_f, 3);
            } else {
                echo "<br>Нет корректных значений функции для вычислений.";
            }
        ?>
    </main>
    <footer>
        <p>Тип верстки: <?php echo $type; ?></p>
    </footer>
</body>
</html>
