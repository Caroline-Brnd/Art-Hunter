<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Art'Hunter - Connexion</title>
        <meta charset="utf-8">

        <link rel="icon" href="../img/citrouille.png">
        <link rel="stylesheet" type="text/css" href="../css/co-app.css">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Ressource externe-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    </head>
    <body style="
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 0px;">
        <img id="fond" src="../img/Connexion-fond.png" class="fond" alt="fond">
        <img id="logo" src="../img/Logo - Art Hunter - Halloween V3 1.png" alt="logo">
        <img id="fantome" src="../img/fantôme.png" alt="fantome">

        <!--Connexion via nos identifiants-->
        <div class="login-carte">
            <h2><strong>Connexion</strong></h2>
            <form class="login-form" action="verification.php" method="POST">
                <div class="input-icone">                
                    <input type="text" name="nom_utilisateur" placeholder="Identifiant" required>
                    <i id="iden" class="bi bi-person-fill"></i>
                </div>
                <div class="input-icone">
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
                    <i id="mdp" class="bi bi-lock-fill"></i>
                </div>
                <a target="_blank" class="placement-mdp" href="#">Mot de passe oublié ?</a>
                <input id="connect" class="btn btn-primary" name="btn_ajout" type="submit" value="CONNEXION">
                <?php
                    if(isset($_GET['erreur'])){
                         $err = $_GET['erreur'];
                        if($err==1 || $err==2){
                            echo "<p style='color:purple'>Utilisateur ou mot de passe incorrect</p>";
                        }
                    }
                ?>
                <a target="_blank" class="placement-new" href="add.php">Pas encore de compte ? Inscrivez vous.</a>
            </form>
        </div>

        <!--Connexion avec ...-->
        <div class="connexion">
            <h5>Connectez vous avec</h5>
            <a target="_blank" href="https://fr.linkedin.com/" class="connexion-icon"><i class="bi bi-linkedin"></i></a>
            <a target="_blank" href="https://www.instagram.com/?hl=fr" class="connexion-icon"><i class="bi bi-instagram"></i></a>
            <a target="_blank" href="https://www.instagram.com/?hl=fr" class="connexion-icon"><i class="bi bi-google"></i></a>
            <a target="_blank" href="https://fr-fr.facebook.com/" class="connexion-icon"><i class="bi bi-facebook"></i></a>
        </div>
    </body>
</html>