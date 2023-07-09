<?php

class Answer {
    private $id; // Propriété privée pour stocker l'identifiant de la réponse
    private $answerLabel; // Propriété privée pour stocker le libellé de la réponse
    private $isGood; // Propriété privée pour stocker l'indicateur de la réponse correcte

    function __construct($id, $answerLabel, $isGood)
    {
        $this->id = $id; // Assigner la valeur de l'identifiant passé en paramètre à la propriété $id
        $this->answerLabel = $answerLabel; // Assigner la valeur du libellé de réponse passé en paramètre à la propriété $answerLabel
        $this->isGood = $isGood; // Assigner la valeur de l'indicateur de réponse correcte passé en paramètre à la propriété $isGood
    }

    function getId(){
        return $this->id; // Renvoyer la valeur de la propriété $id
    }

    function getAnswerLabel() {
        return $this->answerLabel; // Renvoyer la valeur de la propriété $answerLabel
    }

    function getIsGood() {
        return $this->isGood; // Renvoyer la valeur de la propriété $isGood
    }
}

?>