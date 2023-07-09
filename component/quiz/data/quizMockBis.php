<?php
function getQuizzes() {

    $answerAQA = 'azert';
    $answerBQA = 'treza';
    $answerCQA = 'astre';

    $answerAQA = new Answer(1, " A", false);
    $answerBQA = new Answer(2, "Reponse B", true);
    $answerCQA = new Answer(3, "Réponse C", false);
    $answersQA = [$answerAQA, $answerBQA, $answerCQA];

    $answerAQB = new Answer(1, "Réponse A", true);
    $answerBQB = new Answer(2, "Reponse B", false);
    $answerCQB = new Answer(3, "Réponse C", false);
    $answersQB = [$answerAQB, $answerBQB, $answerCQB];

    $answerAQC = new Answer(1, "Réponse A", true);
    $answerBQC = new Answer(2, "Reponse B", false);
    $answerCQC = new Answer(3, "Réponse C", false);
    $answersQC = [$answerAQC, $answerBQC, $answerCQC];

    $answerAQD = new Answer(1, "Réponse A", true);
    $answerBQD = new Answer(2, "Reponse B", false);
    $answerCQD = new Answer(3, "Réponse C", false);
    $answersQD = [$answerAQD, $answerBQD, $answerCQD];

    $answerAQE = new Answer(1, "Réponse A", true);
    $answerBQE = new Answer(2, "Reponse B", false);
    $answerCQE = new Answer(3, "Réponse C", false);
    $answersQE = [$answerAQE, $answerBQE, $answerCQE];

    $answerAQF = new Answer(1, "Réponse A", true);
    $answerBQF = new Answer(2, "Reponse B", false);
    $answerCQF = new Answer(3, "Réponse C", false);
    $answersQF = [$answerAQF, $answerBQF, $answerCQF];

    $answerAQG = new Answer(1, "Réponse A", true);
    $answerBQG = new Answer(2, "Reponse B", false);
    $answerCQG = new Answer(3, "Réponse C", false);
    $answersQG = [$answerAQG, $answerBQG, $answerCQG];

    $answerAQH = new Answer(1, "Réponse A", true);
    $answerBQH = new Answer(2, "Reponse B", false);
    $answerCQH = new Answer(3, "Réponse C", false);
    $answersQH = [$answerAQH, $answerBQH, $answerCQH];

    $questionA = new Question(1, "Qu'est ce que le cyber-harcèlement", $answersQA);
    $questionB = new Question(2, "Comment reperer si on est victimes d'harcelement", $answersQB);
    $questionC = new Question(3, "Que faire quand on cyber-harceler", $answersQC);
    $questionD = new Question(4, "Qu'elles peuvent être les conséquences", $answersQD);
    $questionE = new Question(5, "Comment faire pour ne pas le devenir", $answersQE);
    $questionF = new Question(6, "Que dit la loi", $answersQF);
    $questionG = new Question(7, "Vers qui se tourner pour en parler", $answersQG);
    $questionH = new Question(8, "C'est quoi le 3018", $answersQH);

    $questions = [$questionA, $questionB, $questionC, $questionD, $questionE, $questionF, $questionG, $questionH];

    $quizOne = new Quiz(1, $questions);
    return [$quizOne];
}
?>