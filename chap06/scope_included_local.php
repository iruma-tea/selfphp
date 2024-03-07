<?php
function checkScope(): string
{
    require_once __DIR__ . "/scope_included.php";
    return $scope;
}

print checkScope();
print $scope; // 空表示