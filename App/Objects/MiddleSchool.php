<?php

    namespace App\Objects;

    class MiddleSchool extends School{

        private static array $grades = ["6ème", "5ème", "4éme", "3ème"];

        public static function getGrades() :array {
            return self::$grades;
        }

        public static function isGradeInSchool(string $name) :bool {
            if(in_array($name, self::$grades)) return true;
            return false;
        }
    }
