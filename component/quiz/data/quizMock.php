<?php
function getQuizzes()
{
    $quizzes = [];
    $numQuizzes = 1;
    $numQuestionsPerQuiz = 8;
    $numAnswersPerQuestion = 3;

    for ($i = 1; $i <= $numQuizzes; $i++) {
        $questions = [];
        for ($j = 1; $j <= $numQuestionsPerQuiz; $j++) {
            $answers = [];
            for ($k = 1; $k <= $numAnswersPerQuestion; $k++) {
                // Mark the first answer as true, and the rest as false.
                $isCorrect = $k === 1;
                $answers[] = new Answer($k, "Réponse $k", $isCorrect);
            }
            $questions[] = new Question($j, "Question $j", $answers);
        }
        $quizzes[] = new Quiz($i, $questions);
    }

    return $quizzes;
}