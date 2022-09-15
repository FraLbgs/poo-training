<?php
    class Teacher{

        private string $lastname;
        private string $firstname;
        private array $courses;
        private string $school;

        public function __construct(string $lastname, string $firstname, array $courses = ["sans matière définie"], string $school = "mon école"){
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->course = $courses;
            $this->school = $school;
        }


    }

    $prof1 = new Teacher("Jones", "Indiana", ["histoire", "art"], "Université du Havre");
    $prof1 = new Teacher("Spears", "Britney", ["musique", "danse"], "Geaorge Sand");


?>