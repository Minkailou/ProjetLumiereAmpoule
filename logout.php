<?php
// Systéme de deconnexion 
session_start();
$_SESSION = array();
session_destroy();
header('location:connexion.admin.php');
?>