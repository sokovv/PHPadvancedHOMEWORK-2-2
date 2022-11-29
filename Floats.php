<?php

class Floats extends Exception
{
    public function __construct()
    {
        $this -> message = "Эта переменная является числом с плавающей запятой";
    }
}
