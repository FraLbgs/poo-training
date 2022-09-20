<?php

spl_autoload_register();
use App\Objects\Template;
use App\Objects\School;
use App\Objects\PrimarySchool;
use App\Objects\MiddleSchool;
use App\Objects\HighSchool;

$page5 = new Template("layout.html");
$question1 = new Template("question.html");
$content = '';

$datasQ1 = [
    'num' => 1,
    'enonce' => 'Créer une classe permettant de gérer l\'affichage d\'un template HTML en lisant un fichier grace à la fonction file_get_contents().',
    'answer' => ''
];

$content.=$question1->buildLayout($datasQ1);

/*******************************************************/

$question2 = new Template("question.html");

$datasQ2 = [
    'num' => 2,
    'enonce' => 'Créer une classe permettant de gérer l\'affichage des pages de ce mini-site.',
    'answer' => ''
];

$content.=$question2->buildLayout($datasQ2);

/*******************************************************/

$question3 = new Template("question.html");

$datasQ3 = [
    'num' => 3,
    'enonce' => 'Créer une classe permettant de gérer le menu de navigation de ce site.',
    'answer' => ''
];

$content.=$question3->buildLayout($datasQ3);

/*******************************************************/

$question4 = new Template("question.html");

$datasQ4 = [
    'num' => 4,
    'enonce' => 'Créer une classe permettant de gérer l\'affichage des questions sur ce site.',
    'answer' => ''
];

$content.=$question4->buildLayout($datasQ4);

/*******************************************************/

$datasL = [
    'title' => 'POO - Des vues',
    'h1' => 'POO - Des vues',
    'active1' => '',
    'active2' => '',
    'active3' => '',
    'active4' => '',
    'active5' => 'active',
    'content' => $content
];

$page5->setDatas($datasL);
echo $page5->buildLayout($datasL);

