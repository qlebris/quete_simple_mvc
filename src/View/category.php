<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories Quete MVC</title>
</head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><a href ='/category/<?= $category['id']?>'><?= $category['category'] ?></a></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>