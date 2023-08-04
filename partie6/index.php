<?php
    $age = null
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 6</title>
</head>

<body>
    <header>
        <h1>Conditions php</h1>
    </header>
    <main>
        <h3>Traduire ce code avec des if et des else : <br>
        echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
        </h3>
        <div>
            <?php
                if($age >= 18){
                    echo "Tu es majeur";
                }else{
                    echo "Tu n'es pas majeur";
                }
            ?>
        </div>
    </main>
</body>

</html>