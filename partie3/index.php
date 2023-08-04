<?php
    $gender = true;
    $age = 16;
    // true = homme
    // false = femme
    if($gender == true){
        if($age > 18){
            $result = 'Vous êtes un homme et vous êtes majeur';
        } else {
            $result = 'Vous êtes un homme et vous êtes mineur';
        }
    } elseif ($gender == false){
        if($age > 18){
            $result = 'Vous êtes une femme et vous êtes majeure';
        } else {
            $result = 'Vous êtes une femme et vous êtes mineur';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 3</title>
</head>

<body>
    <header>
        <h1>Conditions php</h1>
    </header>
    <main>
        <h3>Créer deux variables age et gender. La variable gender peut prendre comme valeur : <br>
            Homme <br>
            Femme <br>

            En fonction de l'âge et du genre afficher la phrase correspondante :<br>
            Vous êtes un homme et vous êtes majeur <br>
            Vous êtes un homme et vous êtes mineur <br>
            Vous êtes une femme et vous êtes majeure <br>
            Vous êtes une femme et vous êtes mineur <br>
            Gérer tous les cas.
        </h3>
        <div>
            <?php
                echo $result;
            ?>
        </div>
    </main>
</body>

</html>