<?php

namespace src\controllers;
use src\core\Viewer;
class home
{
    public function index($var)
    {

        Viewer::view('home_index',$var);
    }
}