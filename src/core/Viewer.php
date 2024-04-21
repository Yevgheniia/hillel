<?php

namespace Src\core;

class Viewer
{
    public static function view(string $name,array $data=[])
    {

      include_once __DIR__.'/../view/'.$data[0].DIRECTORY_SEPARATOR.$name.'.php';
    }
}