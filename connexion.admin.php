 <?php
// Declaration d'une session qui nous permettre d'echanger les infos sur toutes les pages
 session_start();//création de session
// Verification de l'existence des variables et si elles ne sont pas vides 
 if(isset($_POST['valider'])){
     if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
// Création d'un mot de pass et un pseudo par défaut
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "login1234"; 

 // Création de variable pour vérifier si pseudo_saisi correspond au pseudo_par_défaut
 // Et le mdp_saisi correspond au mdp_par_défaut

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);
        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;//Déclaration de la session 
             header('location: index.php'); // Rédirection ves la page indiquée
        }
        else{
            echo"Votre mot de pass ou pseudo est incorrect";
        }
     } else{
         echo"Veuillez compléter tous les champs...";
     }    
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Espace de connexion</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Ajouter ampoule</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
         <fieldset>
             <legend>Ajouter ampoule</legend>
             <table>
                 
                 <tr>
                     <th>Pseudo:</th>
                     <th><input type="text" name="pseudo" size="50" maxlength="40"></th>
                 </tr> 
                 <tr>
                     <th>Password</th>
                     <th><input type="password" name="mdp" size="50" maxlength="40"></th>
                 </tr> 
                 <tr>
                     <th><input type="submit" name="valider"></th>
                 </tr>

             </table>
         </fieldset>

        </form>
    </body>
</html>