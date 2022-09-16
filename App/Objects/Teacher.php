<?php

namespace App\Objects;

    class Teacher extends Person{

        private array $courses;

        public function __construct(string $lastname, string $firstname, array $courses = [], string $school = ""){
            parent::__construct($lastname, $firstname, $school);
            $this->courses = $courses;
        }
        
        public function getCourses(): array{
            return $this->courses;
        }

        public function setCourses(array $courses): void{
            $this->courses = $courses;
        }

        public function addCourse(string $course): void{
            $this->courses[] = $course;
        }

         public function deleteCourse(string $courses): void{
            unset($this->courses[array_search($courses, $this->courses)]);
        }

        public function displayCourses(){
            return implode(", ", $this->courses);
        }

        public function introduceMYSelf(): string{
            return "Bonjour, je m'appelle ".$this->getFirstname()." ".$this->getLastname()." et j'enseigne à l'école ".$this->getSchool()." les matières suivantes : ".$this->displayCourses().".";
        }

    }

