<?php

namespace App2\College;

use App2\College\Interface\GreetingPerson;

class Teacher extends Person implements GreetingPerson
{
    public function sayHello(): string
    {
        return "Hello, I am a teacher. My name is $this->name";
    }

    public function attend(): string
    {
        return "Teaching a group!";
    }

    public function __toString()
    {
        return "Nastavnik $this->name";
    }
}