<?php
include('connexion.php');
include_once('header.inc.php');

  // Sécuriser la page en creant une session qui ridirige vers la de connexion
  session_start();
  if(!$_SESSION['mdp']){
     header('location: connexion.admin.php');
  }
?>

<!DOCTYPE html>
  <html>
  <head>
       <title>Afficher tous les articles</title>
       <meta charset="utf-8">
       <link href="style.css" rel="stylesheet">
  </head >
  <body>
    <div class="bandeau">
  <h1 class="titre-ajout">Historique des changements</h1>

       <?php
           $recupArticles = $idcom->query('SELECT * FROM projet ORDER BY  id DESC');
           while($article = $recupArticles->fetch()){
               ?>
               <div class="article">
                <div class="bloc_art">
                    <div class="bloc_final">
                    <h4>Ampoule :&nbsp;&nbsp;<?= $article['ampoules'];?></h4>
                    <br>
                    <h4>Etages :&nbsp;&nbsp;<?= $article['etages'];?></h4>
                    <br>
                    <h4>Position :&nbsp;&nbsp;<?= $article['position'];?></h4>
                    <br>
                    <h4>Prix :&nbsp;&nbsp;<?= $article['prix'];?></h4>
                    <br>
                    <h4>Date :&nbsp;&nbsp;<?= $article['date_chgmt'];?></h4> 
                    <a href="suppr.php?id=<?= $article['id']; ?>">
                    <button class="val1">Supprimer</button>
                    </a>
                    <a href="modifier.php?id=<?= $article['id']; ?>">
                    <button class='val1'>Modifier</button>
                    </a>
                    </div>
                </div>
               </div>
               </div>
               <?php
           }
       ?>
       
  </body>
  </html>
<?php
include_once('footer.inc.php');
?>