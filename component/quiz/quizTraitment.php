<?php
require_once('model/quiz.php');
require_once('model/question.php');
require_once('model/answer.php');
require_once('data/recupQ.php');

if (isset($_GET['send'])) {
    $quiz = getQuiz($_GET['send']);
    $goodAnswersSelected = [];

    if (isset($_POST) && !empty($_POST)) {
        foreach ($quiz->getQuest() as $question) {
            $qId = $question->getId();

            if (isset($_POST[$qId])) {
                $goodAnswers = $question->getGoodAnswers();
                foreach ($goodAnswers as $goodAnswer) {
                    if ($_POST[$qId] == $goodAnswer->getId()) {
                        $goodAnswersSelected[] = $goodAnswer;
                        // var_dump($goodAnswersSelected);
                    }
                }
            }
        }
    }
}

?>

<section class="hero is-fullheight-with-navbar is-flex is-align-items-center is-justify-content-center" style="background-image: url('assets/PrésentationCyber-harcèlement-2.png');">
    <div class="hero-body">
        <div class="columns-container is-centered">
            <div class="column is-centered">
                <div class="container has-text-centered" id="container">
                    <h3 class="subtitle is-1 has-text-centered is-info" id="titre">Votre score pour le quiz du cyber-harcèlement est de : </h3>
                    <div class="container rond">
                    <h4 class="subtitle is-2" id="text">
                        <?php
                        if (!empty($goodAnswersSelected)) {
                            echo count($goodAnswersSelected) . "/" . count($quiz->getQuest());
                            // var_dump($goodAnswersSelected);
                        } else {
                            echo "Une erreur est survenue";
                        }
                        ?>
                    </h4>
                    </div>
                    <?php if (!empty($goodAnswersSelected)): ?>
                        <h4 class="subtitle is-3" id="titre">Vos bonnes réponses :</h4>
                        <ul class="subtitle is-5" id="text">
                            <?php foreach ($goodAnswersSelected as $goodAnswer): ?>
                                <li><?php echo $goodAnswer->getAnswerLabel(); ?></li>
                            <?php endforeach; ?>
                        </ul>
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