<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lien bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!--Lien style css-->
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
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
<body>
<header>

<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" style="background-color: #d4cac170;">
  <div class="navbar-brand">
        <figure class="image is-128x128 logo">
            <a href="https://www.aegis-civis.com"><img src="assets/LOGO AEGIS.png" alt="logo"></a>
        </figure>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" a href="." >
      Accueil
      </a>

      <a class="navbar-item" type="button" style="text-decoration: none; color: #29478B;" href="?routing=sommairePresentation">
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
        <!-- </div> -->
      <!-- </div> -->
    </div>

    <div class="navbar-end">
        <div class="navbar-brand" id="social">
            <p><small>suivez-nous sur les réseaux</small></p>
            <a href="https://www.linkedin.com/company/aegis-civis/" class="navbar-item"><img src="assets/linkedin.png" alt="linkedin"></a>
            <a href="https://www.facebook.com/groupeaegiscivis" class="navbar-item"><img src="assets/facebook.png" alt="facebook"></a>
        </div>

      <div class="navbar-item">
        <div class="buttons is-rounded">
          <a class="button is-rounded" href="?routing=login" style="background-color: #29478B; color: white; text-decoration: none;">
            Se connecter
          </a>
          <a class="button is-light is-rounded" href="?routing=disconnect">
            Se deconnecter
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
</header>
</body>
</html>
<script>
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
</script>