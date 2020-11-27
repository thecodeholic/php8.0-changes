<?php
/**
 * User: TheCodeholic
 * Date: 11/27/2020
 * Time: 10:03 AM
 */

namespace app\attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
class ListenTo
{
    public string $event;

    public function __construct(string $event)
    {
        $this->event = $event;
    }
}