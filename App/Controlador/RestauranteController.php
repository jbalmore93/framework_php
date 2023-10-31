<?php


namespace App\Controlador;

use App\Models\Restaurante;

class RestauranteController extends Controller
{

    public function index()
    {
$restaurantemodel = new Restaurante();
return $restaurantemodel->create([
            'nombre_cat'=>'Balmore',
            'descripcion_cat'=>'Dueño',
            'ruta_cat'=>'Hablar'
]);


        return $this->view('home',[
            'id'=>'1',
            'nombre'=>'Balmore',
            'descripcion'=>'Dueño',
            'Acciones'=>'Hablar'
        ]);
    }

  
}
