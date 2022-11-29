<?php

class Objects extends Exception
{
    public function __construct()
    {
        $this -> message = "Эта переменная является объектом";
    }
}
