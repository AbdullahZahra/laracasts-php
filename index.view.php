<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tasks for the Day</h1>

    <ul>
        <?php foreach ($task as $feature => $val) : ?>
            <li>
                <strong> <?= ucwords($feature); ?>: </strong> <?= $val; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>