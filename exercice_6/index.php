<?php
if (isset($_GET['building'])) {
    $building = $_GET['building'];
} else {
    $building = 'Le paramètre building n\'existe pas';
}

if (isset($_GET ['room'])) {
    $room = $_GET['room'];
} else {
    $room = 'Le paramètre room n\'existe pas';
}

 
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_6 partie 6-php</title>  
    </head>

    <body>
        <h1>exercice_6 partie 6 php</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101
        </p> 
               
        <p><?= 'Bâtiment : '. $building?></p> 
        <p><?= 'Numéro : ' .$room ?></p>
                     
                    
        </p>
    </body>
</html>