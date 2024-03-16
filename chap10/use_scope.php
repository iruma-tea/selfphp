<?php
require_once __DIR__ . "/wings/selfphp/chap10/MyClass.php";

function hoge(): void {
    use wings\selfphp\chap10\MyClass; // エラー
}
