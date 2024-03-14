<?php
require_once __DIR__ . "/MachineTrait.php";

class Fax
{
    use MachineTrait;

    public function send(): void
    {
        print 'sending Fax... sended!';
    }
}

$fx = new Fax();
$fx->run();
$fx->send();
