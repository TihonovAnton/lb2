<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "db.php";
    $items = get_items_by_vendor($_GET['vendor']);
    ?>
    <ol>
        <?php foreach($items as $item) : ?>
            <li>
                <?= $item['name'] ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>