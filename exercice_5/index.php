<?php
if (isset($_GET['week'])) {
    $week = $_GET['week'];
} else {
    $week = 'Le paramètre week n\'existe pas';
}

 
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_5 partie 6-php</title>  
    </head>

    <body>
        <h1>exercice_5 partie 6 php</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12
        </p> 
               
        <p><?= 'Semaine : '. $week?></p> 
                     
                    
        </p>
    </body>
</html>