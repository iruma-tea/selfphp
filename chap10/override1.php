<?php
require_once __DIR__ . "/EliteBusinessPerson.php";

$ebp = new EliteBusinessPerson('リオ', '山田');
$ebp->work();
$ebp->show();
