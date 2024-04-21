<?php

namespace src\controllers;

use src\core\Viewer;

class about
{
    public function index($var)
    {
        Viewer::view('about_index',$var);
    }
    public function page($var)
    {
        Viewer::view('about_page',$var);
    }
}