<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Art'Hunter - Connexion</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="../css/connexion.css">
    </head>
    <body>
        <div class="login-carte">
            <h2>Connexion</h2>
            <h3>Entrez vos identifiants</h3>
            <form class="login-form" action="verification.php" method="POST">
                <input type="text" name="nom_utilisateur" placeholder="Nom d'utilisateur" required>
                <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>          
                <a class="placement-mdp" href="#">Mot de passe oublié ?</a>
                <a class="placement-new" href="add.php">Nouveau utilisateur</a>
                <input class="btn btn-primary" name="btn_ajout" type="submit" value="CONNEXION">
                <?php
                    if(isset($_GET['erreur'])){
                         $err = $_GET['erreur'];
                        if($err==1 || $err==2){
                            echo "<p style='color:purple'>Utilisateur ou mot de passe incorrect</p>";
                        }
                    }
                ?>
            </form>
        </div>
    </body>
</html>