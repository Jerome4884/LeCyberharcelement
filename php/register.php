<?php
require_once("connexionBd.php");

if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['city']) && !empty($_POST['postal-code']) && !empty($_POST['email'])) {

    $userN = trim($_POST['name']);
    $mail = trim($_POST['email']);
    $city = trim($_POST['city']);
    $zip = trim($_POST['postal-code']);

    $sqlUsername = "SELECT `name`, `password` FROM `user` WHERE `name` = :user";
    $queryUsername = $db->prepare($sqlUsername);
    $queryUsername->execute([
        "user" => $userN,
    ]);
    $user = $queryUsername->fetch();

    if ($user !== false) {
        echo "<p class='usernameUsed'>Nom d'utilisateur déjà utilisé.</p>";
    } else {
        $hashedpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

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


?>


<body>
    
    <!--Formulaire d'inscription-->
    <section class="section is-medium" style="background-image: url(Assets/background2.jpg); background-size: cover; height: 100%;">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <form action="" method="post" id="myForm">
                        <div class="field">
                            <label class="label">Nom d'utilisateur</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Nom d'utilisateur" name="name">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Mot de passe</label>
                                <div class="control">
                                    <input class="input" type="password" name="password" id="password" placeholder="Mot de passe">
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Email" name="email">
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
                                <input class="input" type="text" placeholder="Code postal" name="postal-code">
                            </div>
                        </div>
                        <div class="field">
                            <div class="field is-grouped">
                                <div class="control">
                                    <input class="button is-primary" type="submit" name="submit" placeholder="Ajouter">
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
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>
</html>