<?php
session_start();
include('connexion.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

     $getid = $_GET['id'];
     $recupUser = $idcom->prepare('SELECT * FROM projet WHERE id = ?');
     $recupUser->execute(array($getid));
     if($recupUser->rowCount() > 0){

        $bannirUser = $idcom->prepare('DELETE FROM projet WHERE id = ?');
        $bannirUser->execute(array($getid));
        
       
        header('location: historique.php');
      }
      else{
          echo"Aucun identifiant ne correspond";
      }
    //     header('location: projet.php');
    // }
}else{
    echo "L'identifiant n'a pas été récupéré";
}
?>