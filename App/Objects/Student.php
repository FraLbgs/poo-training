<?php

    namespace App\Objects;

    use DateTime;

    class Student extends Person{

        private DateTime $birthDate;
        private string $grade;

        public function __construct(string $lastname, string $firstname, DateTime $birthDate, string $grade, string $school){
            parent::__construct($lastname, $firstname, $school);
            $this->birthDate = $birthDate;
            $this->grade = $grade;
        }

        public function getBirthdate() :DateTime {
            return $this->birthDate;
        }

        public function setBirthdate(DateTime $birthDate) :void {
            $this->birthDate = $birthDate;
        }
        public function getGrade() :string {
            return $this->grade;
        }

        public function setGrade(string $grade) :void {
            $this->grade = $grade;
        }

        public function getAge() :int {
            // return $this->getBirthdate()->diff(new DateTime())->format("%y"); ou
            return $this->getBirthdate()->diff(new DateTime())->y;
        }

        public function introduceMYSelf() :string {
            return "Bonjour, je m'appelle ".
            $this->getFirstname()." ".
            $this->getLastname().
            ", j'ai ".$this->getAge()." ans et je vais à l'école ".
            $this->getSchool()." en classe de ".
            $this->getGrade().".";
        }
    }
