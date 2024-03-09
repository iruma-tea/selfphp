<?php
function myGen()
{
    yield 'あいうえお';
    yield 'かくきけこ';
    yield 'さしすせそ';
}

foreach (myGen() as $value) {
    print $value . '<br />';
}
