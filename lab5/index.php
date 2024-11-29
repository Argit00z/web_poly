<?php
include("header.html");
include("db.php");
$result = mysqli_query($mysql, "SELECT * FROM trainer");

if ($result) {
    echo '<table>';
    echo '<tr><th>Название</th><th>Функция</th><th>Изображение</th></tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['function'] . '</td>';
        echo '<td><img class="img" title="' . $row['name'] . '" src="./images/' . $row['img'] . '" alt="' . $row['name'] . '" /></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Ошибка при извлечении данных: ' . mysqli_error($mysql);
}
?>
</main>
<br>
<a href="add.php" class="btn">Добавить новый термин</a>
</body>
<?php include('footer.html'); ?>
</html>