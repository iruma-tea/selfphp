<?php
require_once __DIR__ . "/Person.php";

class BusinessPerson extends Person
{
    public function work(): void
    {
        print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
    }
}
