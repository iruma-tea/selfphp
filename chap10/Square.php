<?php
require_once __DIR__ . "/Figure.php";

class Square extends Figure
{
    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
