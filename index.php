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
// Создаем массив с названиями месяцев
$months = array(
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь'
);

// Получаем текущий месяц и год
$currentMonth = date('n');
$currentYear = date('Y');

// Выводим заголовок таблицы
echo "<h2>Таблица с текущей датой</h2>";
echo "<table>";
echo "<tr><th>Месяц</th><th>Год</th><th>Текущая дата</th></tr>";

// Выводим данные для текущего и следующих 12 месяцев
for ($i = 0; $i < 12; $i++) {
    $month = $currentMonth + $i;
    $year = $currentYear;

    // Если месяц больше 12, увеличиваем год и вычитаем 12 из месяца
    if ($month > 12) {
        $month -= 12;
        $year++;
    }

    // Форматируем дату в виде месяца, года и текущей даты
    $date = date('d', strtotime("last day of $months[$month] $year"))." $months[$month] $year";

    // Выводим строку таблицы
    echo "<tr>";
    echo "<td>$months[$month]</td>";
    echo "<td>$year</td>";
    echo "<td>$date</td>";
    echo "</tr>";
}

// Закрываем таблицу
echo "</table>";
?>

</body>
</html>