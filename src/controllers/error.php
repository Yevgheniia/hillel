<?php

namespace src\controllers;

use src\core\Viewer;

class error
{
public function index($var)
{
    Viewer::view('error_index',$var);
}
}