<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
    <!-- Bulma link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css"/>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Vidéo-Jeux.com</title>
</head>
<body style="background-color: #F3FAFD;">

    <nav class="navbar navbar-expand-lg navbar" style="background-color: #d4cac170;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/LOGO AEGIS.png" alt="logo" width="30%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href= " . " style="text-decoration: none; color: #29478B;">Accueil<span class="sr-only">(current)</span></a> 
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?routing=sommairePresentation" style="text-decoration: none; color: #29478B;">Présentation</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?routing=quizPresentation" style="text-decoration: none; color: #29478B;">Quiz</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?routing=aPropos" style="text-decoration: none; color: #29478B;">A propos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?routing=contact" style="text-decoration: none; color: #29478B;">Contact</a>
                </li>
            </ul>
            <div class="container fluid">
                <a href="?routing=login" style="text-decoration: none; color: #29478B;" class="btn btn-outline-light my-2 my-sm-0">Se connecter</a>
                <a href="?routing=disconnect" style="text-decoration: none; color: #29478B;" class="btn btn-outline-light my-2 my-sm-0">Se déconnecter</a>
            </div>
        </div>
    </nav>    
 <!-- sum part -->
<div class="py-5" style="background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;" >
    <main class="container mt-5" >
        <div class="text-center" id="text">
            <h2>Sommaire</h2>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="text-center">
                            <h3 class="card-title"><small>Le cyberharcèlement, c'est quoi?</small></h3>
                        </div>
                        <div class="mt-auto">
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="card-title"><small>Comment le déceler?</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="s-en-premunir"><small>Que faire pour s'en prémunir?</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="card-title"><small>Quelles sont les conséquences?</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#consequences" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="card-title"><small>Et pour ne pas le devenir</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#pas-devenir" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="card-title"><small>Que dit la loi</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#loi" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="card-title"><small>A qui en parler?</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#parler" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <h3 class="card-title"><small>Le 3018</small></h3>
                    </div>
                    <div class="mt-auto">
                        <a href="#Présentation.html#3018" class="btn btn-primary mt-4">Voir</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
<!-- end sum part -->

<!-- presentation part -->
<section class="section">
      <div class="container">
        <div class="columns is-centered is-multiline">
            
          <div class="column is-full">
            <div class="card has-background-primary-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Playwright Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Playwright scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>
 
 
          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="column is-full">
            <div class="card has-background-info-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Selenium Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Selenium scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div> 
 
          <div class="column is-full">
            <div class="card has-background-danger-dark">
              <div class="card-content has-text-white">
                <div class="content has-text-centered">
                  <h4 class="title is-4 has-text-white">Cypress Testing</h4>
                  <p class="subtitle is-5 has-text-white">View Documentation</p>
                  <p>Run Cypress scripts on cloud-based infrastructure.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>