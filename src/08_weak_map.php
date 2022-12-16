<?php
class User { private $name = 'john'; }

$wm = new WeakMap();
$obj = new User;

// this will work, value will be removed after unset
$wm[$obj] = [1,2,3];

// !!! WARNING: this doesn't work, value  will NOT be removed !!!
$wm[$obj] = $obj;

print_r($wm);

unset($obj);

print_r($wm);
