<?php
// Vérifier si l'utilisateur est déjà connecté (vous devez avoir une logique pour vérifier cela, par exemple en vérifiant si une variable de session de connexion est définie)
if (isset($_SESSION['name'])) {
    // L'utilisateur est déjà connecté, le rediriger vers la page d'accueil ou toute autre page appropriée
    header("Location: ?routing=quizPresentation"); // Vous pouvez modifier la destination selon vos besoins
    exit;
}

require_once("connexionBd.php");

if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $name = trim($_POST['name']);
    $password = $_POST['password'];


    $sql = 'SELECT `name`, `password` FROM user WHERE `name` = :name';
    $query = $db->prepare($sql);
    $query->execute([
        'name' => $name
    ]);

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['name'] = $user['name'];

        header('location:?routing=quizPresentation');
        die();
    } else {
        $errorMessage = "Nom d'utilisateur ou mot de passe incorrect";
        header('Location: ?routing=register');

    }
}
?>
<section class="section is-medium" style="background-image: url(Assets/background2.jpg); background-size: cover; height: 100%;">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">

                <?php if (isset($errorMessage)) : ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>

                <form action="" method="post" id="formLog">
                    <div class="field">
                        <label class="label">Nom d'utilisateur</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Nom d'utilisateur" name="name">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mot de passe</label>
                        <div class="control">
                            <input type="password" name="password" id="password" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="button is-primary" type="submit" placeholder="se connecter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    function resetLog() {
        document.getElementById("formLog").reset();
    }
</script>

</html>