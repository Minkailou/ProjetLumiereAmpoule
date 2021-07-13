<!DOCTYPE html>
<html>
    <head>
        <title>Afficher l'historique</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="bandeau">
            <h1 class="titre-ajout">Liste des changements</h1>
         <!--Afficher l'historique-->
         <?php
        //  La requete pour recuperer tout le contenu de la base donnée
       $requete = $idcom->query('SELECT * FROM projet');
       while($user = $requete->fetch()){

          ?>
           <div class="histo">
            <div id="histo-bloc1">
                <h5>Ampoules:</h5><br/>
                <h5>Etages:</h5><br/>
                <h5>Position:</h5><br/>
                <h5>Prix:</h5>
                <h5>Dates:</h5>
            </div>
            <div id="histo-bloc2">
           <h5 class="parahis"><?= $user['ampoules'].'</br>'.'</br>', $user['etages'].'</br>'.'<br/>'.'</br>', $user['position'].'</br>'.'<br/>', $user['prix'].'</br>'.'<br/>', $user['date_chgmt'].'</br>'.'<br/>';?><a href="bannir.php?id=<?= $user['id']; ?>"
           style="color:red; text-decoration:none;"><b>Bannir le projet</b></a></h5>
           </div>
           </div>
           <?php
       }
    ?>
    </div>
    </body>
</html>