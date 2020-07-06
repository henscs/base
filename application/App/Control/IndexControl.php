<?php


namespace App\Control;


use MrStock\MJC\Control;

class IndexControl extends Control
{

    public function indexOp()
    {
        return $this->json('Hello,Sir');
    }
}