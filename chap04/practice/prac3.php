<?php
$data = [10, 20, 50];
foreach ($data as &$item) {
    $item *= 1.5;
}
print_r($data);
