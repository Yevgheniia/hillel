<?php

namespace src\controllers;
use src\core\Viewer;
use src\models\galleries;
use src\models\posts;

class home
{
    public function index()
    {
        $model=new posts();
        $data['posts']=$model->findOne(1);
        Viewer::view('home/home_index',$data);
    }
}