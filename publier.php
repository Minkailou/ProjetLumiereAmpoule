<?php
session_start();
include('connexion.php');
  if(!$_SESSION['mdp']){
     header('location: publier.php');
}

?>   
<!DOCTYPE html>
<html>
<head>
     <title>Publier un article</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.admin.css"/>
</head>
<body>
     <h1>Publication des articles</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <fieldset>
     <legend><b>Publier articles</b></legend>
     <table>
      <tr>
      <td><b>Ampoules:</b></td>
      <td><input type="text" name="ampoules" size="40" maxlength="30"/></td>
      </tr>
      <tr>
      <td><b>Etages:</b></td>
      <td><input type="text" name="etages" size="40" maxlength="30"/></td>
      </tr>
      <tr>
      <td><b>Position:</b></td>
      <td><input type="text" name="position" size="40" maxlength="30"></td>
      </tr>
      <tr>
      <td><b>Prix:</b></td>
      <td><input type="text" name="prix" size="40" maxlength="30"></td>
      </tr>
      <tr>
      <td><b>Date:</b></td>
      <td><input type="date" name="date_chgmt"></td>
      </tr>
      <tr>
         <td><input type="submit" name="envoi"></td>
      </tr>   
     </table>
     </fieldset>
     </form>
     <?php
           if(isset($_POST['ampoules']) && isset($_POST['etages']) && isset($_POST['position']) && isset($_POST['prix']) && isset($_POST['date_chgmt'])){

            $ampoules = $idcom->quote($_POST['ampoules']);
            $etages = $idcom->quote($_POST['etages']);
            $position = $idcom->quote($_POST['position']);
            $prix = $idcom->quote($_POST['prix']);
            $date_chgmt = $idcom->quote($_POST['date_chgmt']);

            
                
                $requete="INSERT INTO  projet
                VALUES (DEFAULT, $ampoules, $etages, $position, $prix, $date_chgmt)";
                
                $idcom->exec($requete);
           
          }
          else{
          //     echo"ERROR";

          }
     ?>
</body>
</html>