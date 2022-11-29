<?php

class Booleans extends Exception
{
    public function __construct()
    {
        $this -> message = "Эта переменная является булевым значением";
    }
}
