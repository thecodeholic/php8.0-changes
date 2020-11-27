<?php

class SampleClass {
    /**
     * @var int|float
     */
    public int|float $number;

    public function setNumber(int|float $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int|float
    {
        return $this->number;
    }
}