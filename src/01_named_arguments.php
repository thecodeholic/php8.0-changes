<?php

$numbers = [1, 2, 3, 4, 5, 6];

$evens = array_filter(array: $numbers, callback: function($n){
    return $n % 2 === 0;
});
$squares = array_map(array:  $numbers, callback: function($n) {
    return $n * $n;
});

$pos = strpos( needle: "World", haystack: "Hello World",);
echo '<pre>';
var_dump($pos);
echo '</pre>';