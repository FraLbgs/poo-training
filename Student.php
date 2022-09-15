<?php
    class Student{

        private string $lastname;
        private string $firstname;
        private DateTime $birthDate;
        private string $degree;
        private string $school;

        public function __construct(string $lastname, string $firstname, DateTime $birthDate, string $degree, string $school){
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->birthDate = $birthDate;
            $this->degree = $degree;
            $this->school = $school;
        }

        public function getLastname() :string {
            return $this->lastname;
        }

        public function setLastname(string $lastname) :void {
            $this->lastname = $lastname;
        }

        public function getFirstname() :string {
            return $this->firstname;
        }

        public function setFirstname(string $firstname) :void {
            $this->firstname = $firstname;
        }
        public function getBirthdate() :DateTime {
            return $this->birthDate;
        }

        public function setBirthdate(DateTime $birthDate) :void {
            $this->birthDate = $birthDate;
        }
        public function getDegree() :string {
            return $this->degree;
        }

        public function setDegree(string $degree) :void {
            $this->degree = $degree;
        }

        public function getSchool() :string {
            return $this->school;
        }

        public function setSchool(string $school) :void {
            $this->school = $school;
        }

        public function getAge() :int {
            return $this->getBirthdate()->diff(new DateTime())->format("%Y");
        }

        public function introduce() :string {
            return "Bonjour, je m'appelle ".
            $this->getFirstname()." ".
            $this->getLastname().
            ", j'ai ".$this->getAge()." ans et je vais à l'école ".
            $this->getSchool()." en classe de ".
            $this->getDegree().".";
        }
    }


    $harry = new Student("Covert", "Harry", new DateTime("2012/06/24"), "première", "George Sand");
    $aude = new Student("Javel", "Aude", new DateTime("2000/11/06"), "Licence 3", "Université du Havre");


    echo "<pre>"; var_dump($harry->getDegree()); echo "</pre>";
    echo "<pre>"; var_dump($aude->getDegree()); echo "</pre>";

    $harry->setDegree("CM2");
    $aude->setDegree("Master 1");

    echo "<pre>"; var_dump($harry->getDegree()); echo "</pre>";
    echo "<pre>"; var_dump($aude->getDegree()); echo "</pre>";

    echo "<pre>"; var_dump($harry->getBirthdate()); echo "</pre>";
    echo "<pre>"; var_dump($aude->getBirthdate()); echo "</pre>";

    echo "<pre>"; var_dump($harry->getAge()); echo "</pre>";
    echo "<pre>"; var_dump($aude->getAge()); echo "</pre>";

    echo "<pre>"; var_dump($harry->introduce()); echo "</pre>";
    echo "<pre>"; var_dump($aude->introduce()); echo "</pre>";

?>