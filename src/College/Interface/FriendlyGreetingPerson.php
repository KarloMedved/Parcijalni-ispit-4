<?php

namespace App2\College\Interface;

interface FriendlyGreetingPerson extends GreetingPerson
{
    const FOO = 'bar';

    public function smile(): string;
}