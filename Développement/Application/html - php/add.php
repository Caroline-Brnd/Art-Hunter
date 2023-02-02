<?php
    include_once("inscription.html");

    //Ajouter une coordonnée
    if(isset($_POST['nom_utilisateur'], $_POST['email'], $_POST['mot_de_passe'],)) {
        //Récupérer les champs
        $nom_utilisateur = $_POST['nom_utilisateur'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
                    
        //Connexion à la base de données
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=formulaire;", "root", "");
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        
        //Préparation de la requête et exécution
        $query = "INSERT INTO utilisateur(nom_utilisateur, email, mot_de_passe) VALUES(:nom_utilisateur, :email, :mot_de_passe)";

        
        $q = $bdd->prepare($query);
        $q->bindParam(":nom_utilisateur", $nom_utilisateur);
        $q->bindParam(":email", $email);
        $q->bindParam(":mot_de_passe", $mot_de_passe);
        $q->execute();
    }
?>