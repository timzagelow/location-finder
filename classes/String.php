<?php

namespace Classes;

class String
{
    public function split($string)
    {
        return preg_split('/(?<=\D)(?=\d)|\d+\K/', $string);
    }
}