<?php
include("header.php");
include("db.php");
?>
<main>
<?php
$result = mysqli_query($mysql, "SELECT * FROM terms");

if ($result) {
    echo '<table>';
    echo '<tr><th>Термин</th><th>Определение</th><th>Изображение</th></tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['definition'] . '</td>';
        echo '<td><img class="Image" title="' . $row['name'] . '" src="Data/img/' . $row['img'] . '" alt="' . $row['name'] . '" /></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Ошибка при извлечении данных: ' . mysqli_error($mysql);
}
?>
</main>
<br>
<a href="form.php" class="btn">Добавить новый термин</a>
</body>
<?php include('footer.php'); ?>
</html>