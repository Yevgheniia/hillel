<?php

namespace src\controllers;

use src\core\Viewer;

class about
{
    public function index()
    {
        Viewer::view('about/about_index');
    }
    public function page()
    {
        Viewer::view('about/about_page');
    }
}