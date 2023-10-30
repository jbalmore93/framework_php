<?php


namespace App\Controlador;

use App\Models\Restaurante;

class RestauranteController extends Controller
{

    public function index()
    {
$restaurantemodel = new Restaurante();
return $restaurantemodel->all();


        return $this->view('home',[
            'id'=>'1',
            'nombre'=>'Balmore',
            'descripcion'=>'Dueño',
            'Acciones'=>'Hablar'
        ]);
    }

  
}
