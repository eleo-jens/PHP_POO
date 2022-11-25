<?php

class Person {
    private string $firstName;
    private string $lastName;
    private string $civilStatus;

    public function getFirstName():string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName):void {
        $this->firstName = $firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName):void {
        $this->lastName = $lastName;
    }

    public function getCivilStatus():string {
        return $this->civilStatus;
    }

    public function setCivilStatus(string $civilStatus):void{
        $this->civilStatus = $civilStatus;
    }

    public function show():void {
        echo "I'm a Person and my name is $this->firstName $this->lastName. I'm $this->civilStatus.";
    }
}