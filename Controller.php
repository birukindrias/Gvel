<?php

namespace Gvel;

abstract class Controller
{
    public function redirect($path)
    {
        // var_dump($path);
        return  header("location: " . $path);

    }
}
