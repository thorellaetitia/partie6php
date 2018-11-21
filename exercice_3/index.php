<?php
if (isset($_GET['startDate'])) {
    $startDate = $_GET['startDate'];
} else {
    $startDate= 'Le paramètre startDate n\'existe pas';
}
if (isset($_GET ['endDate'])){
    $endDate = $_GET['endDate'];
    
    }else {
       $endDate = 'veuillez renseigner le champ endDate';
       
    }

?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_3 partie 6-php</title>  
    </head>

    <body>
        <h1>exercice_3 partie 6 php</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016
        </p> 
               
        <p><?= 'Date de début : '. $startDate?></p> 
         <p><?= 'Date de fin : '. $endDate?></p>              
                    
        </p>
    </body>
</html>