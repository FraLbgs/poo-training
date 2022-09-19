<?php

    namespace App\Objects;

        class School{

        private string $name;
        private string $city;
        protected static array $grades = [];

        public function __construct(string $name, string $city){
            $this->name = $name;
            $this->city = $city;
        }

        public function getName() :string {
            return $this->name;
        }
    
        public function setName(string $name) :void {
            $this->name = $name;
        }
    
        public function getCity() :string {
            return $this->city;
        }
    
        public function setCity(string $city) :void {
            $this->city = $city;
        }

        public static function getGrades() :array {
            return static::$grades;
        }

        public static function isGradeInSchool(string $name) :bool {
            return in_array($name, static::$grades);
        }
    }