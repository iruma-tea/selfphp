<?php
$books = [
    ['title' => '独習 Python', 'price' => '3000'],
    ['title' => '独習 Java 新版', 'price' => '2980'],
    ['title' => '独習 C# 新版', 'price' => '3600'],
];

foreach ($books as ['title' => $title, 'price' => $price]) {
    print "{$title} ({$price}円) <br />";
}
