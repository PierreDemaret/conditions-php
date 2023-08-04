<?php
$age = 16;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 1</title>
</head>

<body>
    <header>
        <h1>Conditions php</h1>
    </header>
    <main>
        <h3>Créer une variable age et l'initialiser avec une valeur. <br>
            Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes
            mineur.
        </h3>
        <div>
            <?php
                if($age < 18){
                    echo "vous êtes mineur";
                } else {
                    echo "Vous êtes majeur";
                }
            ?>
        </div>
    </main>
</body>

</html>