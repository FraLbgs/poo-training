<?php

    namespace App\Objects;

    class HighSchool extends School{

        private static array $grades = ["Seconde", "Première", "Terminale"];

        public static function getGrades() :array {
            return self::$grades;
        }

        public static function isGradeInSchool(string $name) :bool {
            if(in_array($name, self::$grades)) return true;
            return false;
        }

    }