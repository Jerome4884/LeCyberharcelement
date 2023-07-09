<?php

class Question
{
    private $id; // Propriété privée pour stocker l'identifiant de la question
    private $labelQuestion; // Propriété privée pour stocker le libellé de la question
    private $answers; // Propriété privée pour stocker les réponses possibles à la question

    public function __construct($id, $label, $answers)
    {
        $this->id = $id; // Assigner la valeur de l'identifiant passé en paramètre à la propriété $id
        $this->labelQuestion = $label; // Assigner la valeur du libellé passé en paramètre à la propriété $labelQuestion
        $this->answers = $answers; // Assigner la valeur des réponses passées en paramètre à la propriété $answers
    }

    public function getLabelQuestion()
    {
        return $this->labelQuestion; // Renvoyer la valeur de la propriété $labelQuestion
    }

    public function getAnswers()
    {
        return $this->answers; // Renvoyer la valeur de la propriété $answers
    }

    public function getId()
    {
        return $this->id; // Renvoyer la valeur de la propriété $id
    }

    public function setAnswers($answers)
    {
        $this->answers[] = $answers; // Ajouter la nouvelle réponse passée en paramètre à la liste des réponses existantes
    }

    public function getGoodAnswers()
    {
        return array_filter($this->answers, function ($answer) {
            if ($answer->getIsGood()) { // Vérifier si la réponse est marquée comme correcte en utilisant la méthode "getIsGood()" de l'objet "Answer"
                return $answer; // Renvoyer la réponse si elle est correcte
            }
        });
    }
}

?>