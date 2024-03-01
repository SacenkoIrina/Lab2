
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример таблицы в PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>График работы докторов, каб.333</h2>
    <table>
        <tr>
            <th>День недели</th>
            <th>Ф.И.О.</th>
            <th>Часы работы</th>
        </tr>
        <?php
        // Данные для таблицы
        $people = array(
            array("Аксенти Елена Андреевна", "8:00-12:00"),
            array("Петрова Мария Ивановна", "12:00-16:00"),
        );

        // Выводим каждую строку таблицы
        foreach ($people as $person) {
            echo "<tr>";
            echo "<td>{$person[0]}</td>"; // Имя
            echo "<td>{$person[1]}</td>"; // Возраст
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>