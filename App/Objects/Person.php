<?php

namespace App\Objects;

abstract class Person{
    protected string $firstname;
    protected string $lastname;
    protected ?School $school;

    public function __construct(string $lastname, string $firstname, ?School $school){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->school = $school;
    }

    public function getFirstname() :string {
        return $this->firstname;
    }

    public function setFirstname(string $firstname) :void {
        $this->firstname = $firstname;
    }

    public function getLastname() :string {
        return $this->lastname;
    }

    public function setLastname(string $lastname) :void {
        $this->lastname = $lastname;
    }

    public function getSchool() :School {
        return $this->school;
    }
    
    public function setSchool(School $school) :void {
        $this->school = $school;
    }
}