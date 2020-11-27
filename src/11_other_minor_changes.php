<?php

// ::class can be called on objects as well
$foo = new DateTime();

var_dump($foo::class);


// Non-capturing catches
try {
    // Something went wrong
    throw new Exception();
} catch (Exception) {
    echo ("Something went wrong");
}

// new string methods: str_contains, str_starts_with, str_ends_with
if (strpos('string with lots of words', 'words') !== false) { /* … */ }

if (str_contains('string with lots of words', 'words')) { /* … */ }

str_starts_with('haystack', 'hay'); // true

str_ends_with('haystack', 'stack'); // true















