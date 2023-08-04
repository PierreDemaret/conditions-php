<?php
    $isEasy = false;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 2</title>
</head>

<body>
    <header>
        <h1>Conditions php</h1>
    </header>
    <main>
        <h3>Créer une variable isEasy de type booléan et l'initialiser avec une valeur. <br>
        Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. <br>
        Bonus : L'écrire de deux manières différentes.
        </h3>
        <div>
            <?php
            //($isEasy == true) <=> ($isEasy)
                if($isEasy == true){
                    echo "C'est facile";
                }else{
                    echo "C'est difficile";
                }
            ?>
        </div>
    </main>
</body>

</html>