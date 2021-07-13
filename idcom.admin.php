<!-- <?php
  session_start();
  if(isset($_POST['valider']) AND !empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

    $pseudo_par_defaut = "login";
    $mdp_par_defaut = "1234login";

    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
    $mdp_saisi = htmlspecialchars($_POST['mdp']);

    if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
      $_SESSION['mdp'] = $mdp_saisi;
      header('Location: index.php');
    
  }else{
    echo"<script type=\"text/javascript\">
    alert('Veuillez saisir un pseudo ou un mot de passe correct')</script>";
}
  
}else{
  echo"<script type=\"text/javascript\">
  alert('Veuillez complétez tous les champs')</script>";
  }

 
?>



<!DOCTYPE html>
<html lang="fr">
<head>
      <title>Connexion admin </title>
      <link href="./img/logo2.png" rel="icon">
      <link href="style.css" rel="stylesheet">
</head>
<body class="idcom"> 
     <h1 class="titre-ajout1">Espace admin accés restreint</h1> 
     <form class="cadre" method="POST" action="">
     <fieldset class="double-cadre">
     <legend><h2 class="titreh5">Connexion admin</h2></legend>
     <table>
     <tr>
        <td class="pseu">Pseudo</td>
          <td><input type="text" name="pseudo" size="30"  autocomplete="off"></td>
     </tr>
     <tr>
        <td class="pseu">Password</td>
         <td><input type="password" size="30" maxlength="9" name="mdp"></td>
     </tr>
     <tr>
      <td><input class="val" type="submit" name="valider"></td>
     </tr>
     </table>
     </fieldset>
     </form>
</body>
</html> -->