<?php

spl_autoload_register();
use App\Views\Page;
use App\Views\Question;
use App\Objects\School;
use App\Objects\PrimarySchool;
use App\Objects\MiddleSchool;
use App\Objects\HighSchool;

$content = '';


$school1 = new School("George Sand", "Le Havre");
$school2 = new School("François 1er", "Paris");

$ps = new PrimarySchool("George Sand", "Le Havre");
$ms = new MiddleSchool("Gérard Philippe", "Strasbourg");
$hs = new HighSchool("François 1er", "Paris");

$question1 = new Question([
    'num' => 1,
    'enonce' => 'Créer une classe permettant de gérer des écoles avec un nom d\'école et une ville.
    <br>
    Créer 2 écoles et afficher leurs proprités.',
    'answer' => "Nom école 1 : ".$school1->getName().", ville : ".$school1->getCity().".<br>
    Nom école 2 : ".$school2->getName().", ville : ".$school2->getCity()."."
]);

$content.=$question1->getHtml();

/*******************************************************/

$question2 = new Question([
    'num' => 2,
    'enonce' => 'Créer 3 classes correspondants aux 3 types d\'école suivants : primaire, des collège et des lycée.
    <br>
    Pour chaque type d\'école définir la liste des niveaux scolaires qu\'il prend en charge (ex de niveau scolaire : "CP", "CM2", "5ème", "Terminale", ...).
    <br>
    Créer une école de chaque type.',
    'answer' => ''
]);

$content.=$question2->getHtml();

/*******************************************************/

$question3 = new Question([
    'num' => 3,
    'enonce' => 'Créer une méthode permettant d\'interroger un type d\'école pour savoir s\'il prend en charge un niveu scolaire.
    <br>
    Tester la méthode créée.',
    'answer' => $ps->isGradeInSchool("5ème").' '.
    $ms->isGradeInSchool("5ème").' '.
    $hs->isGradeInSchool("5ème")
]);

$content.=$question3->getHtml();

/*******************************************************/

$question4 = new Question([
    'num' => 4,
    'enonce' => 'Remplacer les propriétés "école" des élèves et des professeurs par une instance de classe créée. (string devient ecole)
    <br>
    Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.',
    'answer' => ''
]);

$content.=$question4->getHtml();

/*******************************************************/

$page4 = new Page([
    'title' => 'POO - Des écoles',
    'h1' => 'POO - Des écoles',
    'active1' => '',
    'active2' => '',
    'active3' => '',
    'active4' => 'active',
    'active5' => '',
    'content' => $content
]);

$page4->display();