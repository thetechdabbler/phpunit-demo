<?php

namespace Demo\App;

class StringUtilities
{
    public function reverseString(string $str): string
    {
        return strrev($str);
    }

    public function capitalizeString(string $str): string
    {
        return strtoupper($str);
    }

    public function concatenateStrings(string $str1, string $str2): string
    {
        return $str1 . $str2;
    }
}