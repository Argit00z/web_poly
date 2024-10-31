<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #main_menu, #product_menu {
            margin: 20px;
        }
        #main_menu a, #product_menu a {
            margin-right: 10px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #ccc;
        }
        .selected {
            background-color: #ddd;
        }
        .ttRow, .ttSingleRow {
            display: flex;
            flex-direction: row;
            margin: 10px 0;
        }
        .ttCell {
            border: 1px solid #000;
            padding: 10px;
            margin: 2px;
            text-align: center;
            width: 50px;
        }
        .ttCell a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div id="main_menu">
    <?php
    $html_type = isset($_GET['html_type']) ? $_GET['html_type'] : 'TABLE';
    $content = isset($_GET['content']) ? $_GET['content'] : '';

    echo '<a href="?html_type=TABLE' . ($content ? '&content=' . $content : '') . '"';
    if ($html_type == 'TABLE') echo ' class="selected"';
    echo '>Табличная форма</a>';

    echo '<a href="?html_type=DIV' . ($content ? '&content=' . $content : '') . '"';
    if ($html_type == 'DIV') echo ' class="selected"';
    echo '>Блочная форма</a>';
    ?>
</div>

<div id="product_menu">
    <?php
    echo '<a href="/' . ($html_type ? '?html_type=' . $html_type : '') . '"';
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
        $output = '';

        if ($number === null) {
            for ($i = 2; $i <= 9; $i++) {
                $output .= generateRow($i, $isTable);
            }
        } else {
            $output .= generateRow($number, $isTable);
        }

        return $output;
    }

    function generateRow($number, $isTable)
    {
        $output = $isTable ? '<div class="ttRow">' : '<div class="ttSingleRow">';

        for ($i = 1; $i <= 9; $i++) {
            $output .= '<div class="ttCell">';
            $output .= '<a href="?content=' . $number . '">' . $number . '</a>';
            $output .= ' x ';
            $output .= '<a href="?content=' . $i . '">' . $i . '</a>';
            $output .= ' = ';
            $output .= '<a href="?content=' . ($number * $i) . '">' . ($number * $i) . '</a>';
            $output .= '</div>';
        }

        $output .= '</div>';

        return $output;
    }

    if ($html_type == 'TABLE') {
        echo generateTable($content ? (int)$content : null, true);
    } else {
        echo generateTable($content ? (int)$content : null, false);
    }
    ?>
</div>

<div id="footer">
    <p>Тип верстки: <?php echo $html_type == 'TABLE' ? 'Табличная' : 'Блочная'; ?></p>
    <p>Название таблицы: <?php echo $content ? 'Таблица умножения на ' . $content : 'Вся таблица умножения'; ?></p>
    <p>Дата и время: <?php echo date('Y-m-d H:i:s'); ?></p>
</div>
</body>
</html>
