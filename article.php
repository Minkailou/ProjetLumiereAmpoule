<?php
include('connexion.php');
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
       <link href="style.admin.css" rel="stylesheet">
  </head>
  <body>
  <h1>Publication des articles</h1>

       <?php
           $recupArticles = $idcom->query('SELECT * FROM projet ORDER BY  id DESC');
           while($article = $recupArticles->fetch()){
               ?>
               <div class="article">
                <div class="bloc_art">
                    <h1><?= $article['ampoules'];?></h1>
                    <br>
                    <p><?= $article['etages'];?></p>
                    <br>
                    <p><?= $article['position'];?></p>
                    <br>
                    <p><?= $article['prix'];?></p>
                    <br>
                    <p><?= $article['date_chgmt'];?></p> 
                    <a href="suppr.php?id=<?= $article['id']; ?>">
                    <button class="supp">Supprimer</button>
                    </a>
                    <a href="modifier.php?id=<?= $article['id']; ?>">
                    <button class='modif'>Modifier</button>
                    </a>
                </div>
               </div>
               <?php
           }
       ?>
  </body>
  </html>