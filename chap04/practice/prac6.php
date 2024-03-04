<?php
$language = 'Python';
print match ($language) {
    'Python', 'PHP', 'Ruby' => 'インタプリタ―言語',
    'C#', 'Java' => 'コンパイル言語'
};
