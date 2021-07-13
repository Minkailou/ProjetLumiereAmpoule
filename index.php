<?php
// Sécuriser la page pour ne pas acceder directement à partir de l'url
      session_start();
      if(!$_SESSION['mdp']){
      header('Location:connexion.admin.php');
   }
   

    include('header.inc.php');
    include('body.inc.php');
    include('footer.inc.php');
   ?>