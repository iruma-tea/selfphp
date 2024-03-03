<?php
$books = [
    ['独習 Python', 3000],
    ['独習 Java新版', 2980],
    ['独習 #C 新版', 3600],
];

foreach ($books as [$title, $price]) {
    print "{$title} ({$price}円) <br />";
}
