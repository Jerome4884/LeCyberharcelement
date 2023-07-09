<!--- 
  Seule la page "Actus" Et la page "A propos" sont actives

- En appuyant sur "Se connecter" Vous êtes redirigé sur la page de login, sur vous avez rentré le bon login et mot de passe, votre connexion est enregistrée dans les cookies.

- Si vous n'entrez pas le bon login our mot de passe, un message d'erreur apparaît avec le modèle d'alerte de Bootstrap.

- Une fois connecté, sur le menu apparaît 2 nouveaux liens, les "notes" qui vous redirige ici, ainsi que la possibilité d'Ajouter un article. Le bouton "Se connecter" change et devient "Se déconnecter" qui aura pour effet d'éffacer votre cookie de connexion.

- Une fois déconnecté ou bien sans être connecté, vous n'avez plus la possibilité d'Ajouter un article.


Rappel:
Documentation sur les cookies ici: https://www.w3schools.com/php/php_cookies.asp
Un cookie peut être supprimé en définissant sa durée à une date antérieure : "setcookie("nom du cookie", "", time() - 3600);"

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Vidéo-Jeux.com</title>
</head>

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

    <main class="container mt-5">
        <div class="text-center">
            <h2>Sommaire</h2>
        </div>
        
        <div class="d-flex flex-wrap">
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>Le cyberharcèlement, c'est quoi?</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>Comment le déceler ?</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>Que faire pour s'en prémunir?</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>>Quelles sont les conséquences?</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>Et pour ne pas le devenir</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>Que dit la loi</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>A qui en parler?</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
            <div class="card m-3" style="width: 15rem;">
                <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title"><small>Le 3018</small></h3>
                            <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary is-centered mt-4">Voir</a>
                        </div>
                    </div>
            </div>
        </div>
    </main>
</body>
</html>