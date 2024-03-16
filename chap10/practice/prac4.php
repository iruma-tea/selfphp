<?php
interface Animal
{
    function outputvoice(): string;
}

class Cat implements Animal
{

    public function outputvoice(): string
    {
        return 'ニャァ';
    }
}

class Dog implements Animal
{

    public function outputvoice(): string
    {
        return 'バゥ';
    }
}

$cat = new Cat();
print $cat->outputvoice() . "<br />";
$dog = new Dog();
print $dog->outputvoice();
