<?php
require_once __DIR__ . "/MyMail.php";

$m = new MyMail();
$m->From('admin@example.com');
print $m->From();
