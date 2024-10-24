<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вариант 4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img style="width: 80px" src="800x400.jpeg" alt="Логотип университета">
        <h1>Галстян Арман Артурович - 231-361 - Лабораторная работа №9, Вариант 4</h1>
    </header>
    <main>
        <?php
            $start_value = -10; // начальное значение аргумента
            $encounting = 100; // количество вычисляемых значений
            $step = 2; // шаг изменения аргумента
            $min_value = -1000; // минимальное значение функции для остановки
            $max_value = 1000; // максимальное значение функции для остановки
            $type = 'A'; // тип верстки ('A', 'B', 'C', 'D', 'E')

            $x = $start_value;
            $values = [];
            for ($i = 0; $i < $encounting; $i++, $x += $step) {
                if ($x <= 10) {
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

            switch ($type) {
                case 'A':
                    foreach ($values as $value) {
                        echo "f({$value['x']}) = {$value['f']}<br>";
                    }
                    break;
                case 'B':
                    echo '<ul>';
                    foreach ($values as $value) {
                        echo "<li>f({$value['x']}) = {$value['f']}</li>";
                    }
                    echo '</ul>';
                    break;
                case 'C':
                    echo '<ol>';
                    foreach ($values as $value) {
                        echo "<li>f({$value['x']}) = {$value['f']}</li>";
                    }
                    echo '</ol>';
                    break;
                case 'D':
                    echo '<table border="1" cellspacing="0" cellpadding="5">';
                    echo '<tr><th>#</th><th>x</th><th>f(x)</th></tr>';
                    foreach ($values as $index => $value) {
                        echo "<tr><td>" . ($index + 1) . "</td><td>{$value['x']}</td><td>{$value['f']}</td></tr>";
                    }
                    echo '</table>';
                    break;
                case 'E':
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
