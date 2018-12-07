<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/theme.css">
    <title>Création Personnage</title>
</head>
<body>

    <main>
    
        <form class="createCharacter" method="post">
        
            <div>
            <label for="name">Nom</label>
            <input required type="text" name="name" id="name" placeholder="Nom du personnage">
            </div>

            <div>
                <label for="personnage-type">Classe</label>
                <select name="type" id="personnage-type" required>
                    <option value="" selected>--</option>
                    <option value="warrior">Guerrier</option>
                    <option value="thief">Voleur</option>
                    <option value="mage">Magicien</option>
                </select>
            </div>

            <button type="submit"><i class="fas fa-gopuram"></i></button>
        
        </form>

    </main>
    
</body>
</html>