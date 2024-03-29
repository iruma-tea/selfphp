<?php

function myArrayWalk(array $array, callable $func): void
{
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

function hoge()
{
    $data = [100, 50, 10, 5];
    $result = 0;

    // myArrayWalk($data, function ($value, $key) {
    //     global $result;
    //     $result += $value;
    // });

    myArrayWalk($data, function ($value, $key) use (&$result) {
        $result += $value;
    });


    print "合計値：{$result}";
}

hoge();
