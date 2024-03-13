<?php
require_once __DIR__ . "/p_inherit.php";

class MySubClass extends MyClass
{
    public function getData(): string
    {
        return '[' . parent::getData() . ']';
    }
}

$obj = new MySubClass('Composer');
print $obj->getData();
