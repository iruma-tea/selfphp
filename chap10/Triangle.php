<?php
require_once __DIR__ . "/Figure.php";

class Triangle extends Figure
{
    public function getArea(): float
    {
        return $this->width * $this->height / 2;
    }
}
