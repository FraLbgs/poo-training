<?php

spl_autoload_register();
use App\Objects\Template;
use App\Objects\Student;
use App\Objects\HighSchool;
use App\Objects\MiddleSchool;

$harry = new Student("Covert", "Harry", new DateTime("2012/06/24"), "première", new MiddleSchool("George Sand", "Le Havre"));
$aude = new Student("Javel", "Aude", new DateTime("2000/11/06"), "Licence 3", new HighSchool("François 1er", "Paris"));

$page1 = new Template("layout.html");
$question1 = new Template("question.html");
$content = '';

$datasQ1 = [
    'num' => 1,
    'enonce' => 'Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
    <br>
    Définir toutes les propriétés à l\'instanciation.
    <br>
    Créer 2 étudiants différents.',
    'answer' => ''
];

$content.=$question1->buildLayout($datasQ1);

/*******************************************************/

$question2 = new Template("question.html");

$datasQ2 = [
    'num' => 2,
    'enonce' => 'Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
    <br>
    Modifier le niveau scolaire des 2 élèves et les afficher.',
    'answer' => "<pre>Harry : ".$harry->getGrade().".</pre>
    <pre>Aude : ".$aude->getGrade().".</pre>"
];

$harry->setGrade("6ème");
$aude->setGrade("Première");

$datasQ2['answer'].="<pre>Harry après modif : ".$harry->getGrade().".</pre>
<pre>Aude après modif : ".$aude->getGrade().".</pre>";

$content.=$question2->buildLayout($datasQ2);

/*******************************************************/

$question3 = new Template("question.html");

$datasQ3 = [
    'num' => 3,
    'enonce' => 'Remplacer la propriété d\'âge par la date de naissance de l\'élève.
    <br>
    Mettez à jour l\'instanciation des 2 élèves et afficher leur date de naissance.',
    'answer' => "<pre>Date de naissance de Harry : ".$harry->getBirthdate()->format("d-m-Y")."</pre>
    <pre>Date de naissance de Aude : ".$aude->getBirthdate()->format("d-m-Y")."</pre>"
];

$content.=$question3->buildLayout($datasQ3);

/*******************************************************/

$question4 = new Template("question.html");

$datasQ4 = [
    'num' => 4,
    'enonce' => 'Donner la possibilité aux élèves de donner leur âge.
    <br>
    Afficher l\'âge des 2 élèves.',
    'answer' => "<pre>Age de Harry : ".$harry->getAge()."</pre>
    <pre>Age de Aude : ".$aude->getAge()."</pre>"
];

$content.=$question4->buildLayout($datasQ4);

/*******************************************************/

$question5 = new Template("question.html");

$datasQ5 = [
    'num' => 5,
    'enonce' => 'On veut aussi savoir le nom de l\'école où va un élève.
    <br>
    Ajouter la propriété et ajouter la donnée sur les élèves.',
    'answer' => ''
];

$content.=$question5->buildLayout($datasQ5);

/*******************************************************/

$question6 = new Template("question.html");

$datasQ6 = [
    'num' => 6,
    'enonce' => 'Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
    "Bonjour, je m\'appelle XXX XXX, j\'ai XX ans et je vais à l\'école XXX en class de XXX.".
    <br>
    Afficher la phrase de présentation des 2 élèves.',
    'answer' => $harry->introduceMYSelf()."<br>".$aude->introduceMYSelf()
];

$content.=$question6->buildLayout($datasQ6);

/*******************************************************/

$datasL = [
    'title' => 'POO - Des élèves',
    'h1' => 'Programmation Orientée Objet - Des élèves',
    'active1' => 'active',
    'active2' => '',
    'active3' => '',
    'active4' => '',
    'active5' => '',
    'content' => $content
];

$page1->setDatas($datasL);
echo $page1->buildLayout($datasL);

