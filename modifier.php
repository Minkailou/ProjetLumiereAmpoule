<?php
include('connexion.php');
include_once('header.inc.php');


if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];

    $recupArticle = $idcom->prepare('SELECT * FROM projet WHERE id=?');
    $recupArticle->execute(array($getid));
    if($recupArticle->rowCount()>0){
      $articleInfos = $recupArticle->fetch();
      $ampoules = $articleInfos['ampoules'];
      $etages = $articleInfos['etages'];
      $position = $articleInfos['position'];
      $prix = $articleInfos['prix'];
      $date_chgmt = $articleInfos['date_chgmt'];
      
      if(isset($_POST['valider'])){
      $ampoules_saisi = htmlspecialchars($_POST['ampoules']);
      $etages_saisi = htmlspecialchars($_POST['etages']);
      $position_saisi = htmlspecialchars($_POST['position']);
      $prix_saisi = htmlspecialchars($_POST['prix']);
      $date_chgmt_saisi = htmlspecialchars($_POST['date_chgmt']);

      $updateArticle = $idcom->prepare('UPDATE projet SET ampoules =? , etages =?, position =? , prix =? , date_chgmt =? WHERE id=?');
      $updateArticle->execute(array($ampoules_saisi, $etages_saisi, $position_saisi, $prix_saisi, $date_chgmt_saisi, $getid));
      header('location: historique.php');
}

    }
}

?>


<!DOCTYPE html>
<html>
<head>
     <title>Modifier article</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.admin.css"/>
</head>
<body>
    <div class="bandeau">
     <h1 class="titre-ajout">Modification article</h1>

<form method="POST" action="">
     <fieldset>
     <legend><b>Publier articles</b></legend>
     <table>
      <tr>
      <td><b>Ampoules:</b></td>
      <td><input type="text" name="ampoules" value="<?= $ampoules;?>" size="40" maxlength="30"/></td>
      </tr>
      <tr>
      <td><b>Etages:</b></td>
      <td><input type="text" name="etages" value="<?= $etages;?>" size="40" maxlength="30"/></td>
      </tr>
      <tr>
      <td><b>Position:</b></td>
      <td><input type="text" name="position" value="<?= $position;?>"  size="40" maxlength="30"></td>
      </tr>
      <tr>
      <td><b>Prix:</b></td>
      <td><input type="text" name="prix" value="<?= $prix;?>" size="40" maxlength="30"></td>
      </tr>
      <tr>
      <td><b>Date:</b></td>
      <td><input type="date" name="date_chgmt" value="<?= $date_chgmt;?>"></td>
      </tr>
      <tr>
         <td><input type="submit" name="valider"></td>
      </tr>   
     </table>
     </fieldset>
     </form>
    
</body>
</div>
</html>
<?php
 include_once('footer.inc.php'); 
?>


