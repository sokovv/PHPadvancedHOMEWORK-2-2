<?php

class Arrays extends Exception
{
    public function __construct()
    {
        $this -> message = "Эта переменная является массивом";
    }
}
