<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Description category</title>
</head>
<body>
<main>
    <h1>Category <?= $category['category'] ?></h1>
    <ul>
        <li>Id : <?= $category['id'] ?></li>
    </ul>
    <a href='/categories'>Back to list</a>
</main>
</body>
</html>