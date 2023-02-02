<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Art'Hunter - Profil</title>
        <meta charset="utf-8">

        <link rel="icon" href="../img/citrouille.png">
        <link rel="stylesheet" type="text/css" href="../css/profil.css">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Ressource externe-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    </head>
    <body>

        <img id="picture" src="../img/arrondi-profil.png" alt="bandeau">
        <img id="avatar" src="../img/avataaars 1.png" alt="avatar">
        <img id="fantome1" src="../img/fantome 1.png" alt="fantome1">
        <img id="fantome2" src="../img/fantôme 2.png" alt="fantome2">
        <a href="enigme.html"><img id="retour" src="../img/flehce noir.png" alt="retour"></a>


        <div class="presentation">
           <center><p>
                <?php
                        session_start();
                        if($_SESSION['nom_utilisateur'] !== ""){
                        $user = $_SESSION['nom_utilisateur'];
                        // afficher le nom du compte
                        echo "$user";
                        }
                ?> - Débutant.e
            </p>
            <p>3 participations - 34 NFT</p>
            <p>Meilleur classement :</p>
            <p>Halloween 2022 : Argent n°03</p></center>
        </div>

        <div class="style1"></div>

        <div class="collection">
            <h2 class="collect">Collection</h2>
            <p class="ob">Obtiens les tous !</p>
                <ul>
                <li>
                    <h6 class="mnft">Meilleurs NFT</h6><br>
                    <img style="position: absolute; width: 61.09px; height: 65.03px; left: 18px; top: 86px;" src="../img/nft/Capture-5.PNG" alt="nft">
                    <img style="position: absolute; width: 61.09px; height: 65.03px; left: 102px; top: 86px;" src="../img/nft/Capture1-6.PNG" alt="nft">
                    <img style="position: absolute; width: 61.09px; height: 65.03px; left: 181px; top: 86px;" src="../img/nft/Capture2-6.PNG" alt="nft">
                    <img style="position: absolute; width: 61.09px; height: 65.03px; left: 263px; top: 86px;" src="../img/nft/Capture3-5.PNG" alt="nft">
                </li>
                <li>
                    <h6 class="mnft2">Halloween 2022</h6><br>
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 18px; top: 186px;" src="../img/nft/Capture-1.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 68px; top: 186px;" src="../img/nft/Capture-2.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 116px; top: 186px;" src="../img/nft/Capture-3.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 165px; top: 186px;" src="../img/nft/Capture-4.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 214px; top: 186px;" src="../img/nft/Capture-6.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 294px; top: 186px;" src="../img/nft/Capture-5.PNG" alt="nft">
                </li>
                <li>
                    <h6 class="mnft3">Accro à l’horreur</h6><br>
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 18px; top: 290px;" src="../img/nft/Capture-1-1.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 68px; top: 290px;" src="../img/nft/Capture-1-2.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 116px; top: 290px;" src="../img/nft/Capture-1-3.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 165px; top: 290px;" src="../img/nft/Capture-1-4.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 214px; top: 290px;" src="../img/nft/Capture-1-5.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 294px; top: 290px;" src="../img/nft/Capture1-6.PNG" alt="nft">
                </li>
                <li>
                    <h6 class="mnft4">L’important c’est de participer</h6><br>
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 18px; top: 386px;" src="../img/nft/Capture2-1.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 68px; top: 386px;" src="../img/nft/Capture2-2.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 116px; top: 386px;" src="../img/nft/Capture2-3.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 165px; top: 386px;" src="../img/nft/Capture2-4.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 214px; top: 386px;" src="../img/nft/Capture2-5.PNG" alt="nft">
                    <img style="position: absolute; width: 38.96px; height: 41.47px; left: 294px; top: 386px;" src="../img/nft/Capture2-6.PNG" alt="nft">
                </li>
            </ul>
        </div>

        <div class="style2"></div>
        <div class="style3"></div>

        <div class="classement">
            <h2>Classement</h2>
            <ul style="margin-top: 45px;">
                <li>
                    <p> 3e &emsp; Halloween 2022 &emsp; 58:33s </p>
                </li>
                <li>
                    <p> 14e &emsp; Saint-Valentin 2022 &emsp; 64:23s </p>
                </li>
                <li>
                    <p> 16e &emsp; Noël 2021 &emsp; 74:39s </p>
                </li>
                <li>
                    <p> 17e &emsp; Saint-Valentin 2021 &emsp; 76:17s </p>
                </li>
            </ul>
        </div>

        <!--barre de menu-->
        <div  class="barre-nav">
            <ul style="padding-left: 20px; margin-top: 8px;">
                <li><a href="evenement.html"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                  </svg> <br> Accueil</a></li>
                <li><a href="debut-aventure.html"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                  </svg> <br> Jouer</a></li>
                <li><a href="profilphp"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                  </svg><br> Profil</a></li>
            </ul>
        </div>
    </body>
</html>