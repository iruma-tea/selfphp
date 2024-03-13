<?php
require_once __DIR__ . "/BusinessPerson.php";

class HetareBusinessPerson extends BusinessPerson
{
    public function work(): void
    {
        parent::work();
        print 'ただし、ポチポチと・・・・';
    }
}
