<?php

namespace src\controllers;
use src\core\Viewer;

class gallery
{
    public function index()
    {
        Viewer::view('gallery/gallery_index');
    }
    public function create()
    {
        Viewer::view('gallery/gallery_create');
    }
    public function update()
    {
        Viewer::view('gallery/gallery_update');
    }
    public function delete($var)
    {
        Viewer::view('gallery/gallery_delete');
    }
}