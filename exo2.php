<?php

spl_autoload_register();
use App\Views\Page;
use App\Views\Question;
use App\Objects\Teacher;
use App\Objects\HighSchool;
use App\Objects\MiddleSchool;
use App\Views\Menu;

require_once "includes/_menu.php";

$prof1 = new Teacher("Jones", "Indiana", ["histoire", "art"], new HighSchool("Porte Océane", "paris"));
$prof2 = new Teacher("Spears", "Britney", ["musique", "danse"], new MiddleSchool("Raoul Dufy", "Strasbourg"));

$content = '';

$menuLi = new Menu();
$menu = $menuLi->getMainNavigation($liList, 2);

$question1 = new Question([
    'num' => 1,
    'enonce' => 'Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu\'il enseigne et le nom de l\'école où il enseigne.
    <br>
    Définir toutes les propriétés à l\'instanciation en rendant la liste des matières et le nom de lécole faculative.
    <br>
    Créer 2 professeurs différents.',
    'answer' => ''
]);

$content.=$question1->getHtml();

/*******************************************************/

$question2 = new Question([
    'num' => 2,
    'enonce' => 'Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
    <br>
    Modifier les écoles des 2 professeurs.
    <br>
    Afficher les écoles des 2 professeurs.',
    'answer' => "<pre>Indiana : ".$prof1->getSchool()->getName().".</pre>
    <pre>Britney : ".$prof2->getSchool()->getName().".</pre>"
]);

$prof1->setSchool(new HighSchool("François 1er", "paris"));
$prof2->setSchool(new MiddleSchool("Gérard Philippe", "Strasbourg"));

$question2->getData()['answer'].="<pre>Indiana après modif : ".$prof1->getSchool()->getName().".</pre>
<pre>Britney après modif : ".$prof2->getSchool()->getName().".</pre>";

$content.=$question2->getHtml();

// /*******************************************************/

$question3 = new Question([
    'num' => 3,
    'enonce' => 'Créer les méthodes permettant d\'ajouter une matière, de retirer une matière et d\'afficher la liste des matières d\'un prof.
    <br>
    Tester l\'ajout, la suppression et l\'affichage sur chacun des profs.',
    'answer' => "<pre>Indiana : ".$prof1->displayCourses().".</pre>
    <pre>Britney : ".$prof2->displayCourses().".</pre>"
]);

$prof1->addCourse("littérature");
$prof2->addCourse("chant");

$question3->getData()['answer'].="<pre>Indiana après ajout : ".$prof1->displayCourses().".</pre>
<pre>Britney après ajout : ".$prof2->displayCourses().".</pre>";

$prof1->deleteCourse("art");
$prof2->deleteCourse("danse");

$question3->getData()['answer'].="<pre>Indiana après suppression : ".$prof1->displayCourses().".</pre>
<pre>Britney après supression : ".$prof2->displayCourses().".</pre>";

$content.=$question3->getHtml();

/*******************************************************/

$question4 = new Question([
    'num' => 4,
    'enonce' => 'Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
    "Bonjour, je m\'appelle XXX XXX et j\'enseigne à l\'école XXX les matières suivantes : XXX, XXX, XXX.".
    <br>
    Afficher la phrase de présentation des 2 profs.',
    'answer' => $prof1->introduceMYSelf()."<br>".$prof2->introduceMYSelf()
]);

$content.=$question4->getHtml();

/*******************************************************/

$page2 = new Page([
    'title' => 'POO - Des professeurs',
    'h1' => 'POO - Des professeurs',
    'menu' => $menu,
    'content' => $content
]);

$page2->display();