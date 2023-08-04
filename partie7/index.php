<?php
    $isOk = true
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 7</title>
</head>

<body>
    <header>
        <h1>Conditions php</h1>
    </header>
    <main>
        <h3>Traduire ce code avec des if et des else : <br>
        echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
        </h3>
        <div>
            <?php
                if($isOk == false){
                    echo "C'est pas bon !!!";
                }else{
                    echo "C'est bon !";
                }
            ?>
        </div>
    </main>
</body>

</html>