<?php

namespace Demo\App;

/**
 * Summary of MathHelper
 */
class MathHelper
{
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        return $a / $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function add($a, $b)
    {
        return round($a + $b, 2);
    }
}