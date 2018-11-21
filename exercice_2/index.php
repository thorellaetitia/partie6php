<?php
if (isset($_GET['age'])) { ////if = est-ce que la variable lastname existe=isset ?    $_GET = récupérer les variables dans UR
    $age = $_GET['age'];// tu m'affiche la variable age si elle n'existe
} else {
    $age= 'Le paramètre âge n\'existe pas';//sinon tu m'affiches la phrase suivante
}
if (isset($_GET ['lastname']) && isset($_GET['firstname'])){
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];
    }else {
       $lastname = 'veuillez renseigner le champ lastname';
       $firstname = 'veuillez renseigner le champ firstname';
    }

?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_2 partie 6-php</title>  
    </head>

    <body>
        <h1>exercice_2 partie 6 php</h1>
        <p>Faire une page index.php.
            Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :
            index.php?lastname=Nemare&firstname=Jean
        </p> 
               
        <p><?= 'Nom : '. $lastname?></p> 
         <p><?= 'Prénom : '. $firstname?></p>              
          <p><?= 'Age : '. $age?></p>   
          
        </p>
    </body>
</html>