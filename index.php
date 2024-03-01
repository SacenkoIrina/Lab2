<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table with Current Date</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Создаем массив с названиями дней недели
$Week = array(
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
);

// Выводим заголовок таблицы
echo "<h2>График работы докторов, каб.333</h2>";
echo "<table>";
echo "<tr><th>День недели</th><th>Ф.И.О.</th><th>Часы работы</th></tr>";

// Получаем текущий день недели (1 - Понедельник, 7 - Воскресенье)
$currentDayOfWeek = date('N');

// Выводим данные для текущего и следующих 7 дней
for ($i = 0; $i < 7; $i++) {
    $dayOfWeek = ($currentDayOfWeek + $i) % 7; // Получаем номер дня недели в пределах 1-7
    $dayName = $Week[$dayOfWeek];

    // Выводим строку таблицы с днем недели
    echo "<tr>";
    echo "<td>$dayName</td>";
    echo "<td>Имя</td>"; // Ф.И.О.
    echo "<td>Часы работы</td>"; // Часы работы
    echo "</tr>";
}

// Закрываем таблицу
echo "</table>";
?>

</body>
</html>
