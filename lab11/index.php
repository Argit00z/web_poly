<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #main_menu {
            margin: 20px;
            display: flex;
        }
        #main_menu a {
            margin-right: 10px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #ccc;
        }
        #product_menu {
            margin: 20px;
            display: flex;
            flex-direction: column;
            width: 200px;
        }
        #product_menu a {
            margin: 5px 0;
            padding: 10px 20px;
            text-decoration: none;
            border: 1px solid #ccc;
        }
        .selected {
            background-color: #ddd;
        }
        table {
            border-collapse: collapse;
            margin: 10px 0;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .ttRow, .ttSingleRow {
            display: flex;
            flex-direction: column; /* Изменение: вертикальное расположение */
            margin: 10px 0;
        }
        .ttRow {
            flex-direction: row;
            flex-wrap: wrap;
        }
        .ttCell {
            border: 1px solid #000;
            padding: 10px;
            margin: 2px;
            text-align: center;
            width: 50px;
            display: inline-block;
        }
        .ttCell a {
            text-decoration: none;
        }
        #content_wrapper {
            display: flex;
        }
        #main_content {
            flex-grow: 1;
            margin-left: 20px;
        }
    </style>
</head>
<body>
<div id="main_menu" style="background-color: grey;">
    <?php
    $html_type = isset($_GET['html_type']) ? $_GET['html_type'] : '';
    $content = isset($_GET['content']) ? $_GET['content'] : '';

    echo '<a href="?html_type=TABLE' . ($content ? '&content=' . $content : '') . '"';
    if ($html_type == 'TABLE') echo ' class="selected"';
    echo '>Табличная форма</a>';

    echo '<a href="?html_type=DIV' . ($content ? '&content=' . $content : '') . '"';
    if ($html_type == 'DIV') echo ' class="selected"';
    echo '>Блочная форма</a>';
    ?>
</div>

<div id="content_wrapper">
    <div id="product_menu">
        <?php
        echo '<a href="?' . ($html_type ? 'html_type=' . $html_type : '') . '"';
        if (!$content) echo ' class="selected"';
        echo '>Вся таблица умножения</a>';

        for ($i = 2; $i <= 9; $i++) {
            echo '<a href="?content=' . $i . ($html_type ? '&html_type=' . $html_type : '') . '"';
            if ($content == $i) echo ' class="selected"';
            echo '>Таблица умножения на ' . $i . '</a>';
        }
        ?>
    </div>

    <div id="main_content">
        <?php
        function generateTable($number = null, $isTable = true)
        {
            $output = $isTable ? '<table>' : '';

            if ($number === null) {
                // Генерация вертикальной таблицы для всех чисел
                for ($i = 2; $i <= 9; $i++) {
                    $output .= generateColumn($i, $isTable);
                }
            } else {
                $output .= generateColumn($number, $isTable);
            }

            $output .= $isTable ? '</table>' : '';

            return $output;
        }

        function generateColumn($number, $isTable)
        {
            $output = $isTable ? '<tr>' : '<div class="ttRow">'; // Для блочной верстки: .ttRow

            for ($i = 1; $i <= 9; $i++) {
                if ($isTable) {
                    $output .= '<td>';
                } else {
                    $output .= '<div class="ttCell">';
                }
                if ($number <= 9) {
                    $output .= '<a href="?content=' . $number . '&html_type=TABLE">' . $number . '</a>';
                } else {
                    $output .= $number;
                }
                $output .= ' x ';
                if ($i <= 9) {
                    $output .= '<a href="?content=' . $i . '&html_type=TABLE">' . $i . '</a>';
                } else {
                    $output .= $i;
                }
                $output .= ' = ';
                $result = $number * $i;
                if ($result <= 9) {
                    $output .= '<a href="?content=' . $result . '&html_type=TABLE">' . $result . '</a>';
                } else {
                    $output .= $result;
                }
                if ($isTable) {
                    $output .= '</td>';
                } else {
                    $output .= '</div>';  // Закрытие .ttCell
                }
            }

            $output .= $isTable ? '</tr>' : '</div>'; // Закрытие .ttRow

            return $output;
        }

        if ($html_type == 'TABLE' || !$html_type) {
            echo generateTable($content ? (int)$content : null, true);
        } else if ($html_type == 'DIV') {
            echo generateTable($content ? (int)$content : null, false);
        }
        ?>
    </div>
</div>

<div id="footer" style="background-color: grey;">
    <p>Тип верстки: <?php echo $html_type == 'TABLE' ? 'Табличная' : ($html_type == 'DIV' ? 'Блочная' : ''); ?></p>
    <p>Название таблицы: <?php echo $content ? 'Таблица умножения на ' . $content : 'Вся таблица умножения'; ?></p>
    <p>Дата и время: <?php echo date('Y-m-d H:i:s'); ?></p>
</div>
</body>
</html>
