<?php
if (isset($_GET['language'])) {    //on aurait pu ne faire qu'un seul if avec une , ou && entre les 2 GET   
    $language = $_GET['language'];
} else {
    $language = 'Le paramètre language n\'existe pas';
}
if (isset($_GET ['server'])){
    $server = $_GET['server'];
    
    }else {
       $server = 'Le paramètre server n\'existe pas';
       
    }

?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_4 partie 6-php</title>  
    </head>

    <body>
        <h1>exercice_4 partie 6 php</h1>
        <p>Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
            index.php?language=PHP&server=LAMP
        </p> 
               
        <p><?= 'Langage : '. $language?></p> 
         <p><?= 'Serveur : '. $server?></p>              
                    
        </p>
    </body>
</html>