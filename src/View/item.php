<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quete MVC</title>
</head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item) : ?>
                <li><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
    </section>
</body>
</html>