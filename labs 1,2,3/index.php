<?php include('header.php'); ?>
<main>
    <section style="text-align: center;">
        <img style="width: 300px;" src="<?php echo $imgTag; ?>" alt="My Image">
        
        <table>
            <tr>
                <th>Понедельник</th>
                <th>Вторник</th>
                <th>Среда</th>
            </tr>
            <tr>
                <td>Утренний бег<br>7:00-7:55<br>Все места свободны</td>
                <td>Pilates + stretch<br>11:00-11:55<br>Занято 4 места</td>
                <td>Кинезис<br>11:15-12:10<br>Занято 3 места</td>
            </tr>
            <tr>
                <td>Хатха - йога<br>11:00-11:55<br>Занято 7 мест</td>
                <td>Дыхательная гимнастика<br>12:00-12:55<br>Занято 5 мест</td>
                <td>Велодвиж<br>12:00-12:55<br>Все места свободны</td>
            </tr>
        </table>
    </section>
    <ul style="margin-left: 10px;">
        <?php
        foreach ($fitness_items as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</main>

<?php include 'footer.php';?>