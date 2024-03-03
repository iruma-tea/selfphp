<?php
$books = [
    ['isbn' => '987-4-7981-6364-2', 'title' => '独習 Python'],
    ['isbn' => '987-4-7981-5112-0', 'title' => '独習 Java 新版'],
    ['isbn' => '987-4-7981-5382-7', 'title' => '独習 C# 新版'],
];

$isbn = [];
foreach ($books as $book) {
    ['isbn' => $isbn[]] = $book;
}
print_r($isbn);
