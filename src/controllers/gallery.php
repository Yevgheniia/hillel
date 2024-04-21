<?php

namespace src\controllers;
use src\core\Viewer;

class gallery
{
    public function index($var)
    {
        Viewer::view('gallery_index',$var);
    }
    public function create($var)
    {
        Viewer::view('gallery_create',$var);
    }
    public function update($var)
    {
        Viewer::view('gallery_update',$var);
    }
    public function delete($var)
    {
        Viewer::view('gallery_delete',$var);
    }
}