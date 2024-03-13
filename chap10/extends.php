<?php
require_once __DIR__ . "/BusinessPerson.php";

$bp = new BusinessPerson('祥寛', '山田');
$bp->work();
$bp->show();
