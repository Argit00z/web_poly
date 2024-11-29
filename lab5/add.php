<?php
include("header.html");
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $function = $_POST['function'];
    $img = $_FILES['img']['name'];

    // Загрузка изображения в папку
    move_uploaded_file($_FILES['img']['tmp_name'], './images/' . $img);

    // SQL-запрос для вставки термина, определения и изображения
    $query = "INSERT INTO trainer (name, function, img) VALUES ('$name', '$function', '$img')";

    if (mysqli_query($mysql, $query)) {
        echo "Новый тренажер успешно добавлен!";

    } else {
        echo "Ошибка при добавлении тренажера: " . mysqli_error($mysql);
    }
}
?>



<h2>Добавить новый тренажер</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="name">Название тренажера:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="function">Описание:</label><br>
    <textarea id="function" name="function" required></textarea><br><br>
    
    <label for="image">Изображение:</label><br>
    <input type="file" id="img" name="img" accept="img/*" required><br><br>
    
    <input type="submit" value="Добавить тренажер">
</form>
</main>
</body>

<?php include("footer.html");?>
</html>
