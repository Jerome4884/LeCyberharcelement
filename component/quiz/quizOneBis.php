<style>
    .question-container {
        display: none;
    }

    .question-container:first-child {
        display: block;
    }
</style>

<section class="hero is-fullheight-with-navbar is-flex is-align-items-center is-justify-content-center" id="bkgQuiz">
    <div class="hero-body">
        <div class="columns-container is-centered" id=" question-container">
            <form action="" method="post" id="form">
                <?php
                // requete de recuperation des pages
                require_once('model/quiz.php');
                require_once('model/question.php');
                require_once('model/answer.php');
                require_once('data/quizMockBis.php');
                // Definition d'une variable vide afin de stocker les infos recuperer dans le foreach
                $quizzes = getQuizzes();
                // Boucles pour recuperer les questions reponses et les afficher
                foreach ($quizzes as $quiz) { ?>

                    <?php foreach ($quiz->getQuestions() as $question) { ?>
                        <div class="column is-centered" id="quiz">
                            <div class="rond">
                                <h4 class="subtitle has-text-centered">
                                    <div class="question">
                                        <h2 class="title has-text-centered mt-5"><?php echo $question->getLabelQuestion() . '</br>'; ?></h2>
                                    </div>
                                </h4>
                            </div>
                                <?php foreach ($question->getAnswers() as $answer) { ?>
                                    <div class="column is-centered " id="answer">
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <?php echo $answer->getAnswerLabel() . '</br>'; ?>
                                        </label>
                                    </div>
                                <?php
                                    }
                                ?>
                            <button class="button is-light" type="submit" id="previous">Previous</button>
                            <button class="button is-light" type="submit" id="next">Next</button>
                        </div>
        
                    <?php
                                        }
                                    }
                    ?>

<?php


?>
                            <button class="button is-light" type="submit" id="submit" style="display: none;">Valider</button>

</form>
<!--Bouton pour changer de page, les ancres sont dans le head-->
<nav class="pagination is-rounded" role="navigation" aria-label="pagination">
    <a class="pagination-previous" href="présentation.html">Previous</a>
    <a class="pagination-next" href="quiz2.html">Next page</a>
</nav>
    </div>
    </div>
</section>

<script >
        let questions = Array.from(document.getElementsByClassName('question'));
        let currentQuestionIndex = 0;
        let quiz = document.getElementById('quiz');
        let answers = document.getElementById('answer');
        let nextBtn = document.getElementById('next');
        let submitBtn = document.getElementById('submit');
    
        document.getElementById('previous').addEventListener('click', function() {
            if (currentQuestionIndex > 0) {
                questions[currentQuestionIndex].style.display = 'none';
                currentQuestionIndex--;
                questions[currentQuestionIndex].style.display = 'block';
            }
            if(currentQuestionIndex !== questions.length - 1) {
                submitBtn.style.display = 'none';
            }
        });
        
        document.getElementById('next').addEventListener('click', function() {
            if (currentQuestionIndex < questions.length - 1) {
                questions[currentQuestionIndex].style.display = 'none';
                currentQuestionIndex++;
                questions[currentQuestionIndex].style.display = 'block';
            }
            if(currentQuestionIndex === questions.length - 1) {
                submitBtn.style.display = 'block';
            }
        });
        
        document.getElementById('form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Validez les réponses et traitez les résultats du quiz ici
        });
</script>