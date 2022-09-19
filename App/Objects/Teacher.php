<?php

namespace App\Objects;

    class Teacher extends Person{

        private array $courses;

        public function __construct(string $lastname, string $firstname, array $courses = [], ?School $school = null){
            parent::__construct($lastname, $firstname, $school);
            $this->courses = $courses;
        }
        
        public function getCourses() :array {
            return $this->courses;
        }

        public function setCourses(array $courses) :void {
            $this->courses = $courses;
        }

        public function addCourse(string $course) :void {
            if(in_array($course, $this->courses)) return;
            $this->courses[] = $course;
        }

         public function deleteCourse(string $course) :void {
            unset($this->courses[array_search($course, $this->courses)]);
        }

        public function displayCourses() :string {
            return implode(", ", $this->courses);
        }

        public function introduceMYSelf() :string {
            return "Bonjour, je m'appelle ".$this->getFirstname()." ".$this->getLastname()." et j'enseigne à l'école ".$this->getSchool()->getName()." les matières suivantes : ".$this->displayCourses().".";
        }

    }

