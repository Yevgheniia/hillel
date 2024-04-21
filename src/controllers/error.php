<?php

namespace src\controllers;

use src\core\Viewer;

class error
{
public function index()
{
    Viewer::view('error/error_index');
}
}