//quiz
//Option1: script js si structure html faite
//récuperation des réponses
let repUn = document.getElementById('repUn').value;
let repDeux = document.getElementById('repDeux').value;
let repTrois = document.getElementById('repTrois').value;
//reponse correcte
let goodRep = repUn;

function check (){
if (goodRep == repUn) {
    console.log('Bravo')
}
else {
    console.log('Oups')
}
}

//En partant du principe que la bonne reponse est la 1
//Si repUn est coché alors on fait un evenement qui montre que c'est ok ou alor on stock la reponse et on affiche le total à la fin

//Option2: Script js si structure html pas faite, sera fait dynamiquement et j'aurais qu'une page js et html !

//stockage des questions et réponses dans un tableau
const quiz = [
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
    {
        question: "",
        reponse: ["choix1", "choix2", "etc" ],
        repGood: 1,
        repUser:"",
    },
];
console.log(quiz);
//Récuperation des elements

let blockQuiz = document.getElementById('blockQuiz');
let quest = document.getElementById('question');
let reps = document.getElementById('reps');
let rep1 = document.getElementById('repUn');
let rep2 = document.getElementById('repDeux');
let rep3 = document.getElementById('repTrois');
let btn = document.getElementById('next');
let result = document.getElementById('score');
let detail = document.getElementById('detail');
let blockResult = document.getElementById('results-container');
let title = document.getElementById('titleResult');

// Création d'une fonction pour afficher les questions les unes après les autres

function displayQuestion(){
    const questData = quiz[question];
    questElmt.innerText = questData.question;
    repsElmt.innerHTML = '';

    questData.reps.forEach((rep, index) =>{
        const reps = document.createElement('label');
        const checkboxElement = document.createElement('input');
    })
}

// Création d'une fonction pour vérifier les réponses quand le quiz est fini
function checkQuiz(){
    let goodRep = 0;

    // Boucle pour parcourir les réponses de l'utilisateur
    quiz.forEach(repUser => {
        if (repUser == repGood) {
            let goodRep =+ 1;
            console.log('Bravo')
        }
        else if (repUser != repGood) {
            let goodRep = 0;
            console.log('Oups')
        } 
    });
}
