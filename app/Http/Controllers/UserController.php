<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      if(Request()->has('empty')){
        $usuarios = [];
      }else {
        // code...
      $usuarios =[
        'luis','pedro','paco','fernando','billy',
      ];
      }
      $title ='Listado de USUARIOS';

      return view('users.index', compact('title', 'usuarios'));
    }


////********************************

    public function show($id){
      if(Request()->has('empty')){
        $id = '';
      }else {
        // code...
      $id ='luis';
      }
      $title ='Detalle usuario: '.$id;

      return view('users.detail', compact('title', 'id'));
    }

    public function create(){
      $title = 'Crear nuevo usuario';

      return view('users.new', compact('title'));
    }
}
