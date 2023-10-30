<?php

namespace App\Controlador;

class Controller
{

    public function view($route,$data=[])
    {
       extract($data);

        if (file_exists("Vistas/{$route}.php")) {
            ob_start();
            include "Vistas/{$route}.php";
            $content = ob_get_clean();
            return $content;
        } else {
            return "el archivo no existe";
        }
    }
}