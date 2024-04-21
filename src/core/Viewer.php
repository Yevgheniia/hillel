<?php

namespace Src\core;

class Viewer
{
    public static function view(string $name,array $data=[])
    {
        extract($data);
      include_once __DIR__.'/../view/'.$name.'.php';
    }
}