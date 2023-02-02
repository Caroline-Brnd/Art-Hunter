<?php
session_start();
if(isset($_POST['nom_utilisateur']) && isset($_POST['mot_de_passe']))
{
 // connexion à la base de données
 $db_nom_utilisateur = 'root';
 $db_mot_de_passe = '';
 $db_name = 'formulaire';
 $db_host = 'localhost';
 $db = mysqli_connect($db_host, $db_nom_utilisateur, $db_mot_de_passe,$db_name) or die('could not connect to database');
 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $nom_utilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom_utilisateur'])); 
 $mot_de_passe = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot_de_passe']));
 
 if($nom_utilisateur !== "" && $mot_de_passe !== "")
 {
 $requete = "SELECT count(*) FROM utilisateur where nom_utilisateur = '".$nom_utilisateur."' and mot_de_passe = '".$mot_de_passe."' ";
 $exec_requete = mysqli_query($db,$requete);
 $reponse = mysqli_fetch_array($exec_requete);
 $count = $reponse['count(*)'];
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {
 $_SESSION['nom_utilisateur'] = $nom_utilisateur;
 header('Location: principale.php');
 }
 else
 {
 header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
 }
 }
 else
 {
 header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
else
{
 header('Location: connexion.php');
}
mysqli_close($db); // fermer la connexion
?>