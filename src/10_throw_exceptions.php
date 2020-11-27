<?php

function devide($a, $b)
{
    return $b !== 0 ?  $a / $b : throw new Exception("Can't divide on 0");
}

devide(1, 0);