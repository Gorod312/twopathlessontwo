<?php

namespace app\engine;

class Autoload
{
    public function loadClass($classname){
        $fileinclude=(str_replace(["app","\\"],["..","/"],$classname)).".php";
        if (file_exists($fileinclude)){
            include $fileinclude;
        } else {
            echo "неверное включение файла";
        }
    }
}
