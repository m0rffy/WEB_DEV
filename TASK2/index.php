<?php
// Данные
$items = array(
    array(
        'name' => 'Товар 1',
        'image' => 'https://via.placeholder.com/100',
        'description' => 'Описание товара 1'
    ),
    array(
        'name' => 'Товар 2',
        'image' => null,
        'description' => 'Описание товара 2'
    ),
    array(
        'name' => 'Товар 3',
        'image' => 'https://via.placeholder.com/100',
        'description' => null
    ),
    array(
        'name' => 'Товар 4',
        'image' => null,
        'description' => null
    )
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        img { max-width: 100px; }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Название</th>
                <th>Изображение</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Проходим по всем элементам массива
            foreach ($items as $item) {
                echo '<tr>';

                // Название
                if (isset($item['name']) && $item['name'] !== '') {
                    $name = $item['name'];
                } else {
                    $name = '';
                }
                echo '<td>' . htmlspecialchars($name) . '</td>';

                // Изображение
                if (isset($item['image']) && $item['image'] !== '') {
                    $image = $item['image'];
                    echo '<td><img src="' . htmlspecialchars($image) . '" alt="Image"></td>';
                } else {
                    echo '<td>—</td>';
                }

                // Описание
                if (isset($item['description']) && $item['description'] !== '') {
                    $desc = $item['description'];
                    echo '<td>' . htmlspecialchars($desc) . '</td>';
                } else {
                    echo '<td>—</td>';
                }

                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>