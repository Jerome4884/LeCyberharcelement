<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=10">
    <!-- lien bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Lien style css-->
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
    <link rel="stylesheet" href="style.css">
    <!--Lien script js-->
    <!-- <?php // echo "<script src='index.js'></script>" ?>
    <script>
        let js = "<//?php echo $js; ?>";
        console.log(js);
    </script> -->
    <!--Lien googleFont-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <!--Lien icon fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Accueil</title>
</head>
<?=
session_start(); // Must be at the beginning, otherwise the session will not work
ob_start(); // Permet d'enregistré les données dans une mémoire tampon / Stores data in a buffer memory.
?>
<body style="background-color: #d4cac170; margin-top: -25px">

<header>
<div id="hautPage"></div>
    <!--Navigation-->
        <nav class="navbar " id="navBar" role="navigation" aria-label="main navigation" style="background-color: #d4cac1; max-height:130px">
            <!-- element pour img -->
            <div class="navbar-brand ">
                <div class="columns is-mobile">
                    <div class="column ">
                        <figure class="image is-128x128 mr-3 logo">
                            <a href="."><img src="assets/LOGO AEGIS.png" alt="logo"></a>
                        </figure>
                    </div>
                    <div class="column is-12 ml-4 is-mobile">
                        <!-- fait apparaitre menu burger en mobile -->
                        <a role="button" class="navbar-burger button mt-4" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <!-- insere les elmts à gauche de l'ecran -->
                <div class="navbar-start ml-6">
                    <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" a href="." >
                    Accueil
                    </a>

                    <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=SumPres">
                    Présentation
                    </a>

                    <!-- <div class="navbar-item has-dropdown is-hoverable"> -->
                        <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=quizPresentation">
                        Quiz
                        </a>

                        <!-- <div class="navbar-dropdown"> -->
                        <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=aPropos">
                        A propos
                        </a>

                        <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=contact">
                        Contact
                        </a>

                </div>
                <!-- insere elmts à droite de l'ecran -->
                <div class="navbar-end mr-4">
                    <div class="navbar-brand mr-6 is-flex " >
                        <p class=" is-hidden-mobile mt-2"><small>suivez-nous sur les réseaux</small></p>
                        <a href="https://www.linkedin.com/company/aegis-civis/" class="navbar-item"><img src="assets/linkedin.png" alt="linkedin"></a>
                        <a href="https://www.facebook.com/groupeaegiscivis" class="navbar-item"><img src="assets/facebook.png" alt="facebook"></a>
                    </div>
                    <div class="navbar-item">
                        <div class="buttons is-rounded is-small">
                            <!-- Si connecte, affiche btn deco, sinon affiche btn co -->
                            <?php
                             if(!isset($_SESSION['name'])) { 
                                echo "<a class='button is-rounded is-small' href='?routing=login' style='background-color: #29478B; color: white; text-decoration: none;'>
                                        Se connecter
                                      </a>";
                                } 
                             else {
                            echo "<a class='button is-light is-rounded is-small' href='?routing=disconnect' style='text-decoration: none;'>
                                Se deconnecter
                            </a>";
                            echo "<br>" ."Bonjour" . " "  . ($_SESSION['name']);
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
</header>
    <!--partie central-->

    <div class="columns-container is-gapless">
        <div class="columns is-centered is-multiline is-full is-gapless">
            <div class="column is-full is-offset-x">
                
                <!-- Affiche la date et l'heure -->
                <!-- <?php 
                    date_default_timezone_set('Europe/Paris');
                    setlocale(LC_TIME, 'fr_FR');
                    echo utf8_encode(strftime('Nous sommes le %A %e %B %Y et il est %Hh%M', time()));
                ?> -->
                <!-- <figure class="image is-48x48 is-hidden-desktop">
                    <a href="https://www.linkedin.com/company/aegis-civis/" class="navbar-item"><img src="assets/linkedin.png" alt="linkedin"></a>
                </figure> -->

                <!-- Creation d'une partie routing, afin de simplifier le code -->
                <?php
                // creaion d'une variable routing vide, afin que sa ne plante pas par la suite
                $routing = '';
                // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
                if (isset($_GET['routing'])) {
                    $routing = $_GET['routing'];
                }
                // Cela permet de charger les composant présent dans le dossier component en fonction de la valeur de routing
                switch ($routing) {
                    case 'contact':
                        require_once('component/contact.php');
                        break;
                    case 'aPropos':
                        require_once('component/aPropos.php');
                        break;
                    case 'SumPres':
                        require_once('component/SumPres.php');
                        break;
                    // case 'Presentation':
                    //     require_once('component/Presentation.php');
                    //     break;
                    case 'quizPresentation':
                        require_once('component/quizPresentation.php');
                        break;
                    // case 'finishQuiz':
                    //     if (isset($_GET['send'])) {
                    //     require_once('component/quiz/quizOne.php');
                    //     break;
                    //     }
                    //     require_once('component/quiz/finishQuiz.php');
                    //     break;
                    case 'quizOne':
                        if (isset($_GET['send'])) {
                            require_once('component/quiz/quizTraitment.php');
                            break;
                        }
                        require_once('component/quiz/quizOne.php');
                        break;
                    case 'quizTraitment':
                        require_once('component/quiz/quizTraitment.php');
                        break;
                    case 'register':
                        require_once('php/register.php');
                        break;
                    case 'login':
                        require_once('php/login.php');
                        break;
                    case 'disconnect':
                        require_once('php/disconnect.php');
                        break;
                        // On définit la page par défaut, ici home, quoi que l'utilisateur mzet dans l'url, il sera redirigé sur home
                    default:
                        require_once('component/home.php');
                        break;
                }
                ?>
                <a class='button' href=#hautPage style='background-color: #29478B; color: white; text-decoration: none;  position: fixed;
   top: 90%; left:92%; border-radius: 50%; '><i class="fa-solid fa-arrow-up fa-bounce"></i></a>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer class="footer is-flex is-align-items-center is-justify-content-center" id="foter" style="height: auto;" ><!-- style="background-color: #B2BCCF; height: 20px;"-->
        <div style=" margin-top: 0; padding-top:1px; display: flex; flex-direction: column; justify-content:center; align-items: center;">
            <figure class="image is-128x128 ml-3 logo">
                <a href="."><img src="assets/LOGO AEGIS.png" alt="logo"></a>
            </figure>
            <h6 class="subtitle has-text-centered">© 2023 </h6>
            <h6 class="subtitle has-text-centered is-block-mobile" id="contentFoot">
                <strong>Le cyber-harcèlement </strong> par Aegis-Civis. <br>Tous droits réservés
            </h6>
            <div class="bulle">
                <p class="subtitle has-text-centered is-5 info" id="text" style="width: auto; white-space: nonwrap;">
                    Passez votre souris dessus pour voir ce qui s'y cache
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
<script>
    //burger menu
    // Script for burger menu
    document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
    // Footer
    let info = document.getElementsByClassName("info")[0];
    let bulle = document.getElementsByClassName("bulle")[0];

    function show() {
        info.addEventListener("mouseenter", function() {
            info.innerHTML = "Ce site a été réalisé au cours d'un stage chez Aegis-Civis groupe par Jérôme, développeur web junior. Si le site présente des bugs, des imperfections ou autres problèmes, la faute incombe uniquement à Jérôme. Merci de votre compréhension.";
        });

        info.addEventListener("mouseleave", function() {
            info.innerHTML = "Passez votre souris dessus pour voir ce qui s'y cache";
        });
    }    
    show();

    // scroll 
// Je déclare les variables
let navBar = document.getElementsById("navBar");
let prevScrollpos = window.pageYOffset;

// Au scroll vers le bas, le header disparaît, au scroll vers  le haut, il réapparaît instantanement 

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    navBar.style.top = "0";
    navBar.style.transitionDuration = "0.4s";
    // document.getElementById('aside').style.paddingTop = "10vh";
    // document.getElementById('aside').style.transitionDuration = "0.4s";
  } else {
    navBar.style.top = "-10vh";
    navBar.style.transitionDuration = "0.4s";
    // document.getElementById('aside').style.paddingTop = "0vh";
    // document.getElementById('aside').style.transitionDuration = "0.4s";
  }
  prevScrollpos = currentScrollPos;
}
// btn pour remonter en haut de page

</script>

