<?php

use Illuminate\Support\Facades\Route;
use App\Models\tipo_usuario;
use App\Models\usuario_admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
/*
    $tp_usuario = tipo_usuario::all();
    foreach ($tp_usuario as $tipo_usuario){
       echo $tipo_usuario->ID_TIPO_USUARIO."<br/>";
       echo $tipo_usuario->NOMBRE_TIPO_USUARIO."</br>";
       echo "<hr/>";
    }
    die();*/

    $usu_ad = usuario_admin::all();
    foreach ($usu_ad as $usuario_admin){
        echo $usuario_admin -> USERNAME_USUARIO_AD ."<br/>";
        echo $usuario_admin->tipo_usuario->ID_TIPO_USUARIO;
        echo $usuario_admin->tipo_usuario->NOMBRE_TIPO_USUARIO;

        echo "<hr/>";
    }
    die();


    return view('welcome');

});
