<?php

class Strings extends Exception
{
    public function __construct()
    {
        $this -> message = "Эта переменная является строкой";
    }
}
