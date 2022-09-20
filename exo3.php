<?php

spl_autoload_register();
use App\Views\Page;
use App\Views\Question;

$content = '';

$question1 = new Question([
    'num' => 1,
    'enonce' => 'Créer les dossiers "App/Objects" et y ajouter un fichier PHP pour chacune des classes créées lors des exercices précédents.
    <br>
    Assurer le fonctionnement du code des exercices précédents.',
    'answer' => ''
]);


$content.=$question1->getHtml();

/*******************************************************/

$question2 = new Question([
    'num' => 2,
    'enonce' => 'Ajouter les classes dans un namespace.
    <br>
    Automatiser l\'import des fichiers en utilisant les namespaces.',
    'answer' => ''
]);

$content.=$question2->getHtml();

/*******************************************************/

$question3 = new Question([
    'num' => 3,
    'enonce' => 'Mutualiser le code commun des 2 classes grâce à l\'héritage.',
    'answer' => ''
]);


$content.=$question3->getHtml();

/*******************************************************/

$page3 = new Page([
    'title' => 'POO - On réorganise le code',
    'h1' => 'POO - On réorganise le code',
    'active1' => '',
    'active2' => '',
    'active3' => 'active',
    'active4' => '',
    'active5' => '',
    'content' => $content
]);

$page3->display();