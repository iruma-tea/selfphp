<?php
require_once __DIR__ . '/TriangleFigure.php';

$tri = new TriangleFigure();
$tri->setBase(-10);
$tri->setHeight(-10);

print "三角形の面積： {$tri->getArea()}";
