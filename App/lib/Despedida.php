<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 01/01/2016
 * Time: 13:59
 */

namespace App\lib;


class Despedida
{

    public function chao($name = "")
    {
        echo "Chao " . $name;
    }

    public function adios($name = "")
    {
        echo "bye bye " . $name;
    }
}