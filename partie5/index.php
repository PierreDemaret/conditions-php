<?php
    $gender = true
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 5</title>
</head>

<body>
    <header>
        <h1>Conditions php</h1>
    </header>
    <main>
        <h3>Traduire ce code avec des if et des else : <br>
      "echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'";
        </h3>
        <div>
            <?php
                if($gender != true){
                    echo "C'est une développeuse !!!";
                }else{
                    echo "C'est un développeur !!!";
                }
            ?>
        </div>
    </main>
</body>

</html>