<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>brawl</title>
</head>
<body>
<ul>
    <?php foreach ($fightReport as $action): ?>
        <li><?= $action ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>