<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Art'Hunter</title>
        <meta charset="utf-8">
        <link rel="icon" href="../img/file-earmark-code.svg">

        <link rel="stylesheet" type="text/css" href="../css/page.css">

        <!--Ressource externe-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-incognito" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z"/>
            </svg>
            <ul>
                <li>Comment ça marche ?</li>
                <li>Événement</li>
                <li>Billetterie</li>
                <li>
                    <a href="profil.php">
                    <?php
                        session_start();
                        if($_SESSION['nom_utilisateur'] !== ""){
                        $user = $_SESSION['nom_utilisateur'];
                        // afficher le nom du compte
                        echo "$user";
                        }
                    ?>
                    </a>
                </li>
            </ul>

            <center><h1><font color="white">BANNIERE EVENEMENT DU MOMENT</font></h1></center>
        </header>

        <div  class="login-carte">
            <form class="login-form">
                <h2>BILLET</h2>
                <h3>Réservez ici</h3>
                <h2>25 €</h2>
                <a href="#">Nous contacter</a>
            </form>
        </div>
        
        <br><br><br><br>

        <div class="texte-hallo">
            <h2>Halloween aux catacombes</h2>
            <p>Nam quibusdam, quos audio sapientes habitos in Graecia, placuisse opinor mirabilia quaedam (sed nihil est quod illi non persequantur argutiis): partim fugiendas esse nimias amicitias, ne necesse sit unum sollicitum esse pro pluribus; satis superque esse sibi suarum cuique rerum, alienis nimis implicari molestum esse; commodissimum esse quam laxissimas habenas habere amicitiae, quas vel adducas, cum velis, vel remittas; caput enim esse ad beate vivendum securitatem, qua frui non possit animus, si tamquam parturiat unus pro pluribus.</p>

        </div>

        <br>

        <div class="mot-cle">
            <ul>
                <li>Cool</li>
                <li>Horreur</li>
                <li>NFT</li>
            </ul>
        </div>

        <h3 class="participer">Participer</h3>

       <center><div class="trailer-even">
            <h2>TRAILER EVENEMENT</h2>
        </div></center>

        <br><br><br><br>         

        <div class="nb-tout">
            <ul>
                <li>
                    <div class="compte">
                        <i class="bi bi-person-fill"></i>
                        <span class="num" data-val="250">000</span>
                        <span class="text">Nombre participants</span>
                    </div>
                </li>
                <li>
                    <div class="compte">
                        <i class="bi bi-calendar3"></i>
                        <span class="num" data-val="50">000</span>
                        <span class="text">Nombre événements</span>
                    </div>
                </li>
                <li>
                    <div class="compte">
                        <i class="bi bi-currency-bitcoin"></i>
                        <span class="num" data-val="500">000</span>
                        <span class="text">Nombre de NFT</span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="comment-marche">
            <h2>Comment ça marche ?</h2>
            <p>Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.</p>
            <ul>
                <li>Créer son compte</li>
                <li>Acheter son billet</li>
                <li>Participer</li>
            </ul>
        </div>

        <br><br>
        

        <div class="even-passe">
            <h2>Événement déjà créés</h2>
            <p>Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.</p>
            <ul>
                <li>Nom événement</li>
                <li>Nom événement</li>
                <li>Nom événement</li>
            </ul>
        </div>

        <div class="commentaires">
            <ul>
                <li>Commentaires</li>
                <li>Commentaires</li>
                <li>Commentaires</li>
            </ul>
        </div>

        <div class="sommes-nous">
            <h2>Qui sommes-nous ?</h2>
            <p>
                Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.
                Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.
            </p>
            <h4>En savoir plus</h4>
        </div>

        <div class="partenaires">
            <center><h2>Ils nous font confiance</h2></center>
            <ul>
                <li><i class="bi bi-android2"></i></li>
                <li><i class="bi bi-apple"></i></i></li>
                <li><i class="bi bi-tiktok"></i></i></li>
                <li><i class="bi bi-twitter"></i></li>
            </ul>
        </div>
        

        <!--<p>Nam quibusdam, quos audio sapientes habitos in Graecia, placuisse opinor mirabilia quaedam (sed nihil est quod illi non persequantur argutiis): partim fugiendas esse nimias amicitias, ne necesse sit unum sollicitum esse pro pluribus; satis superque esse sibi suarum cuique rerum, alienis nimis implicari molestum esse; commodissimum esse quam laxissimas habenas habere amicitiae, quas vel adducas, cum velis, vel remittas; caput enim esse ad beate vivendum securitatem, qua frui non possit animus, si tamquam parturiat unus pro pluribus.
            
            Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.
            Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.
            Post hanc adclinis Libano monti Phoenice, regio plena gratiarum et venustatis, urbibus decorata magnis et pulchris; in quibus amoenitate celebritateque nominum Tyros excellit, Sidon et Berytus isdemque pares Emissa et Damascus saeculis condita priscis.
            Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.
            Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves, sustinere. Non enim neque tu possis, quamvis excellas, omnes tuos ad honores amplissimos perducere, ut Scipio P. Rupilium potuit consulem efficere, fratrem eius L. non potuit. Quod si etiam possis quidvis deferre ad alterum, videndum est tamen, quid ille possit sustinere.
            Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.
            Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.
            Eo adducta re per Isauriam, rege Persarum bellis finitimis inligato repellenteque a conlimitiis suis ferocissimas gentes, quae mente quadam versabili hostiliter eum saepe incessunt et in nos arma moventem aliquotiens iuvant, Nohodares quidam nomine e numero optimatum, incursare Mesopotamiam quotiens copia dederit ordinatus, explorabat nostra sollicite, si repperisset usquam locum vi subita perrupturus.
            Et quoniam mirari posse quosdam peregrinos existimo haec lecturos forsitan, si contigerit, quamobrem cum oratio ad ea monstranda deflexerit quae Romae gererentur, nihil praeter seditiones narratur et tabernas et vilitates harum similis alias, summatim causas perstringam nusquam a veritate sponte propria digressurus.
            Et quoniam mirari posse quosdam peregrinos existimo haec lecturos forsitan, si contigerit, quamobrem cum oratio ad ea monstranda deflexerit quae Romae gererentur, nihil praeter seditiones narratur et tabernas et vilitates harum similis alias, summatim causas perstringam nusquam a veritate sponte propria digressurus.
            Et quoniam inedia gravi adflictabantur, locum petivere Paleas nomine, vergentem in mare, valido muro firmatum, ubi conduntur nunc usque commeatus distribui militibus omne latus Isauriae defendentibus adsueti. circumstetere igitur hoc munimentum per triduum et trinoctium et cum neque adclivitas ipsa sine discrimine adiri letali, nec cuniculis quicquam geri posset, nec procederet ullum obsidionale commentum, maesti excedunt postrema vi subigente maiora viribus adgressuri.
        </p>-->
        
        
        <footer class="footer">
            <ul>
                <li>
                    <div class="footer-text">
                        <h2>Art'Hunter</h2>
                        <p>Description du projet</p>
                    </div>
                </li>
                <li>
                    <div class="footer-text">
                        <h3>Nos événements</h3>
                        <p>Billetterie</p>
                        <p>Événement du moment</p>
                        <p>Tous nos événements</p>
                    </div>
                </li>
                <li>
                    <div class="footer-text">
                        <h3>Informations</h3>
                        <p>Qui sommes nous</p>
                        <p>Nos partenaires</p>
                    </div>
                </li>
                <li>
                    <div class="footer-contact">
                        <h3>Nous contacter</h3>
                        <p>01.02.03.05.06</p>
                        <p>Art'Hunter@gamenft.com</p>
                        <a target="_blank" href="https://fr.linkedin.com/" class="footer-icon"><i class="fab fa-linkedin"></i></a>
                        <a target="_blank" href="https://github.com/" class="footer-icon"><i class="fab fa-github"></i></a>
                        <a target="_blank" href="https://www.instagram.com/?hl=fr" class="footer-icon"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://fr-fr.facebook.com/" class="footer-icon"><i class="fab fa-facebook"></i></a>
                    </div>
                </li>
            </ul>
            <br><br>
            <center><p class="footer-droit">&#169; Art'Hunter. Tous droits réservés</p></center>
        </footer>        
    </body>
    <script src="../js/main.js"></script>
</html>