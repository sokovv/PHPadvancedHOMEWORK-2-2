<?php


class Integers extends Exception
{
    public function __construct()
    {
        $this -> message = "Эта переменная является числом";
    }
}
