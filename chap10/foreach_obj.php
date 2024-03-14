<?php
require_once __DIR__ . "/MyClass.php";

$cls = new MyClass();
foreach ($cls as $key => $value) {
    print "{$key} : {$value} <br />";
}
print '<hr />';
$cls->showProperty();
