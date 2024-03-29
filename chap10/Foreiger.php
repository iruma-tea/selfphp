<?php
require_once __DIR__ . "/Person.php";

class Foreiger extends Person
{
    public string $middleName;

    public function __construct(string $firstName, string $middleName, string $lastName)
    {
        parent::__construct($firstName, $lastName);
        $this->middleName = $middleName;
    }

    public function show(): void
    {
        print "<p>ボクの名前は{$this->firstName}{$this->middleName}{$this->lastName}です。</p>";
    }
}
