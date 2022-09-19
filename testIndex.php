<?php

spl_autoload_register();
use App\Objects\Template;

$page3 = new Template("layout.html");
$question1 = new Template("question.html");
$content = '';

$datasQ1 = [
    'num' => 1,
    'enonce' => 'Créer les dossiers "App/Objects" et y ajouter un fichier PHP pour chacune des classes créées lors des exercices précédents.
    <br>
    Assurer le fonctionnement du code des exercices précédents.',
    'answer' => ''
];

$content.=$question1->buildLayout($datasQ1);

/*******************************************************/

$question2 = new Template("question.html");

$datasQ2 = [
    'num' => 2,
    'enonce' => 'Ajouter les classes dans un namespace.
    <br>
    Automatiser l\'import des fichiers en utilisant les namespaces.',
    'answer' => ''
];

$content.=$question2->buildLayout($datasQ2);

/*******************************************************/

$question3 = new Template("question.html");

$datasQ3 = [
    'num' => 3,
    'enonce' => 'Mutualiser le code commun des 2 classes grâce à l\'héritage.',
    'answer' => ''
];

$content.=$question3->buildLayout($datasQ3);

/*******************************************************/

$datasL = [
    'title' => 'POO - On réorganise le code',
    'h1' => 'POO - On réorganise le code',
    'active1' => '',
    'active2' => '',
    'active3' => 'active',
    'active4' => '',
    'active5' => '',
    'content' => $content
];

$page3->setDatas($datasL);
echo $page3->buildLayout($datasL);

