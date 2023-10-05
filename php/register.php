<?php
// Fait la connexion a la page de connexion, necessaire pour la suite
require_once("connexionBd.php");

// Vérification si les champs demandés dans le formulaire sont bien renseignés
if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['city'])
     && !empty($_POST['postal-code']) && !empty($_POST['email'])) {
        
        if (strlen($_POST['password'] <= 8 )) {
            $echo = "Le mot de passe doit contenir huit charactères minimun";
        } else {
// Définition des variables, trim permet de supprimer les espaces
    $userN = htmlentities(trim($_POST['name']));
    $mail = htmlentities(trim($_POST['email']));
    $city = htmlentities(trim($_POST['city']));
    $zip = htmlentities(trim($_POST['postal-code']));

// Permet de vérifier si name et pwd existe déjà 
    $sqlUsername = "SELECT `name`, `password` FROM `user` WHERE `name` = :user"; // requete pour récuperer name et pwd
    $queryUsername = $db->prepare($sqlUsername); // prépare la requete
    $queryUsername->execute([   // execute la requete
        "user" => $userN, // associe user à userN, ceci permet d'éviter les attaques par injections sql
    ]);
    $user = $queryUsername->fetch();  // pour récuperer la requete

    if ($user !== false) { // vérifie si user existe, si non on passe à la suite
        echo "<p class='usernameUsed'>Nom d'utilisateur déjà utilisé.</p>";
    } else {
        $hashedpwd = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash du pwd si user n'existe pas

    // Insere les donnée renseigné par le user dans la bdd
        $sqlAdd = "INSERT INTO `user`(`name`, `password`, email, city, `zip`) VALUES (:name, :pwd, :mail, :city, :zip)";
        $queryAdd = $db->prepare($sqlAdd);
        $queryAdd->execute([
            "name" => $userN,
            "pwd" => $hashedpwd,
            "mail" => $mail,
            "city" => $city,
            "zip" => $zip
        ]);

        if ($user === true) {
            $cookie_name = 'registered';
            $cookie_value = $userN;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            if(!headers_sent()) {
                header('Location:quizPresentation.php');
                    die();
            }   else {
                    echo 'une erreur est survenue avec la redirection(header)';
                }
            }
        }

        if ($queryAdd->rowCount() > 0) {
            if (headers_sent()) {
                echo '<script type="text/javascript">
                window.location.href="?routing=home";
                </script>
                <noscript>
                <meta http-equiv="refresh" content="0;url=?routing=home" />
                </noscript>';
            } else {
                header("location: ?routing=home");
            }
        } else {
            echo 'Une erreur est survenue lors de votre enregistrement';
        }    
    }
}

?>


<body>
    <style>
        input {
            border: 2px solid currentcolor;
        }
        input:invalid {
            border: 2px dashed red;
        }
        input:invalid:focus {
            background-image: linear-gradient(orange, lightgreen);
        }
        input:required {
            border: 1px solid grey;
        }

    </style>
    <!--Formulaire d'inscription-->
    <section class="section is-medium" style="background-image: url(Assets/background2.jpg); background-size: cover; height: 100%;">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title is-3 has-text-centered" id="titre" style="color: white;"><u>Pour mieux vous connaitre </u></h1>
                    <form action="" method="post" id="myForm">
                        <div class="field">
                            <label class="label">Nom d'utilisateur</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Nom d'utilisateur" name="name" minlength="2" maxlength="20" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Mot de passe</label>
                                <div class="control">
                                    <input class="input" type="password" name="password" id="password" placeholder="Mot de passe" minlength="8" maxlength="30" required>
                                </div>
                                <!-- <?php $echo ?> -->
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Ville</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Ville" name="city">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Code postal</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Code postal" name="postal-code" minlength="2" maxlength="5">
                            </div>
                        </div>
                        <div class="field">
                            <div class="field is-grouped">
                                <div class="control">
                                    <input class="button" type="submit" name="submit" placeholder="Ajouter" style="background-color: #29478B; color: white; text-decoration: none;" >
                                </div>
                                <div class="control">
                                    <input class="button is-link is-light" onclick="resetForm()" placeholder="annuler">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    // fonction pour reset le formulaire rempli au click sur le bouton annuler
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>
</html>