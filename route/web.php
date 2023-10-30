<?php



use App\Config\Route;
use App\Controlador\RestauranteController;

Route::get('/',[RestauranteController::class, 'index']);

Route::get('/contact', function () {
    echo "Index";
});

Route::get('/cursos/:slug', function ($slug) {
    echo "El curso es ".$slug;
});

Route::dispatch();
