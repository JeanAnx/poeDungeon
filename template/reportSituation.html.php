<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/theme.css">
    <title>Document</title>
</head>
<body>

    <section class="heroCard">

        <h1><?= $character->getName() ?></h1>

        <div class="blocStat">
            <div>Life</div> 
            <progress max=<?= $character->getMaxLife() ?> value=<?= $character->getCurrentLife() ?> ></progress>

            <div><?= $character->getCurrentLife() ?> / <?= $character->getMaxLife() ?> PV</div>
        </div>

        <div class="blocStat">
            <div>Energy</div>
            <div>
                <progress max=<?= $character->getMaxLife() ?> value=<?= $character->getCurrentLife() ?> ></progress>
                <div><?= $character->getCurrentLife() ?> / <?= $character->getMaxLife() ?> PE</div> 
            </div>
        </div>
        <div class="attackDefense">
            <div>
                <h3>Attack</h3>
                <p><?= $character->getAttack() ?></p>
            </div>
            <div>
                <h3>Defense</h3> 
                <p><?= $character->getDefense() ?></p> 
            </div>
        </div>


    </section>

</body>
</html>

