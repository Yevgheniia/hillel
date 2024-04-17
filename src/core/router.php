<?php

namespace src\core;

final class router
{
    public function run()
    {

    $var=str_replace('/','',$_SERVER["REQUEST_URI"]);
    $constPath="src\controllers\\";
    $path =$constPath . (empty ($var) ? 'main' : $var);
    if (class_exists($path)){
        $controller = new $path;
    }
    else{
        $path=$constPath.'error';
        $controller=new $path;
    }
    $controller->index();
    }

}
