<?php
require_once __DIR__ . "/wings/selfphp/chap10/MyClass.php";
require_once __DIR__ . "/wings/selfphp/chap10/sub/MyClass.php";

use wings\selfphp\chap10\MyClass;
use wings\selfphp\chap10\sub\MyClass as SubClass;

print MyClass::showClass();
print SubClass::showClass();
