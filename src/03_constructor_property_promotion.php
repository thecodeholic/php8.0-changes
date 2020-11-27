<?php

class Person {

    public function __construct(
        public string $firstname,
        public string $lastname,
        public int $age
    )
    {

    }
}