<?php
  include('connexion.php'); 
  include('header.inc.php');

  include_once('connexion.php');
 
  

  
     if(isset($_POST['envoi'])){
     if(isset($_POST['ampoules']) && isset($_POST['etages']) && isset($_POST['position']) && isset($_POST['prix']) && isset($_POST['date_chgmt'])){
        $ampoules = $idcom->quote($_POST['ampoules']);
        $etages = $idcom->quote($_POST['etages']);
        $position = $idcom->quote($_POST['position']);
        $prix = $idcom->quote($_POST['prix']);
        $date_chgmt = $idcom->quote($_POST['date_chgmt']); 

        $requete = "INSERT INTO projet
        VALUES(DEFAULT, $ampoules, $etages, $position, $prix, $date_chgmt)";

        $idcom->exec($requete);

        header("location: index.php");

     }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ajout d'ampoule</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="bandeau">
         <h1 class="titre-ajout">Ajouter ampoule</h1> 
        <form class="cadre1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
         <fieldset class="double-cadre1">
               <legend><h4 class="titreh5">Remplissez le formulaire</h4></legend> 
             <table>
                 <tr>
                     <th class="pseu1">Ampoules</th>
                     <th><input type="text" name="ampoules" size="30" maxlength="30"></th>  
                 </tr>
                 <tr>
                     <th class="pseu1">Etages</th>
                     <th><input type="text" name="etages" size="30" maxlength="30"> </th>  
                 </tr>
                 <tr>
                     <th class="pseu1">Position</th>
                     <th><input type="text" name="position" size="30" maxlength="30"></th>
                 </tr>    
                 <tr>
                     <th class="pseu1">Prix</th>
                     <th><input type="text" name="prix" size="30" maxlength="30"></th>
                 </tr> 
                 <tr>
                     <th class="pseu1">Dates</th>
                     <th><input type="date" name="date_chgmt" min="2021-06-07" max="2021-12-30" size="40" maxlength="30"></th>
                 </tr> 
                 <tr>
                     <th><input class="val1" type="submit" name="envoi"></th>
                 </tr>

             </table>
         </fieldset>

        </form>
        
        </div>
    </body>
</html>
<?php
 include('footer.inc.php');
?>