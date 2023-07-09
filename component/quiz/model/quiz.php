<?php
class Quiz {
    private $id; // Propriété privée pour stocker l'identifiant du quiz
    private $questions; // Propriété privée pour stocker les questions du quiz

    function __construct($id, $questions) // Le constructeur est appelé lorsqu'un nouvel objet de la classe est créé. Il prend deux paramètres : "$id" et "$questions"
    {
        $this->id = $id; // Assigner la valeur de l'identifiant passé en paramètre à la propriété $id
        $this->questions = $questions; // Assigner la valeur des questions passées en paramètre à la propriété $questions
    }

    function getQuest() { // permet d'obtenir les questions du quiz
        return $this->questions; // Renvoyer la valeur de la propriété $questions
    }

    function getId() {
        return $this->id; // Renvoyer la valeur de la propriété $id
    }

    public function setQuestions($questions)
    {
        $this->questions = $questions; // Assigner la valeur des questions passées en paramètre à la propriété $questions
    }
}
?>