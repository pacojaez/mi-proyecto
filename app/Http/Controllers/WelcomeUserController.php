<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
  public function index(){
    return view('welcome');
  }
  public function with_nick($nombre, $nick){
    $nombre=ucfirst($nombre);
      return "Hola $nombre, tu nick es $nick";
    }
    public function without_nick($nombre){
      $nombre=ucfirst($nombre);
        return "Hola $nombre, no tienes nick";
      }
}
