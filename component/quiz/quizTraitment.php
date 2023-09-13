<?php
// Importe les fichiers contenant les class
require_once('model/quiz.php');
require_once('model/question.php');
require_once('model/answer.php');
require_once('data/recupQ.php');


// Vérifie si la variable 'send' existe
if (isset($_GET['send'])) {
// Récupère le quiz en utilisant la fonction getQuiz() du fichier recupQ.php
    $quiz = getQuiz($_GET['send']);
// Crée un tableau vide pour stocker les réponses sélectionnées
    $goodAnswersSelected = [];

// Vérifie si le formulaire a été soumis et si $_POST n'est pas vide
    if (isset($_POST) && !empty($_POST)) {
// Parcours toutes les questions du quiz
        foreach ($quiz->getQuest() as $question) {
// Récupère l'ID de la question
            $qId = $question->getId();

// Vérifie si la réponse pour cette question a été sélectionnée dans le formulaire
            if (isset($_POST[$qId])) {
// Récupère les réponses pour cette question
                $goodAnswers = $question->getGoodAnswers();
// Parcours toutes les réponses pour cette question
                foreach ($goodAnswers as $goodAnswer) {
// Vérifie si l'ID de la réponse sélectionnée correspond à l'ID d'une bonne réponse
                    if ($_POST[$qId] == $goodAnswer->getId()) {
// Ajoute la bonne réponse sélectionnée au tableau
                        $goodAnswersSelected[] = $goodAnswer;
                        //  var_dump($goodAnswersSelected);
                    }
                }
            }
        }
        // inserer ici le code requete pr send ls données à la bdd!! ??
        $db = connecDb();
        $userId = $_SESSION['name'];
        foreach ($goodAnswersSelected as $repUser) {
            var_dump($repUser);
            $sqlRepUser = 'INSERT INTO `answer_user` (`user_id`, `quizUser_id`, `question_id`, `answer_id`) 
                           VALUES(:userId, :quizUserId, :questId, :answerId)'; 
            $queryRepUser = $db->prepare($sqlRepUser);
            $queryRepUser-> execute([
                "userId" => $userId,
                "quizUserId" => $quiz->getId(),
                "questId" => $question->getId(),
                "answerId" => $goodAnswer->getId()
            ]);
            var_dump($sqlRepUser);
            // $quizUserId = $quiz;
            // $questId = $_POST[$qId];
            // $answerId = $goodAnswers;
        }
        
    }
}

// Pour save les données du quiz à la bdd
// if (isset($_GET['send'])) {
// $quizId = $_GET['send'];

// fin de l'instruction pour send les données du quiz à la bdd

?>

<section class="hero is-fullheight-with-navbar is-flex is-align-items-center is-justify-content-center" style="background-image: url('assets/PrésentationCyber-harcèlement-2.png');">
    <div class="hero-body">
        <div class="columns-container is-centered">
            <div class="column is-centered">
                <div class="container has-text-centered" id="container">
                    <h3 class="subtitle is-1 has-text-centered is-info" id="titre" style="text-decoration: none;" >Votre score pour le quiz du cyber-harcèlement est de : </h3>
                    <div class="container rond">
<!-- Affiche le nombre de bonnes réponses sélectionnées sur le nombre total de questions -->
                    <h4 class="subtitle is-2" id="text">
                        <?php
                        if (!empty($goodAnswersSelected)) {
                            echo count($goodAnswersSelected) . "/" . count($quiz->getQuest());
                            //var_dump($goodAnswersSelected);// Pour debboger, présence de toute information necessaire et à enregistré en bdd une fois rep soumise par le user
                            // echo $goodAnswersSelected;
                        } else {
                            echo "Vous n'avez aucune réponse correct, n'hésitez pas à refaire le quiz";
                            echo "<a class='button is-rounded' href='?routing=SumPres' style='background-color: #29478B; color: white; text-decoration: none;'>Retour</a>";
                        }
                        ?>
                    </h4>
                    </div>
 <!-- Si des bonnes réponses ont été sélectionnées, affiche la liste des bonnes réponses -->
                    <?php if (!empty($goodAnswersSelected)): ?>
                        <h2 class="subtitle is-4 has-text-centered question" id="title"><strong>Vos bonnes réponses :</strong></h2>
                        <div class="rep" id="text">
                            <?php foreach ($goodAnswersSelected as $goodAnswers): ?>
                                <h3><?php echo $goodAnswers->getAnswerLabel(); ?></h3>
                            <?php endforeach; ?>
                            </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
// if (isset($_POST['submit'])) {

//     // $quizUserId = getId();
//     // $questId = 
//     // $answerId = 
//     // $userId = 
//     // $quizId = 

// $sqlUserSend = 'INSERT INTO `answer_user`(`quizUser_id`, `question_id`, `answer_id`) 
//                 VALUES(:quizUserId, :questId, :answerId)';
// $queryUserSend = $db->prepare($sqlUserSend);
// $queryUserSend->execute([
//     "quizUserId" => $quizUserId,
//     "questId" => $questId,
//     "answerId" => $answerId
// ]);
// $sqlQuizSend = 'INSERT INTO `quiz_user`(`user_id`, `quiz_id`) 
//                 VALUES(:userId, :quizId)';
// $queryQuizSend = $db->prepare($sqlQuizSend);
// $queryQuizSend->execute([
//     "userId" => $userId,
//     "quizId" => $quizId
// ]);

// }

?>