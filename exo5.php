<?php

spl_autoload_register();
use App\Views\Page;
use App\Views\Question;
use App\Views\Menu;

require_once "includes/_menu.php";

$content = '';

$menuLi = new Menu();
$menu = $menuLi->getMainNavigation($liList, 5);

$question1 = new Question([
    'num' => 1,
    'enonce' => 'Créer une classe permettant de gérer l\'affichage d\'un Question HTML en lisant un fichier grace à la fonction file_get_contents().',
    'answer' => ''
]);

$content.=$question1->getHtml();

/*******************************************************/

$question2 = new Question([
    'num' => 2,
    'enonce' => 'Créer une classe permettant de gérer l\'affichage des pages de ce mini-site.',
    'answer' => ''
]);

$content.=$question2->getHtml();

/*******************************************************/

$question3 = new Question([
    'num' => 3,
    'enonce' => 'Créer une classe permettant de gérer le menu de navigation de ce site.',
    'answer' => ''
]);

$content.=$question3->getHtml();

/*******************************************************/

$question4 = new Question([
    'num' => 4,
    'enonce' => 'Créer une classe permettant de gérer l\'affichage des questions sur ce site.',
    'answer' => ''
]);

$content.=$question4->getHtml();

/*******************************************************/

$page5 = new Page([
    'title' => 'POO - Des vues',
    'h1' => 'POO - Des vues',
    'menu' => $menu,
    'content' => $content
]);

$page5->display();