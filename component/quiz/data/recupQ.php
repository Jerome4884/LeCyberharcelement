<?php

// require_once('connexionBd.php');
// require_once('cookie.php');

// SQL request with the try method for catch error and post appropriete mess
// try {
//     // recup elements
//     $sqlQuiz = "SELECT q.question, a.answer, a.goodAnswer FROM question.q
//     INNER JOIN answer a ON q.question_id = a.question_id";
//     $queryQuiz = $connection->query($sqlQuiz);

//     // check if answer is ticked
//     if(isset($_POST['question'])){
//         $userAnswer = $_POST['question--answer'];
//         $result = $queryQuiz->fetch(PDO::FETCH_ASSOC);
//     }
    
//         if(isset($POST['question--answer']) && ($POST['question--answer']) === 1){
//             $userAnswer = $_POST['question--answer'];
//             $result = $queryQuiz->fetch(PDO::FETCH_ASSOC);
//         }
    
//     } catch (PDOException $e) {
//     echo "Une erreur c'est produite : " . $e->getMessage();
// }

?>
<!-- Il faut que je recupere les questions ainsi que les reponses qui correspondent à la question,
Il faut que ces questions/réponses soient affiché dans l'emplacement prévu
Il faut que je verifie si l'user a cliqué sur une reponse avant de passer a la suivante, si le user n'a pas rempli,
lui afficher un message d'erreur( voir l'empecher de passer à la suivante)
A la fin du Quiz, il faut que je compare les réponses de l'user à la goodAnswer qui est de type bool.
Puis lui afficher ces reponses ainsi qu'un score. -->
<?php

// Create function to connect with the bd

function connecDb() {
    try {
        return new PDO('mysql:host=localhost;dbname=cyberharcelement;charset=utf8', 'root', '');
    } catch (Exception $e) {
        echo $e->getMessage();
        die("ERREUR : Problème de connexion");
    }
}

function getQuest($quizId) {
    $db = connecDb();

    $sqlGetQuest = "SELECT quiz_id, question_id, question
        FROM question
        WHERE quiz_id = :quizId";

    $queryGetQuest = $db->prepare($sqlGetQuest);
    $queryGetQuest->execute(
        [ 'quizId' => $quizId]
    );
    $questReturn = $queryGetQuest->fetchALL(PDO::FETCH_OBJ);
    $quest = [];

    foreach ($questReturn as $questions) {
        $sqlGetAnswer = "SELECT a.answer_id AS id, a.answer AS label, a.goodAnswer
            FROM answer AS a
            WHERE a.question_id = :questionId;";

        $queryGetAnswer = $db->prepare($sqlGetAnswer);
        $queryGetAnswer->execute(
            ['questionId' => $questions->question_id]
        );
        $answerReturn = $queryGetAnswer->fetchAll(PDO::FETCH_OBJ);
        $answer = [];

        foreach ($answerReturn as $answers) {
            $answer[] = new Answer($answers->id, $answers->label, $answers->goodAnswer);
        }
        $quest[] = new Question($questions->question_id, $questions->question, $answer);
    }
    return $quest;
}

function getQuizzes() {
    $db = connecDb();

    $sqlGetQuiz = "SELECT quiz.quiz_id AS id
        FROM quiz;";
    $queryGetQuiz = $db->prepare($sqlGetQuiz);
    $quizReturn = $queryGetQuiz->fetchAll(PDO::FETCH_OBJ);

    $quiz = [];
    foreach ($quiz as $quizs) {
        $quizId = $quizs->id;
        $quiz[] = new Quiz($quizId, getQuest($quizId));
    }
    return $quiz;
}

function getQuiz($quizId){
    return new Quiz($quizId, getQuest($quizId));
}
?>