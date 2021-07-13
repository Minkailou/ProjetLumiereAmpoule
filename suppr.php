<?php
 include('connexion.php');

  
  if (isset($_GET['id']) AND !empty($_GET['id'])){
        $getid = $_GET['id'];
         $recuArticle = $idcom->prepare('SELECT * FROM projet WHERE id = ?');
         $recuArticle->execute(array($getid));
        if($recuArticle->rowCount() > 0){
         $deleteArticle = $idcom->prepare('DELETE FROM projet WHERE id = ?');
          $deleteArticle->execute(array($getid));

          

           header('location: historique.php');
          
      }
      else{
          echo " Aucun article trouvé";
      }

    }
   
  ?>