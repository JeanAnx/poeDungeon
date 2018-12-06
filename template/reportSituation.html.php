<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css">
    <title>Document</title>
</head>
<body>

    <section class="heroCard">

        <h1><?= $character->getName() ?></h1>

        <div class="blocStat">
            <div><i class="fas fa-heart"></i> Life</div> 
            <progress max=<?= $character->getMaxLife() ?> value=<?= $character->getCurrentLife() ?> ></progress>

            <div><?= $character->getCurrentLife() ?> / <?= $character->getMaxLife() ?> PV</div>
        </div>

        <div class="blocStat">
            <div><i class="fas fa-bolt"></i> Energy</div>
            <div>
                <progress max=<?= $character->getMaxLife() ?> value=<?= $character->getCurrentLife() ?> ></progress>
                <div><?= $character->getCurrentLife() ?> / <?= $character->getMaxLife() ?> PE</div> 
            </div>
        </div>
        <div class="attackDefense">
            <div>
                <h3><i class="fas fa-fist-raised"></i></h3>
                <p><?= $character->getAttack() ?></p>
            </div>
            <div>
                <h3><i class="fas fa-shield-alt"></i></h3> 
                <p><?= $character->getDefense() ?></p> 
            </div>
        </div>


    </section>

    <nav>
        <a href="home">Home</a>
        <a href="create">Créer son personnage</a>
    </nav>

</body>
</html>

