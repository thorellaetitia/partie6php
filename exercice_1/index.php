<?php
if (isset($_GET['lastname'])){ //if = est-ce que la variable lastname existe=isset ?    $_GET = récupérer les variables dans URL
    $lastname = $_GET['lastname']; //tu m'affiches la variable lastname
} else {
    $lastname = 'Manque donnée URL'; //sinon tu m'affiches manque données URL
}

if (isset($_GET['firstname'])){ //schéma idem
    $firstname = $_GET ['firstname'];
} else {
    $firstname = 'Manque donnée URL';
}

?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_1 partie 6-php</title>  
    </head>

    <body>
        <h1>exercice_1 partie 6 php</h1>
        <p>Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
            index.php?lastname=Nemare&firstname=Jean
        </p> 
        
        <p><?= $lastname . ' ' . $firstname; ?></p>
        <!--tu m'affiches les variables lastname et firstname-->
            
    </body>
</html>